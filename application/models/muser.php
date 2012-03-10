<?php
class Muser extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function periksa_user($data_user){
        $password = substr(md5($data_user['password']),0,16);
        $this->db->where('username',$data_user['username']);
        $this->db->where('password',$password);
        $hasil_query = $this->db->get('admin');
        return $hasil_query;
    }
}
?>