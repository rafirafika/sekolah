<?php
class Calumni extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']="Alumni SMA N 1 LAMPUNG";
        $this->load->view('frontend/element/vheader',$data);
        $this->load->view('frontend/element/vcontent');
        $this->load->view('frontend/element/vfooter');
    }
}
?>