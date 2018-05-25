<?php

namespace App\core;

class Controller{
    private $dbc;
    private $session;
    private $data = [];

    final public function __construct(\App\core\DatabaseConnection &$dbc){
        $this->dbc=$dbc;
    }

    final public function &getSession():\App\core\Session\Session{
        return $this->session;
    }

    final public function setSession(\App\core\Session\Session &$session){
        $this->session = $session;
    }

    final public function &getDatabaseConnection(): \App\Core\DatabaseConnection{
        return $this->dbc;
    }

    final protected function set(string $name, $value): bool{
        $result = false;
        if(\preg_match('/^[a-z][a-z0-9]+(?:[A-Z][a-z0-9]+)*$/', $name)){
            $this->data[$name] = $value;
            $result = true;
        }
        return $result;
    }

    final public function getData(): array{

        return $this->data;
    }
}