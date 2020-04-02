<?php

class Hello {
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function say() {
        return "Hello {$this->name}";
    }
}