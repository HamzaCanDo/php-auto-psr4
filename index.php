<?php

require 'vendor/autoload.php';

use App\Models\User;

$user = new User("John Doe");  // Set the name property

$task = new \App\Models\Task;

echo $task->name;
