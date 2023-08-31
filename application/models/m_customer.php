<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_customer extends CI_Model
{
    function get($id = null)
    {
        $this->db->from('customer');
        if ($id != null) {
            $this->db->where('customer_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function add($post)
    {
        $data = [
            'name' => $post['customer_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address']

        ];

        $this->db->insert('customer', $data);
    }
    function edit($post)
    {
        $data = [
            'name' => $post['customer_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['address'],

            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('customer_id', $post['id']);
        $this->db->update('customer', $data);

    }
    function del($id)
    {
        $this->db->where('customer_id', $id);
        $this->db->delete('customer');
    }
}