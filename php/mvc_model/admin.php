<?php

// Define links
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');
define('PATH_VIEW', __DIR__ . '/public');

// Run function in Common file

function load()
{
    // Get config in PATH_APPLICATION

    // Default controller
    $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];

    // Default action
    $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];

    // Proceed controller name since its name     is  {Name}_Controller
    $controller = ucfirst(strtolower($controller)) . '_Controller';

    // Proceed action name since its name     is  {name}Action
    $action = strtolower($action) . 'Action';
    
    // Check existation of controller file in PATH_APPLICATION
    if (!file_exists('../mvc_model/Controller/$controller.php')){
        die ('Cannot find '. $controller . ' in '. PATH_APPLICATION);
    }
    
    // Include FATHER controller
    include_once PATH_SYSTEM . '/core/ControllerAdmin.php';
    
    // Call SON controller
    require_once PATH_APPLICATION . '/Controller/' . $controller . '.php';

    // Check existation
    if (!class_exists($controller)){
        die ('Class ' . $controller . ' is not defined!!');
    }

    // Initiate controller
    $controllerObject = new $controller();

    // Check action in SON controller exist or not
    if ( !method_exists($controllerObject, $action)){
        die ('Action ' . $action . ' do not exists!!!');
    }
    
    // Run application
    $controllerObject->{$action}();
}
