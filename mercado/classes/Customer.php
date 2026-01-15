<?php

class Customer
{
    public string $firstName;
    public string $lastName;
    public string $email;
    public string $password;
    public array $accounts;

    public function __construct(string $firstName, string $lastName, string $email, string $password, array $accounts) {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->accounts  = $accounts;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
