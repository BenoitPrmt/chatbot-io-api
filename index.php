<?php

require 'vendor/autoload.php';

use App\Controllers\Message;
use App\Controllers\Messages;
use App\Controllers\User;
use App\Router;

use App\Models\sql;
use App\Models\UserModel;

$userModel = new UserModel([
  'host' => '127.0.0.1',
  'port' => '8889',
  'dbname' => 'chatbot_io',
  'user' => 'root',
  'password' => 'root'
]);

//$userModel->createUser([
//  'email' => 'a@a.fr',
//  'password' => 'password'
//]);

new Router([
  'user/:id' => User::class,
  'message/:id' => Message::class,
  'messages' => Messages::class
]);
