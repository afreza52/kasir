<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_item extends CI_Model
{
    function get($id = null)
    {
        $this->db->select('p_item.*, p_category.name as category_name, p_unit.name as unit_name');
        $this->db->from('p_item');
        $this->db->join('p_category', 'p_category.category_id = p_item.category_id');
        $this->db->join('p_unit', 'p_unit.unit_id = p_item.unit_id');
        if ($id != null) {
            $this->db->where('item_id', $id);
        }
        $this->db->order_by('barcode', 'asc');
        $query = $this->db->get();
        return $query;
    }
    function add($post)
    {
        $data = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'image' => $post['image']

        ];

        $this->db->insert('p_item', $data);
    }
    function edit($post)
    {
        $data = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
            'updated' => date('Y-m-d H:i:s')
        ];
        if ($post['image'] != null) {
            $data['image'] = $post['image'];
        }
        $this->db->where('item_id', $post['id']);
        $this->db->update('p_item', $data);

    }
    function check_barcode($code, $id = null)
    {
        $this->db->from('p_item');
        $this->db->where('barcode', $code);
        if ($id != null) {
            $this->db->where('item_id !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    function del($id)
    {
        $this->db->where('item_id', $id);
        $this->db->delete('p_item');
    }
    function update_stock_in($data)
    {
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE p_item SET stock = stock + '$qty'WHERE item_id ='$id'";
        $this->db->query($sql);
    }
    function update_stock_out($data)
    {
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE p_item SET stock = stock - '$qty'WHERE item_id ='$id'";
        $this->db->query($sql);
    }
    public function reduceStock($barcode, $qty)
    {
        $this->db->where('barcode', $barcode);
        $this->db->set('stock', 'stock - ' . $qty, false);
        $this->db->update('p_item');
    }
}