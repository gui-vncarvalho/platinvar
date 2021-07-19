<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Class Lesson
 * @package Source\Models
 */
class Lesson extends DataLayer
{
    /**
     * Lesson constructor.
     */
    public function __construct()
    {
        parent::__construct("lessons",["lesson_name","teacher","embed","drive","course"]);
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