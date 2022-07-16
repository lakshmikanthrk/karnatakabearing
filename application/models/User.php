<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
    function __construct(){
        
        parent::__construct();
        $this->load->database();

    }

    public function insert($p_details){
    $query=$this->db->insert('user',$p_details);
    }

    public function userfetch($email,$password){

    $query=$this->db->select('*')
                    ->where('email', $email)
                    ->where('password', $password)
              		->get('user');	
        
        if($query->num_rows() == 1){
            
            $userArr = array();
            foreach($query->result() as $row){
                $userArr[0] = $row->u_id;
                $userArr[1] = $row->name;
                $userArr[2] = $row->email;                
            }
            
            $userData = array(
                'u_id' => $userArr[0],
                'name' => $userArr[1],
                'email' => $userArr[2],
                'logged_in'=> TRUE
            );
            $this->session->set_userdata($userData);
            return $query->result();
        }
        else{
            return false;
        }
  }
   
}