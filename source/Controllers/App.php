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
    public function home(): void
    {
        $head = $this->seo->optimize(
            "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("app.home"),
            routeImage("Conta de {$this->user->first_name}")
        )->render();

        echo  $this->view->render("theme/app/dashboard_admin", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function class(): void
    {
      $head = $this->seo->optimize(
        "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
        site("desc"),
        $this->router->route("app.class"),
        routeImage("Conta de {$this->user->first_name}")
      )->render();

      echo  $this->view->render("theme/app/class", [
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
    public function profile(): void
  {
    $head = $this->seo->optimize(
      "Bem-vindo(a) {$this->user->first_name} | " . site("name"),
      site("desc"),
      $this->router->route("app.profile"),
      routeImage("Conta de {$this->user->first_name}")
    )->render();

    echo  $this->view->render("theme/app/profile", [
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