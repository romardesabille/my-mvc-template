<?php

class About extends View {

    public function __construct()
    {
        $this->require_files([
            'styles.css' => 'views/templates',
            'test.js' => 'views/templates'
        ]);
    }

    public function index(){
        $data['message'] = 'This is a simple mvc created by Romar lololol';

        $this->render_view('templates/header');
        $this->render_view('about', $data);
        $this->render_view('templates/footer');
    }
}
?>