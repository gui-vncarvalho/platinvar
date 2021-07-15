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

    protected function validateEvent(): bool
    {
        $eventByName = null;
        if (!$this->id) {
            $eventByName = $this->find("name = :event", "name={$this->event}")->count();
        } else {
            $eventByName = $this->find("name = :event AND id != :id", "name={$this->event}&id={$this->id}")->count();
        }

        if ($eventByName) {
            $this->fail = new Exception("Você já possui um evento com este nome");
            return false;
        }

        return true;
    }
}