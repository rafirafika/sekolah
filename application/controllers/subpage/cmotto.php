<?php
class Cmotto extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view('frontend/subpage/sub1/vmotto');
    }
}
?>