<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra_m extends CI_Model{
    public function get($id = null)
    {
        $this->db->from('mitra');
        if($id != null)
        {
            $this->db->where('mitra_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['name_mitra'] = $post['name_mitra'];
        $params['username_mitra'] = $post['username_mitra'];
        $params['password_mitra'] = sha1($post['password_mitra']);
        $params['email_mitra'] = $post['email_mitra'];
        $params['level_mitra'] = $post['level_mitra'];
        $this->db->insert('mitra', $params);

    }
    public function edit($post)
    {
        $params['name'] = $post['name'];
        $params['username_mitra'] = $post['username_mitra'];
        if(!empty($post['password'])){
        $params['password'] = sha1($post['password']);
        }
        $params['email'] = $post['email'];
        $params['level'] = $post['level'];
        $this->db->where('mitra_id', $post['mitra_id']);
        $this->db->update('mitra', $params);

    }

    public function cek_login_mitra(){
        $username_mitra = set_value('username_mitra');
        $password_mitra = set_value('password_mitra');

        $result = $this->db
                        ->where('username_mitra', $username_mitra)
                        ->where('password_mitra', sha1($password_mitra))
                        ->limit(1)
                        ->get('mitra');

        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false; 
        }
}
}