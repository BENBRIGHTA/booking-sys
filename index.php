<?php

require_once 'vendor/autoload.php';

use App\Models\User;

$user = new User;

print_r($user->getAll());
