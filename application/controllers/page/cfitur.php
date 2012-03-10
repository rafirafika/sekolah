<?php
class Cfitur extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="fitur SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/element/vcontent');
        $this->load->view('frontend/element/vfooter');
    }
}
?>