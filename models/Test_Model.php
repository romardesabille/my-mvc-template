<?php
class Test_Model extends Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function basic_data(){
        $firstname = $this->security->xss_clean($_POST['firstname']);
        $lastname = $this->security->xss_clean($_POST['lastname']);
        $token = $_POST['token'];

        $data = array('firstname' => $firstname, 'lastname' => $lastname, 'token' => $token);
        echo json_encode($data);
    }



}

?>