<?php

namespace Hetic\ReshomeH\Model\Class;
use Hetic\ReshomeH\model\Bases\BaseClass;

class User extends BaseClass
{
    private string $username;
    private string $email;
    private string $password;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }
}
