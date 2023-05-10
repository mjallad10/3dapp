<?php
include "./debug/chromephp.php";
//ChromePhp::log('controller.php: Hello World');
//ChromePhp::log($_SERVER);

//create Controller class
class Controller {

    // Declare public vars
    public $load;
    public $model;

    // Create functions
    function __construct($PageURI = NULL){
        $this->load = new Load();
        $this->model = new Model();

        $this->$PageURI();
    }

    function home(){
        $data = $this->model->dbGetData();
        ChromePhp::warn($data);
        $this->load->view('app',$data);
    }

    function apiCreateTables(){
        $data = $this->model->dbCreateTables();
        $this->load->view('viewMessage',$data);
    }

    function apiInsertData(){
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage',$data);
    }
}