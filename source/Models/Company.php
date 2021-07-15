<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Class Company
 * @package Source\Models
 */
class Company extends DataLayer
{
    /**
     * Company constructor.
     */
    public function __construct()
    {
        parent::__construct("company", ["company_name","unit", "cnpj", "accountable", "phone", "email"]);
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if (
            !$this->validateCnpj()
            || !$this->validatePhone()
            || !$this->validateEmail()
            || !parent::save()
        ) {
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    protected function validateCnpj(): bool
    {

    }

    /**
     * @return bool
     */
    protected function validatePhone(): bool
    {

    }

    /**
     * @return bool
     */
    protected function validateEmail(): bool
    {
        if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->fail = new Exception("Informe um e-mail válido");
            return false;
        }

        $userByEmail = null;
        if (!$this->id) {
            $userByEmail = $this->find("email = :email", "email={$this->email}")->count();
        } else {
            $userByEmail = $this->find("email = :email AND id != :id", "email={$this->email}&id={$this->id}")->count();
        }

        if ($userByEmail) {
            $this->fail = new Exception("O e-mail informado já está em uso");
            return false;
        }

        return true;
    }
}