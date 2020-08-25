<?php
class Security{

    public function xss_clean($string) {
        global $config;
        return htmlspecialchars($string, ENT_QUOTES, $config['charset']);
    }

}

?>