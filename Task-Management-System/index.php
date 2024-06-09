<?php

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

$folder = explode('/', $uri)[1];

require 'Model/function.php';
require 'Model/Database.php';

switch( $uri )
{
    case "/{$folder}/index.php/login":
        require 'controller/login/index.php';
        break;
    case "/{$folder}/index.php/create":
        require 'controller/add_project/index.php';
        break;
    case "/{$folder}/index.php/create_user":
        require 'controller/add_user/index.php';
        break;
    case "/{$folder}/index.php/admin_list":
        require 'controller/admin_list/index.php';
        break;
    case "/{$folder}/index.php/admin_task":
        require 'controller/admin_task/index.php';
        break;
    case "/{$folder}/index.php/admin":
        require 'controller/admin/index.php';
        break;
    
    default:
        break;
}

