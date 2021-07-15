<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Class Classroom
 * @package Source\Models
 */
class Classroom extends DataLayer
{
    /**
     * Classroom constructor.
     */
    public function __construct()
    {
        parent::__construct("classroom",["classroom_name","teacher","course"]);
    }

    /**
     * @return bool
     */
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