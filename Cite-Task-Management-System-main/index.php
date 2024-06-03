<?php

require 'Model/function.php';
require 'Model/Database.php';

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

switch( $uri )
{
    case "/index.php/login":
        require 'controller/login/index.php';
        break;
    case "/index.php/create":
        require 'controller/add_project/index.php';
        break;
    case "/index.php/create_user":
        require 'controller/add_user/index.php';
        break;
    case "/index.php/admin_list":
        require 'controller/admin_list/index.php';
        break;
    case "/index.php/admin_task":
        require 'controller/admin_task/index.php';
        break;
    case "/index.php/admin":
        require 'controller/admin/index.php';
        break;
    
    default:
        break;
}

