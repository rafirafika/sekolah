<?php
class Csub extends CI_Controller{
    var $menu;

    function __construct(){
        parent::__construct();
    }
    function index(){
        $menu = $_GET['menu'];
        if($menu=="mot")
        {
            $data['title']= "Motto SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="sej")
        {
            $data['title']= "Sejarah SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="kep")
        {
            $data['title']= "KepSek SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="sar")
        {
            $data['title']= "Sarana SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="pres")
        {
            $data['title']= "Prestasi SMA NEGERI ABUNG TINGGI";
        }

        elseif($menu=="dirG")
        {
            $data['title']= "Guru SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="aja")
        {
            $data['title']= "Materi SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="kal")
        {
            $data['title']= "Kalender SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="sil")
        {
            $data['title']= "Silabus SMA NEGERI ABUNG TINGGI";
        }

        elseif($menu=="dirS")
        {
            $data['title']= "Siswa SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="eks")
        {
            $data['title']= "Ekstrakurikuler SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="prest")
        {
            $data['title']= "Prestasi SMA NEGERI ABUNG TINGGI";
        }

        elseif($menu=="dirA")
        {
            $data['title']= "Alumni SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="inf")
        {
            $data['title']= "Info SMA NEGERI ABUNG TINGGI";
        }

        elseif($menu=="age")
        {
            $data['title']= "Agenda SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="art")
        {
            $data['title']= "Artikel SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="ber")
        {
            $data['title']= "Berita SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="opi")
        {
            $data['title']= "Opini SMA NEGERI ABUNG TINGGI";
        }
        elseif($menu=="tam")
        {
            $data['title']= "Tamu SMA NEGERI ABUNG TINGGI";
        }

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