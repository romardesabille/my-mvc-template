<?php

class Router{
    protected $routes = array(
        'GET' => array(),
        'POST' => array()
    );

    public function load($file){
        //router = new Router();
        $route = new static();
        require_once $file . '.php';

        return $route;
    }

    public function direct($uri, $requestType){
        if(array_key_exists($uri, $this->routes[$requestType])){
            return $this->callMethod(
                ...explode('/', $this->routes[$requestType][$uri])
            );
        }
        return $this->callMethod('Error404', 'index');
    }

    public function callMethod($controller, $method){
        return (new $controller)->$method();
    }

    public function get($uri, $controller){
//        /*
//         * Remove this code when no folder when deployed
//         */
//        $uri = $this->base_path().'/'. ltrim($uri, '/');
//        $uri = rtrim($uri, '/');
//        /*
//         * end
//         */
        $uri = $this->base_folder().'/'.ltrim($uri);
        $uri = rtrim($uri, '/');
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
//        /*
//         * Remove this code when no folder when deployed
//         */
//        $uri = $this->base_path().'/'. ltrim($uri, '/');
//        /*
//         * end
//         */
//        $uri = rtrim($uri, '/');
        $uri = $this->base_folder().'/'.ltrim($uri);
        $uri = rtrim($uri, '/');
        $this->routes['POST'][$uri] = $controller;
    }

    /*
     * Get Root Folder
     */
    private function base_path(){
        $folder = explode(DS, ROOT_DIR);
        $uri = $folder[count($folder)-2];
        return $uri;
    }

    private function base_folder(){
        global $config;
        if($config['root_folder'] !== '')
            return $config['root_folder'];

        return false;
    }

}
?>
