<?php
class auth_model extends CI_Model
{
    public function register()
    {
        $data = [
            "profile_name" => $this->input->post('nama', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "role" => '1'
        ];
        $this->db->insert('user', $data);
    }

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }
}