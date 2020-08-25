<?php
class Token{

    public static function generate(){
        Session::set('token', base64_encode(openssl_random_pseudo_bytes(32)));
        return Session::get('token');

    }

    public static function check($token, $is_ajax_req = false){
        if(!empty(Session::get('token')) && $token == Session::get('token')){
            if(!$is_ajax_req)
                Session::unset_session('token');
            return true;
        }
        return false;
    }
}

?>