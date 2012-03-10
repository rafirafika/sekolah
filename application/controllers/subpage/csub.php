<?php
class Csub extends CI_Controller{
    var $menu;
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['title']= "Selamat Datang Di SMA NEGERI ABUNG TINGGI";
        $this->load->view('frontend/element/vheader',$data);

        $menu = $_GET['menu'];
        if(empty($menu))
        {

        }
        else if($menu=="mot"){
            $this->load->view('frontend/subpage/sub1/vmotto');
        }
        else if($menu=="sej"){
            $this->load->view('frontend/subpage/sub1/vsejarah');
        }
        else if($menu=="kep"){
            $this->load->view('frontend/subpage/sub1/vkepsek');
        }
        else if($menu=="sar"){
            $this->load->view('frontend/subpage/sub1/vsarana');
        }
        else if($menu=="pres"){
            $this->load->view('frontend/subpage/sub1/vprestasi');
        }

        else if($menu=="dirG"){
            $this->load->view('frontend/subpage/sub2/vdirguru');
        }
        else if($menu=="aja"){
            $this->load->view('frontend/subpage/sub2/vajar');
        }
        else if($menu=="kal"){
            $this->load->view('frontend/subpage/sub2/vkalender');
        }
        else if($menu=="sil"){
            $this->load->view('frontend/subpage/sub2/vsilabus');
        }

        else if($menu=="dirS"){
            $this->load->view('frontend/subpage/sub3/vdirsiswa');
        }
        else if($menu=="eks"){
            $this->load->view('frontend/subpage/sub3/veks');
        }
        else if($menu=="prest"){
            $this->load->view('frontend/subpage/sub3/vprestasi');
        }

        else if($menu=="dirA"){
            $this->load->view('frontend/subpage/sub4/vdiralumni');
        }
        else if($menu=="inf"){
            $this->load->view('frontend/subpage/sub4/vinfo');
        }

        else if($menu=="age"){
            $this->load->view('frontend/subpage/sub5/vagenda');
        }
        else if($menu=="art"){
            $this->load->view('frontend/subpage/sub5/vartikel');
        }
        else if($menu=="ber"){
            $this->load->view('frontend/subpage/sub5/vberita');
        }
        else if($menu=="opi"){
            $this->load->view('frontend/subpage/sub5/vopini');
        }
        else if($menu=="tam"){
            $this->load->view('frontend/subpage/sub5/vtamu');
        }

        $this->load->view('frontend/element/vfooter');

    }
}
?>