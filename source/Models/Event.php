<?php


namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Event extends DataLayer
{
    public function __construct()
    {
        parent::__construct("events", ["name","date","time"], "id_event",false);
    }

    public function save(): bool
    {
        if (
            !$this->validateEvent()
        ) {
            return false;
        }

        return true;
    }
}