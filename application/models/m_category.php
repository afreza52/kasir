<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_category extends CI_Model
{
    function get($id = null)
    {
        $this->db->from('p_category');
        if ($id != null) {
            $this->db->where('category_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function add($post)
    {
        $data = [
            'name' => $post['category_name']

        ];

        $this->db->insert('p_category', $data);
    }
    function edit($post)
    {
        $data = [
            'name' => $post['category_name'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('category_id', $post['id']);
        $this->db->update('p_category', $data);

    }
    function del($id)
    {
        $this->db->where('category_id', $id);
        $this->db->delete('p_category');
    }
}