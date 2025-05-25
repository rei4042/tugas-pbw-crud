<?php
namespace App\Models;

class User
{
    private $id, $email, $password, $name, $created_at, $balance;

    public function __construct($id, $email, $password, $name, $created_at, $balance)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->created_at = $created_at;
        $this->balance = $balance;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCreatedAt(): string {
        return $this->created_at;
    }

    public function getBalance(): int {
        return $this->balance;
    }
}