<?php

namespace App\Users;

class User {

    private $data = [];
    private $properties = [
        'id', 'name', 'surname', 'email', 'password', 'number'
    ];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        }
    }

    public function setData($data) {
        foreach ($this->properties as $property) {
            if (isset($data[$property])) {
                $value = $data[$property];
                $setter = str_replace('_', '', 'set' . $property);
                $this->{$setter}($value);
            }
        }
    }

    public function getData() {
        $data = [];
        foreach ($this->properties as $property) {
            $getter = str_replace('_', '', 'get' . $property);
            $data[$property] = $this->{$getter}();
        }
        return $data;
    }

    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    public function getId() {
        return $this->data['id'] ?? null;
    }

    public function setEmail(String $email) {
        $this->data['email'] = $email;
    }

    public function setPassword(String $password) {
        $this->data['password'] = $password;
    }

    public function getEmail() {
        return $this->data['email'];
    }

    public function getPassword() {
        return $this->data['password'];
    }

    public function setName(String $name) {
        $this->data['name'] = $name;
    }

    public function getName() {
        return $this->data['name'];
    }

    public function setSurname(String $surname) {
        $this->data['surname'] = $surname;
    }

    public function getSurname() {
        return $this->data['surname'];
    }

    public function setNumber(String $number) {
        $this->data['number'] = $number;
    }

    public function getNumber() {
        return $this->data['number'] ?? 0;
    }

}
