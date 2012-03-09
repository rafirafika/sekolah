<?php
class Cpageadmin extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="Panel Admin";
        $this->load->view('backend/element/vheader',$data);
        $this->load->view('backend/element/vcontent');
        $this->load->view('backend/element/vfooter');
    }
}
?>