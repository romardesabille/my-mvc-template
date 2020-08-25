<?php
class Model extends DB {

    protected $security;

    public function __construct()
    {
        $this->security = new Security();
    }
}
?>