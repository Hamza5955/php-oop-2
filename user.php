<?php

class User {
    protected $name;
    protected $last_name;
    protected $email;
    
    public function __construct($_name, $_last_name, $_email) {
        $this->name = $_name;
        $this->last_name = $_last_name;
        $this->email = $_email;
    }
}
