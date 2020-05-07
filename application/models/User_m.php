<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model{
    public function login($post){
    //    $arr = array(
    //        'username' => $post['username'],
    //        'password' => sha1($post['username'])
    //    );

    //    $this->db->where($arr);
    //    $query = $this->db->get('user');
    //    $resultArray = $query->row_array();
    //         $this->db->where('user_id', $resultArray['user_id']);
    //         $this->db->update('user', array('last_login' => time()));
    //    return $resultArray;

       
       
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        //$array = array('last_login' => time());
        //$this->db->update('user',$array);
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
    
    public function edit($post)
    {
        $params['name'] = $post['name'];
        $params['username'] = $post['username'];
        if(!empty($post['password'])){
        $params['password'] = sha1($post['password']);
        }
        $params['email'] = $post['email'];
        $params['address'] = $post['address'];
        $params['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);

    }
    
}