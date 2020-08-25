<?php
class Test extends View {

    public function __construct()
    {
        $this->test_model = new Test_Model();
        $this->require_files([
            'styles.css' => 'views/templates',
            'test.js' => 'views/templates',
            'jquery.js' => 'assets/js',
            'index.js' => 'views/test/js'
        ]);
    }

    public function index(){
        $this->render_view('templates/header');
        $this->render_view('test/index');
        $this->render_view('templates/footer');
    }

    public function create(){
        if(Token::check($_POST['token'], true)){
            $this->test_model->basic_data();
//            redirect('test', 'Token is correct');
        }else{
            $this->json_encode_error_reponse('test');
        }
    }
}
?>