<?php
class View {

    private $files = array();
    private $data = array();

    public function __construct()
    {
    }

    /*
     * Require files css and js
     */
    protected function require_files($file = array()){
        $this->files = $file;
    }

    public function get_required_files(){
        if(!empty($this->files)){
            foreach ($this->files as $item => $path){
                $item_piece = explode('.', $item);
                //get last extention of file type
                $file_type = $item_piece[count($item_piece)-1];

                if($file_type == 'js'){
                    echo '<script type="text/javascript" src="'.base_url().$path.'/'.$item.'" defer></script>';
                }elseif($file_type == 'css'){
                    echo '<link rel="stylesheet" type="text/css" href="'.base_url().$path.'/'.$item.'">';
                }else{
                    die('File Type Not Supported.');
                }
            }
        }
    }

    public function json_encode_error_reponse($redirect = false){
        if($redirect != false){
            $data['redirect'] = base_url() . $redirect;
        }
        $data['response'] = 'error';
        echo json_encode($data);
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    protected function render_view($page_name, $data = null){
        if(!empty($data)){
            $this->data = $data;
            extract($this->data);
        }
        require_once VIEW_DIR. "{$page_name}.php";
    }

}

?>