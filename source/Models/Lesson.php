<?php


namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Lesson extends DataLayer
{
  public function __construct()
  {
    parent::__construct("lessons",["class_name","class_duration","embed","id_course"],"id_class");
  }
}