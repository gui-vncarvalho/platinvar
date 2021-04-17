<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

class Course extends DataLayer
{
    public function __construct()
    {
        parent::__construct("courses", ["name","drive","teacher", "description","duration"]);
    }

    public function save(): bool
    {
        if (
            !parent::save()
        ) {
            return false;
        }

        return true;
    }


}