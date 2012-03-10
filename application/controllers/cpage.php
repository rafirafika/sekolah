<?php
class Cpage extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/element/vcontent');
        $this->load->view('frontend/element/vfooter');
    }
}
?>