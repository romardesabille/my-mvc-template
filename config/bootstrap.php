<?php
@session_start();

require_once 'config/config.php';
if($config['error_reporting'] === false)
    error_reporting(0);

define('DS', DIRECTORY_SEPARATOR);
//root directory
define('ROOT_DIR', getcwd().DS);
//core directory
define('CORE_DIR', ROOT_DIR.'core'.DS);
//public controllers director
define('CONTROLLERS_DIR', ROOT_DIR.'controllers'.DS);
//View Directory
define('VIEW_DIR', ROOT_DIR.'views'.DS);
//Model Directory
define('MODEL_DIR', ROOT_DIR.'models'.DS);
//Config Directory
define('CONFIG_DIR', ROOT_DIR.'config'.DS);
//user images path
//define('USER_PROFILE_DIR', ROOT_DIR.'images'.DS.'user_profile'.DS);


require_once 'functions.php';
/*
|--------------------------------------------------------------------------
| Auto Load Classes
|--------------------------------------------------------------------------
*/
spl_autoload_register(function ($class){
    $core_path_file = CORE_DIR . "{$class}.php";
    $controllers_path_file = CONTROLLERS_DIR . "{$class}.php";
    $model_path_file = MODEL_DIR . "{$class}.php";

    if(file_exists($core_path_file))
        require_once $core_path_file;
    else if(file_exists($controllers_path_file))
        require_once $controllers_path_file;
    else if(file_exists($model_path_file))
        require_once $model_path_file;
});


$router = Router::load(CONFIG_DIR . 'routes')
    ->direct(Request::uri(), Request::method());
?>