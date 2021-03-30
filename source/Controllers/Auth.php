<?php

namespace Source\Controllers;

use Exception;
use League\OAuth2\Client\Provider\Facebook;
use League\OAuth2\Client\Provider\FacebookUser;
use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Provider\GoogleUser;
use Source\Models\Lesson;
use Source\Models\Classroom;
use Source\Models\User;
use Source\Support\Email;

/**
 * Class Auth
 * @package Source\Controllers
 */
class Auth extends Controller
{
    /**
     * Auth constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    /**
     * @param $data
     */
    public function login($data): void
    {
        $ra = filter_var($data["id"], FILTER_VALIDATE_INT);
        $passwd = filter_var($data["passwd"], FILTER_DEFAULT);

        if(!$ra || !$passwd) {
            echo $this->ajaxResponse("message", [
                "type" => "alert",
                "message" => "Informe seu registro e senha para logar"
            ]);
            return;
        }

        $user = (new User())->find("id = :i", "i={$ra}")->fetch();
        if(!$user || !password_verify($passwd, $user->passwd)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Registro ou senha informados não conferem"
            ]);
            return;
        }

        /** SOCIAL VALIDATE
        $this->socialValidate($user);*/

        $_SESSION["user"] = $user->id;

        if ( $user->extra == 1 ) {
            echo $this->ajaxResponse("redirect",["url" => $this->router->route("app.student")]);
        }
        if ( $user->extra == 2 ) {
            echo $this->ajaxResponse("redirect",["url" => $this->router->route("app.teacher")]);
        }
        if ( $user->extra == 3 ) {
            echo $this->ajaxResponse("redirect",["url" => $this->router->route("app.admin")]);
        }

    }

    /**
     * @param $data
     */
    public function register($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Preencha todos os campos para cadastrar-se"
            ]);
            return;
        }

        $user = new User();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->course = $data["course"];

        switch ($user->course) {
            case 1:
                $user->course = "Auxiliar Administrativo";
                break;
            case 2:
                $user->course = "Auxiliar em Departamento Pessoal";
                break;
            case 3:
                $user->course = "Auxiliar em Logística";
                break;
            case 4:
                $user->course = "Marketing de Varejo";
                break;
            case 5:
                $user->course = "Técnicas de Vendas";
                break;
            case 6:
                $user->course = "Desenvolvimento de Websites";
                break;
        }

        $user->company = $data["company"];
        $user->local = $data["local"];
        $user->extra = $data["extra"];

        /** SOCIAL VALIDATE
        $this->socialValidate($user);*/

        if (!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        unset($_SESSION["user"]);
        flash("success","Cadastro efetuado com sucesso!");
        $this->router->redirect("web.login");
    }

    /**
     * @param $data
     */
    public function registerTea($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Preencha todos os campos para cadastrar-se"
            ]);
            return;
        }

        $user = new User();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->course = $data["course"];

        switch ($user->course) {
            case 1:
                $user->course = "Auxiliar Administrativo";
                break;
            case 2:
                $user->course = "Auxiliar em Departamento Pessoal";
                break;
            case 3:
                $user->course = "Auxiliar em Logística";
                break;
            case 4:
                $user->course = "Marketing de Varejo";
                break;
            case 5:
                $user->course = "Técnicas de Vendas";
                break;
            case 6:
                $user->course = "Desenvolvimento de Websites";
                break;
        }

        $user->extra = $data["extra"];

        /** SOCIAL VALIDATE
        $this->socialValidate($user);*/

        if (!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        unset($_SESSION["user"]);
        flash("success","Cadastro efetuado com sucesso!");
        $this->router->redirect("web.login");
    }

    /**
     * @param $data
     */
    public function forget($data): void
    {
        $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);
        if(!$email) {
            echo $this->ajaxResponse("message", [
               "type" => "alert",
               "message" => "Informe o SEU E-MAIL para recuperar a senha"
            ]);
            return;
        }

        $user = (new User())->find("email = :e", "e={$email}")->fetch();
        if(!$user) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "O E-MAIL informado não é cadastrado"
            ]);
            return;
        }

        $user->forget = (md5(uniqid(rand(), true)));
        $user->save();

        $_SESSION["forget"] = $user->id;

        $email = new Email();
        $email->add(
          "Recupere sua senha |" . site("name"),
          $this->view->render("emails/recover", [
              "user" => $user,
              "link" => $this->router->route("web.reset", [
                  "email" => $user->email,
                  "forget" => $user->forget
              ])
          ]),
          "{$user->first_name} {$user->last_name}",
          $user->email
        )->send();

        flash("success","Enviamos um link de recuperação para seu e-mail");
        echo $this->ajaxResponse("redirect",[
            "url" => $this->router->route("web.forget")
        ]);
    }

    /**
     * @param $data
     */
    public function reset($data): void
    {
        if(empty($_SESSION["forget"]) || !$user = (new User())->findById($_SESSION["forget"])) {
            flash("error", "Não foi possível recuperar, tente novamente");
            echo $this->ajaxResponse("redirect", [
                "url" => $this->router->route("web.forget")
            ]);
            return;
        }

        if(empty($data["password"]) || empty($data["password_re"])) {
            echo $this->ajaxResponse("message", [
                "type" => "alert",
                "message" => "Informe e repita sua nova senha"
            ]);
            return;
        }

        if($data["password"] != $data["password_re"]) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Você informou duas senhas diferentes"
            ]);
            return;
        }

        $user->passwd = $data["password"];
        $user->forget = null;

        if(!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        unset($_SESSION["forget"]);

        flash("success", "Sua senha foi atualizada com sucesso");
        echo $this->ajaxResponse("redirect", [
            "url" => $this->router->route("web.login")
        ]);
        return;
    }

    /**
     * @param $data
     */
    public function lesson($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Preencha todos os campos para cadastrar"
            ]);
            return;
        }

        $lesson = new Lesson();
        $lesson->lesson_name = $data["lesson_name"];
        $lesson->module = $data["module"];
        $lesson->teacher = $data["first_name"];
        $lesson->course = $data["curso"];
        $lesson->embed = $data["embed"];
        $lesson->drive = $data["drive"];

        if (!$lesson->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $lesson->fail()->getMessage()
            ]);
            return;
        }

        /** Auth */
        echo $this->ajaxResponse("redirect", [
        "url" => $this->router->route("app.teacher")
        ]);
    }

    /**
     * @param $data
     */
    public function classroom($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => "Preencha todos os campos para cadastrar"
            ]);
            return;
        }

        $classroom = new Classroom();
        $classroom->classroom_name = $data["classroom_name"];
        $classroom->teacher = $data["first_name"];
        $classroom->course = $data["course"];

        if (!$classroom->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $classroom->fail()->getMessage()
            ]);
            return;
        }

        /** Auth */
        echo $this->ajaxResponse("redirect", [
            "url" => $this->router->route("app.teacher")
        ]);
    }
    
    /**
     *

    public function facebook(): void
    {
        $facebook = new Facebook(FACEBOOK_LOGIN);
        $error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRIPPED);
        $code = filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRIPPED);

        if (!$error && !$code) {
            $auth_url = $facebook->getAuthorizationUrl(["scope" => "email"]);
            header("Location: {$auth_url}");
            return;
        }

        if ($error) {
            flash("error", "Não foi possível logar com o Facebook");
            $this->router->redirect("web.login");
        }

        if ($code && empty($_SESSION["facebook_auth"])) {
            try {
                $token = $facebook->getAccessToken("authorization_code", ["code" => $code]);
                $_SESSION["facebook_auth"] = serialize($facebook->getResourceOwner($token));
            } catch (Exception $exception) {
                flash("error", "Não foi possível logar com o Facebook");
                $this->router->redirect("web.login");
            }
        }

        /** @var $facebook_user FacebookUser
        $facebook_user = unserialize($_SESSION["facebook_auth"]);
        var_dump($_SESSION["facebook_auth"]);
        $user_by_id = (new User())->find("facebook_id = :id", "id={$facebook_user->getId()}")->fetch();

        //LOGIN BY ID
        if ($user_by_id) {
            unset($_SESSION["facebook_auth"]);

            $_SESSION["user"] = $user_by_id->id;
            $this->router->redirect("app.home");
        }

        //LOGIN BY EMAIL
        $user_by_email = (new User())->find("email = :e","e={$facebook_user->getEmail()}")->fetch();
        if ($user_by_email) {
            flash("info", "Olá {$facebook_user->getFirstName()}, faça login para conectar seu Facebook");
            $this->router->redirect("web.login");
        }

        //REGISTER IF NOT
        $link = $this->router->route("web.login");
        flash("info",
            "Olá {$facebook_user->getFirstName()}, <b>se já tem uma conta clique em <a title='Fazer login' href='{$link}'>FAZER LOGIN</a></b>, ou complete seu cadastro");
        $this->router->redirect("web.register");
    }

    /**
     *

    public function google(): void
    {
        $google = new Google(GOOGLE_LOGIN);
        $error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRIPPED);
        $code = filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRIPPED);

        if (!$error && !$code) {
            $auth_url = $google->getAuthorizationUrl();
            header("Location: {$auth_url}");
            return;
        }

        if ($error) {
            flash("error", "Não foi possível logar com o Google");
            $this->router->redirect("web.login");
        }

        if ($code && empty($_SESSION["google_auth"])) {
            try {
                $token = $google->getAccessToken("authorization_code", ["code" => $code]);
                $_SESSION["google_auth"] = serialize($google->getResourceOwner($token));
            } catch (Exception $exception) {
                flash("error", "Não foi possível logar com o Google");
                $this->router->redirect("web.login");
            }
        }

        /** @var $google_user GoogleUser
        $google_user = unserialize($_SESSION["google_auth"]);
        $user_by_id = (new User())->find("google_id = :id", "id={$google_user->getId()}")->fetch();

        //LOGIN BY ID
        if ($user_by_id) {
            unset($_SESSION["google_auth"]);

            $_SESSION["user"] = $user_by_id->id;
            $this->router->redirect("app.home");
        }

        //LOGIN BY EMAIL
        $user_by_email = (new User())->find("email = :e","e={$google_user->getEmail()}")->fetch();
        if ($user_by_email) {
            flash("info", "Olá {$google_user->getFirstName()}, faça login para conectar seu Google");
            $this->router->redirect("web.login");
        }

        //REGISTER IF NOT
        $link = $this->router->route("web.login");
        flash("info",
            "Olá {$google_user->getFirstName()}, <b>se já tem uma conta clique em <a title='Fazer login' href='{$link}'>FAZER LOGIN</a></b>, ou complete seu cadastro");
        $this->router->redirect("web.register");
    }

    /**
     * @param User $user

    public function socialValidate(User $user): void
    {
        /**
         * FACEBOOK

        if(!empty($_SESSION["facebook_auth"])) {
            /** @var $facebook_user FacebookUser
            $facebook_user = unserialize($_SESSION["facebook_auth"]);

            $user->facebook_id = $facebook_user->getId();
            $user->photo = $facebook_user->getPictureUrl();
            $user->save();

            unset($_SESSION["facebook_auth"]);
        }

        /**
         * GOOGLE

        if(!empty($_SESSION["google_auth"])) {
            /** @var $google_user GoogleUser
            $google_user = unserialize($_SESSION["google_auth"]);

            $user->google_id = $google_user->getId();
            $user->photo = $google_user->getAvatar();
            $user->save();

            unset($_SESSION["google_auth"]);
        }
    }*/
}











