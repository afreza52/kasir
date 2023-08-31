<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_supplier extends CI_Model
{
    function get($id = null)
    {
        $this->db->from('supplier');
        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function add($post)
    {
        $data = [
            'name' => $post['supplier_name'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => empty($post['desc']) ? null : $post['desc']
        ];

        $this->db->insert('supplier', $data);
    }
    function edit($post)
    {
        $data = [
            'name' => $post['supplier_name'],
            'phone' => $post['phone'],
            'address' => $post['address'],
            'description' => empty($post['desc']) ? null : $post['desc'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('supplier_id', $post['id']);
        $this->db->update('supplier', $data);

    }
    function del($id)
    {
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
    }
}