<?php

class Error404 extends View {

    public function index(){
        $this->require_files([
            'styles.css' => 'views/templates',
            'test.js' => 'views/templates'
        ]);
        $this->render_view('templates/header');
        $this->render_view('error/index');
        $this->render_view('templates/footer');
    }

}
?>