<?php

namespace App\Admin;

interface UserRepositorieInterface {

    public function all();
    public function create(array $param = []);
    public function update(int $id_user, array $param = []);
    public function find(int $id_user);
    public function delete(int $id_user);
}