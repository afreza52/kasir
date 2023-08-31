<?php
class Stock extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
    }
    function stock_in_data()
    {
        $query['stock_in'] = $this->m_stock->get_stock_in();
        $this->template->load('template', 'transaction/stock_in/stock_in_data', $query);
    }
    function stock_in_add()
    {
        $data['item'] = $this->m_item->get()->result();
        $data['supplier'] = $this->m_supplier->get()->result();
        $this->template->load('template', 'transaction/stock_in/stock_in_from', $data);
    }
    function process_in()
    {
        if (isset($_POST['in_add'])) {
            $post = $this->input->post(null, true);
            $this->m_stock->add_stock_in($post);
            $this->m_item->update_stock_in($post);

            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Stock-In berhasil disimpan');
            }
            redirect('stock/in');
        }
    }
    function del_stock_in()
    {
        $stock_id = $this->uri->segment(4);
        $item_id = $this->uri->segment(5);
        $qty = $this->m_stock->get($stock_id)->row()->qty;
        $data = ['qty' => $qty, 'item_id' => $item_id];
        $this->m_item->update_stock_out($data);
        $this->m_stock->del($stock_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Stock-In berhasil dihapus');
        }
        redirect('stock/in');
    }
    //////////////////
    //////////////////
    //////////////////
    //////////////////
    //////////////////
    function stock_out_data()
    {
        $query['stock_out'] = $this->m_stock->get_stock_out();
        $this->template->load('template', 'transaction/stock_out/stock_out_data', $query);
    }
    function stock_out_add()
    {
        $data['item'] = $this->m_item->get()->result();
        $data['supplier'] = $this->m_supplier->get()->result();
        $this->template->load('template', 'transaction/stock_out/stock_out_from', $data);
    }
    function process_out()
    {
        if (isset($_POST['out_add'])) {
            $post = $this->input->post(null, true);
            $stock = $this->input->post('stock');
            $qty = $this->input->post('qty');
            if ($qty <= $stock) {
                $this->m_stock->add_stock_out($post);
                $this->m_item->update_stock_out($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Stock-out berhasil disimpan');
                } else {
                    $this->session->set_flashdata('error', 'Data Stock-out gagal disimpan');
                }
            } else {
                $this->session->set_flashdata('error', 'Qty melebihi stock barang');

            }
            redirect('stock/out');
        }
    }
    function del_stock_out()
    {
        $stock_id = $this->uri->segment(4);
        $item_id = $this->uri->segment(5);
        $qty = $this->m_stock->get($stock_id)->row()->qty;
        $data = ['qty' => $qty, 'item_id' => $item_id];
        $this->m_item->update_stock_in($data);
        $this->m_stock->del($stock_id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data Stock-out berhasil dihapus');
        }
        redirect('stock/out');
    }
}