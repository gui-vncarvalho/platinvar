<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Class Course
 * @package Source\Models
 */
class Course extends DataLayer
{
    /**
     * Course constructor.
     */
    public function __construct()
    {
        parent::__construct("courses", ["name","drive","teacher", "description"]);
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