<?php

use Transportes\Core\Router;



Router::add('/', "HomeController", "index");
Router::add('/login', "LoginController", "login");
Router::add('/teste', "HomeController", "teste");
Router::add('/cadastro', "LoginController", "criarconta");