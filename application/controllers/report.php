<?php
class Report extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();

    }
    public function sale()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $selected_customer = $this->input->post('customer');
        $invoice_number = $this->input->post('invoice');

        // Membangun kondisi WHERE berdasarkan filter yang ada
        $where = '';
        if ($start_date && $end_date) {
            $where .= "t_sale.date BETWEEN '$start_date' AND '$end_date' AND ";
        }
        if ($selected_customer) {
            $where .= "customer.customer_id = '$selected_customer' AND ";
        }
        if ($invoice_number) {
            $where .= "t_sale.invoice LIKE '%$invoice_number%' AND ";
        }

        // Menghilangkan "AND" ekstra di akhir kondisi WHERE
        if (!empty($where)) {
            $where = rtrim($where, 'AND ');
        }

        // Membuat kueri dengan kondisi WHERE jika filter diterapkan
        $query = "SELECT t_sale.*, customer.name AS customer, user.name as kasir
              FROM t_sale
              JOIN customer ON t_sale.customer_id = customer.customer_id
              JOIN user ON t_sale.user_id = user.user_id";

        if (!empty($where)) {
            $query .= " WHERE $where";
        }

        // Menjalankan kueri
        $result = $this->db->query($query);

        if ($result === FALSE) {
            die($this->db->error());
        }

        $data = [
            'penjualan' => $result->result_array(),
            'customer' => $this->db->get('customer')->result_array(),
            'detail' => $this->db->get('t_sale_item'),
        ];

        // Load view dan kirim data penjualan ke view
        $this->template->load('template', 'report/sale/sale_data', $data);
    }
    public function get_sale_item_details()
    {
        $saleId = $this->input->post('saleId');
        $details = $this->db->where('sale_id', $saleId)->get('t_sale_item')->result_array();

        $output = '';
        foreach ($details as $item) {
            $output .= '<tr>';
            $output .= '<td>' . $item['item'] . '</td>';
            $output .= '<td>' . $item['price'] . '</td>';
            $output .= '<td>' . $item['qty'] . '</td>';
            $output .= '<td>' . $item['discount'] . '</td>';
            $output .= '<td>' . $item['total'] . '</td>';
            $output .= '</tr>';
        }

        echo $output;
    }

    function del()
    {
        $sale_id = $this->uri->segment(3);
        // $barcode = $this->uri->segment(4);
        $data = $this->db->where('sale_id', $sale_id)->get('t_sale_item')->result_array();
        foreach ($data as $row) {
            $qty = $row['qty'];
            $barcode = $row['barcode'];
            $sql = "UPDATE p_item SET stock = stock + '$qty'WHERE barcode ='$barcode'";
            $this->db->query($sql);
        }

        $this->db->where('sale_id', $sale_id);
        $this->db->delete('t_sale');
        // $this->db->where('sale_id', $sale_id);
        // $this->db->delete('t_sale_item');
        redirect('report/sale');
    }
    function stock()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');
        $type = $this->input->post('type');
        $barcode = $this->input->post('barcode');
        //Membangun kondisi WHERE berdasarkan filter yang ada
        $where = '';
        if ($start_date && $end_date) {
            $where .= "t_stock.date BETWEEN '$start_date' AND '$end_date' AND ";
        }
        if ($type) {
            $where .= "t_stock.type LIKE '%$type%' AND ";
        }
        if ($barcode) {
            $where .= "t_stock.barcode LIKE '%$barcode%' AND ";
        }

        // Menghilangkan "AND" ekstra di akhir kondisi WHERE
        if (!empty($where)) {
            $where = rtrim($where, 'AND ');
        }
        // Membuat kueri dengan kondisi WHERE jika filter diterapkan
        $query = "SELECT t_stock.*, p_item.name as item_name, p_item.barcode as brcode
                    FROM t_stock
                    JOIN p_item ON p_item.item_id = t_stock.item_id
                    ";
        if (!empty($where)) {
            $query .= " WHERE $where";
        }
        $data['stock'] = $this->db->query($query)->result_array();
        $this->template->load('template', 'report/stock_in_out/stock_in_out_data', $data);
    }
}