<?php


namespace Source\Controllers;


use League\Plates\Engine;

class Room
{
    /** @var Engine */
    private $view;

    public function __construct($router)
    {
        $this->view = Engine::create(
            dirname( __DIR__, 2). "/theme",
            "php"
        );

        $this->view->addData(["router" => $router]);
    }

    public function addstudent(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }

    public function remstudent(array $data): void
    {
        $callback["data"] = $data;
        echo json_encode($data);
    }
}