<?php 

class Upload_Controller extends AppController{

    public function beforeFilter(){
        $this->load->library('upload');
    }

    public function index(){
        $this->view->display('/upload/index');
    }

}



?>