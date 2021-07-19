<?php

namespace Source\Controllers;

use Exception;
use Source\Models\Lesson;
use Source\Models\Classroom;
use Source\Models\Course;
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
        if ( $user->extra == 4 ) {
            echo $this->ajaxResponse("redirect",["url" => $this->router->route("app.office")]);
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

        $passwd = $data["passwd"];
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
        $user->class = NULL;

        if (empty($user->company))
        {
            $user->company = null;
        }
        if (empty($user->local))
        {
            $user->local = null;
        }
        if (empty($user->extra))
        {
            $user->extra = 1;
        }

        if (!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        $email = new Email();
        $email->add(
            "Registro de usuário | " . site("name"),
            $this->view->render("emails/welcome", [
                "user" => $user,
                "passwd" => $passwd,
                "link" => $this->router->route("web.login")
            ]),
            "{$user->first_name} {$user->last_name}",
            $user->email
        )->send();

        flash("success","Cadastro efetuado com sucesso!");
        echo $this->ajaxResponse("redirect",[
            "url" => $this->router->route("web.login")
        ]);
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
    }

    /**
     * @param $data
     */
    public function lesson($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {
            $this->router->redirect("app.teacher");
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

        $this->router->redirect("app.teacher");
    }

    /**
     * @param $data
     */
    public function course($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {

            return;
        }

        $course = new Course();
        $course->course = $data["course_name"];
        $course->drive = $data["drive"];
        $course->description = $data["description"];

        if (!$course->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $course->fail()->getMessage()
            ]);
            return;
        }

        flash("success","Cadastro efetuado com sucesso!");
        echo $this->ajaxResponse("redirect",[
            "url" => $this->router->route("web.login")
        ]);
    }

    /**
     * @param $data
     */
    public function classroom($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {

            return;
        }

        $classroom = new Classroom();
        $classroom->classroom_name = $data["classroom_name"];
        $classroom->teacher = $data["teacher"];
        $classroom->course = $data["course"];
        $classroom->drive = $data["drive"];

        if (!$classroom->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $classroom->fail()->getMessage()
            ]);
            return;
        }

        /** Auth */
        echo $this->ajaxResponse("redirect", [
            "url" => $this->router->route("app.admin")
        ]);
    }

    /**
     * @param $data
     */
    public function appRegisterStudent($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {

            return;
        }

        $passwd = $data["passwd"];

        $user = new User();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->course = $data["course"];
        $user->extra = 1;
        $user->class = NULL;

        if (empty($user->company))
        {
            $user->company = null;
        }
        if (empty($user->local))
        {
            $user->local = null;
        }

        if (!$user->save()) {

            return;
        }

        $email = new Email();
        $email->add(
            "Registro de usuário | " . site("name"),
            $this->view->render("emails/welcome", [
                "user" => $user,
                "passwd" => $passwd,
                "link" => $this->router->route("web.login")
            ]),
            "{$user->first_name} {$user->last_name}",
            $user->email
        )->send();

        echo $this->ajaxResponse("redirect",[
            "url" => $this->router->route("web.login")
        ]);
    }

    /**
     * @param $data
     */
    public function appRegisterTeacher($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if(in_array("", $data)) {

            return;
        }

        $passwd = $data["passwd"];

        $user = new User();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->course = $data["course"];
        $user->extra = 2;
        $user->class = NULL;

        if (!$user->save()) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "message" => $user->fail()->getMessage()
            ]);
            return;
        }

        $email = new Email();
        $email->add(
            "Registro de usuário | " . site("name"),
            $this->view->render("emails/welcome", [
                "user" => $user,
                "passwd" => $passwd,
                "link" => $this->router->route("web.login")
            ]),
            "{$user->first_name} {$user->last_name}",
            $user->email
        )->send();

        echo $this->ajaxResponse("redirect",[
            "url" => $this->router->route("web.login")
        ]);
    }
}