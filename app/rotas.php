<?php

use Transportes\Core\Router;



Router::get('/', "HomeController", "index");
Router::post('/cadastrarconta', "LoginController", "cadastrarconta");
Router::get('/login', "LoginController", "login");

Router::get('/criarconta', "LoginController", "criarconta");
