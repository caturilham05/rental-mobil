<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model{
    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null)
        {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function get_user($id = null)
    {
        $user = $this->session->userdata('user_id');
        $this->db->from('user');
        if($id != null)
        {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
   
    // public function get_id($id = null)
    // {
    //     $this->db->from('user');
    //     if($id != null)
    //     {
    //         $this->db->where('user_id', $id);
    //     }
    //     $this->db->limit(1);
    //     $query = $this->db->get();
    //     return $query;
    // }
    
    public function add($post)
    {
        $params['name'] = $post['name'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['email'] = $post['email'];
        $params['gender'] = $post['gender'];
        $params['telepon'] = $post['telepon'];
        $params['address'] = $post['address'];
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);

    }
    public function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

        // $params['name'] = $post['name'];
        // $params['username'] = $post['username'];
        // if(!empty($post['password'])){
        // $params['password'] = sha1($post['password']);
        // }
        // $params['email'] = $post['email'];
        // $params['address'] = $post['address'];
        // $params['level'] = $post['level'];
        // $this->db->where('user_id', $post['user_id']);
        // $this->db->update('user', $params);
    }

    public function cek_login(){
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
                        ->where('username', $username)
                        ->where('password', sha1($password))
                        ->limit(1)
                        ->get('user');

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false; 
        }

    }
    
}