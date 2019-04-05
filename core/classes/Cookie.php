<?php

namespace Core;

class Cookie extends Core\Abstracts\Cookie {

    public function __construct(string $name) {
        $this->name = name;
    }

    public function delete(): void {
        setcookie($this->name, '', time() - 3600);
    }

    public function exists(): bool {
        return isset($_COOKIE[$this->name]);
    }

    public function read(): array {
        if (!$this->exists()) {
            return [];
        }
        $data = json_decode($_COOKIE[$this->name]);
        if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
            trigger_error('yourErrorMessage', E_USER_WARNING);
            return [];
        }
        return $data;
    }

    public function save($data, $expires_in = 3600): void {
        setcookie($this->name, json_encode($data), time() + $expires_in);
    }

}
