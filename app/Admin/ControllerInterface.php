<?php

namespace App\Admin;

use App\Repositories\UserRepositorie;

interface ControllerInterface
{
    public function __construct(UserRepositorie $user);
}
