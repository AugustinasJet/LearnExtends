<?php

namespace App\Model;

class ModelUser {

    private $table_name;
    private $db;

    public function __construct(\Core\FileDB $db, $table_name) {
        $this->table_name = $table_name;
        $this->db = $db;
    }

    public function load($id) {
        $data_row = $this->db->getRow($this->table_name, $id);

        if ($data_row) {
            return new \App\User($data_row);
        } else {
            return false;
        }
    }

    public function insert($id, \App\User $user) {
        if (!$this->db->getRow($this->table_name, $id)) {
            $this->db->setRow($this->table_name, $id, $user->getData());
            $this->db->save();

            return true;
        } else {
            return false;
        }
    }

    public function update($id, \App\User $user) {
        if ($this->db->getRow($this->table_name, $id)) {
            $this->db->setRow($this->table_name, $id, $user->getData());
            $this->db->save();

            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        if ($this->db->getRow($this->table_name, $id)) {
            $this->db->deleteRow($this->table_name, $id);
            $this->db->save();

            return true;
        } else {
            return false;
        }
    }

    public function loadAll() {
        $user_array = [];

        foreach ($this->db->getRows($this->table_name) as $user) {
            $user_array[] = new \App\User($user);
        }

        return $user_array;
    }

    public function deleteAll() {
        if ($this->db->deleteRows($this->table_name)) {
            $this->db->save();

            return true;
        } else {
            return false;
        }
    }

}
