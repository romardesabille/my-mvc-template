<?php
if(!empty($config['base_url'])){
    function base_url(){
        global $config;

        return $config['base_url'];
    }
}else{
    die('Please set base url config/config.php');
}
//Redirect
function redirect($redirect, $message = null, $message_type = null)
{
    //Message Type for bootstrap framework
    if ($message != null)
        Session::set('message', $message);
    if ($message_type != null) {
        Session::set('message_type', $message_type);
    }
    if ($redirect != false) {
        header('Location: ' . base_url(). $redirect);
    }
}
//Flash message
function flash_message()
{
    $message = Session::get('message');
    $message_type = Session::get('message_type');
    if (!empty($message) && !empty($message_type)) {
        if ($message_type == 'error') {
            echo '<div class="alert alert-dismissible alert-danger">
                  <button class="close" data-dismiss="alert">&times;</button>'
                . $message .
                '</div>';
        } else if ($message_type == 'success') {
            echo '<div class="alert alert-dismissible alert-success">
                  <button class="close" data-dismiss="alert">&times;</button>'
                . $message .
                '</div>';
        }
    }elseif(!empty($message)){
        echo $message;
    }
    Session::unset_session('message');
    Session::unset_session('message_type');
}
?>