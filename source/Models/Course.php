<?php


namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Course extends DataLayer
{
    public function __construct()
    {
        parent::__construct("courses", ["course_name","course_duration", "description"]);
    }
}