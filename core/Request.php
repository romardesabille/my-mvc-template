<?php

class Request{
    /*
     * example root_dir/name?name=TEST
     *only gets root_dir/name
     */
    public static function uri(){
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
            '/'
        );
    }

    /*
     * Returns get or post request
     */
    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }
}

?>