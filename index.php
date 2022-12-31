<?php

class HappyNewYear
{
    public function __construct(
        protected string $firstName,
        protected string $lastName
    ) {
        return $this->$firstName . ' ' . $this->$lastName;
    }
}
