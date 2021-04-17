<?php

namespace Source\Controllers;

use Source\Models\User;

/**
 * Class App
 * @package Source\Controllers
 */
class App extends Controller
{
    //* @var User */
    /**
     * @var \CoffeeCode\DataLayer\DataLayer|null
     */
    protected $user;

    /**
 \    * App constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if(empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);

            flash("error", "Acesso negado. Favor logue-se");
            $this->router->redirect("web.login");
        }
    }

    /**
     *
     */
    public function student(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.student"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        echo  $this->view->render("theme/student/dashboard_student", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function teacher(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.teacher"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        echo  $this->view->render("theme/teacher/dashboard_teacher", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function admin(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.admin"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        echo  $this->view->render("theme/admin/dashboard_admin", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function office(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.office"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        echo  $this->view->render("theme/office/dashboard_office", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function classStd(): void
    {
      $head = $this->seo->optimize(
        "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
        site("desc"),
        $this->router->route("app.classstd"),
        routeImage("Conta de {$this->user->first_name}")
      )->render();

      echo  $this->view->render("theme/student/class_std", [
        "head" => $head,
        "user" => $this->user
      ]);
    }

    /**
     *
     */
    public function classTea(): void
    {
      $head = $this->seo->optimize(
        "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
        site("desc"),
        $this->router->route("app.classtea"),
        routeImage("Conta de {$this->user->first_name}")
      )->render();

      echo  $this->view->render("theme/teacher/class_tea", [
        "head" => $head,
        "user" => $this->user
      ]);
    }

    /**
     *
     */
    public function calendar(): void
  {
    $head = $this->seo->optimize(
      "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
      site("desc"),
      $this->router->route("app.calendar"),
      routeImage("Conta de {$this->user->first_name}")
    )->render();

    echo  $this->view->render("theme/app/calendar", [
      "head" => $head,
      "user" => $this->user
    ]);
  }

    /**
     *
     */
    public function profileStd(): void
  {
    $head = $this->seo->optimize(
      "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
      site("desc"),
      $this->router->route("app.profilestd"),
      routeImage("Conta de {$this->user->first_name}")
    )->render();

    echo  $this->view->render("theme/student/profile_std", [
      "head" => $head,
      "user" => $this->user
    ]);
  }

    /**
     *
     */
    public function profileTea(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.profiletea"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        echo  $this->view->render("theme/teacher/profile_tea", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function logoff(): void
    {
        unset($_SESSION["user"]);

        flash("info", "Você saiu com sucesso, volte logo {$this->user->first_name}");
        $this->router->redirect("web.login");
    }
}