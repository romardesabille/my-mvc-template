<?php

class Home extends View {

    public function __construct()
    {
        $this->require_files([
            'styles.css' => 'views/templates',
            'test.js' => 'views/templates'
        ]);
    }

    public function index(){

        $data['message'] = 'Welcome this is home index';

        $this->render_view('templates/header');
        $this->render_view('home', $data);
        $this->render_view('templates/footer');
    }
}
?>