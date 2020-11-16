<?php


namespace Source\Models;
use CoffeeCode\DataLayer\DataLayer;

class Events extends DataLayer
{
    public function __construct(string $entity, array $required, string $primary = 'id', bool $timestamps = true)
    {
        parent::__construct("event", ["name, date, time"], "id_event");
    }

    public function save(): bool
    {
        
    }
}