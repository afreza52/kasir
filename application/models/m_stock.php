<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_stock extends CI_Model
{
    function get($id = null)
    {
        $this->db->from('t_stock');
        if ($id != null) {
            $this->db->where('stock_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function get_stock_in()
    {
        $this->db->select('t_stock.*, p_item.name as item_name, p_item.barcode as brcode, supplier.name as supplier_name');
        $this->db->from('t_stock');
        $this->db->join('p_item', 'p_item.item_id = t_stock.item_id');
        $this->db->join('supplier', 'supplier.supplier_id = t_stock.supplier_id');
        $this->db->where('type', 'in');
        $this->db->order_by('stock_id', 'desc');
        $query = $this->db->get();
        return $query;
    }
    function add_stock_in($post)
    {
        $data = [
            'item_id' => $post['item_id'],
            'type' => 'in',
            'detail' => $post['detail'],
            'supplier_id' => $post['supplier'] == '' ? null : $post['supplier'],
            'qty' => $post['qty'],
            'date' => $post['date'],
            'user_id' => $this->session->userdata('userid')

        ];

        $this->db->insert('t_stock', $data);
    }
    function get_stock_out()
    {
        $this->db->select('t_stock.*, p_item.name as item_name, p_item.barcode as brcode');
        $this->db->from('t_stock');
        $this->db->join('p_item', 'p_item.item_id = t_stock.item_id');
        $this->db->where('type', 'out');
        $this->db->order_by('stock_id', 'desc');
        $query = $this->db->get();
        return $query;
    }
    function add_stock_out($post)
    {
        $data = [
            'item_id' => $post['item_id'],
            'type' => 'out',
            'detail' => $post['info'],
            'qty' => $post['qty'],
            'date' => $post['date'],
            'user_id' => $this->session->userdata('userid')

        ];

        $this->db->insert('t_stock', $data);
    }
    function del($id)
    {
        $this->db->where('stock_id', $id);
        $this->db->delete('t_stock');
    }
}