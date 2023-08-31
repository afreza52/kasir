<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }
    function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function add($post)
    {
        $data = [
            'name' => $post['fullname'],
            'username' => $post['username'],
            'password' => sha1($post['password']),
            'address' => $post['address'] != "" ? $post['address'] : null,
            'level' => $post['level1']
        ];
        $this->db->insert('user', $data);

    }
    function edit_data($where)
    {
        return $this->db->get_where('user', $where);

    }
    function update($post)
    {
        $data = [
            'user_id' => $post['user_id'],
            'name' => $post['fullname'],
            'username' => $post['username'],
            'address' => $post['address'] != "" ? $post['address'] : null,
            'level' => $post['level1']
        ];
        if (!empty($post['password'])) {
            $data['password'] = sha1($post['password']);
        }
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $data);

    }
    function del($where)
    {
        $this->db->where($where);
        $this->db->delete('user');
    }
}