<?php


namespace Source\Controllers;


use http\Message;
use League\Plates\Engine;
use Source\Models\User;

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
        $stdData = filter_var_array($data, FILTER_SANITIZE_STRING);

        if (in_array("", $stdData)){
            return;
        }

        $studentId = $data["id"];
        $studentClass = $data["class"];
        $modelStd = new User();
        $students = $modelStd->findById($studentId)->fetch(true);
        $students->class=$studentClass;
        $students->save();


        $callback["student"] = "student";
        echo json_encode($data);
    }

    public function remstudent(array $data): void
    {
        if (empty($data["id"])) {
            return;
        }

        $id = filter_var($data["id"], FILTER_VALIDATE_INT);
        $user = (new User())->findById($id);
        if($user){
            $user->class = NULL;
        }

        $callback["remove"] = true;
        echo json_encode($callback);
    }
}