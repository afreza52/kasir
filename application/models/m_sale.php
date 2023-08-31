<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_sale extends CI_Model
{
    function invoice_no()
    {
        $sql = "SELECT MAX(MID(invoice,9,4)) AS invoice_no FROM t_sale 
        WHERE MID(invoice,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int) $row->invoice_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "001";

        }
        $invoice = "MP" . date('ymd') . $no;
        return $invoice;

    }
    public function saveSale($invoice, $priceTotal, $customer, $grandTotal, $totalDiscount, $cash, $note, $remaining, $saleItems)
    {
        // Simpan data ke tabel t_sale
        $saleData = array(
            'invoice' => $invoice,
            'customer_id' => $customer,
            'total_price' => $priceTotal,
            'final_price' => $grandTotal,
            'discount' => $totalDiscount,
            'cash' => $cash,
            'note' => $note,
            'remaining' => $remaining,
            'date' => date('Y-m-d'),
            'user_id' => $this->fungsi->user_login()->user_id,
            'created' => date('Y-m-d H:i:s')
        );
        $this->db->insert('t_sale', $saleData);
        $saleId = $this->db->insert_id();

        if ($saleId) {
            // Loop untuk menyimpan data item ke tabel t_sale_item
            foreach ($saleItems as $itemData) {
                $saleItemData = array(
                    'sale_id' => $saleId,
                    'barcode' => $itemData['barcode'],
                    'item' => $itemData['item'],
                    'price' => $itemData['price'],
                    'qty' => $itemData['qty'],
                    'discount' => $itemData['discount'],
                    'total' => $itemData['total']
                );
                // Simpan setiap item keranjang sebagai baris terpisah dalam tabel t_sale_item
                $this->db->insert('t_sale_item', $saleItemData);
            }
            return $saleId;
        } else {
            return false;
        }
    }
    public function getSaleDataByInvoice($saleId)
    {

        // Query untuk mengambil data penjualan berdasarkan nomor invoice
        $query = $this->db->get_where('t_sale', array('sale_id' => $saleId));

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            throw new Exception('Data penjualan tidak ditemukan.');
        }

    }

    public function getSaleItemsByInvoice($saleId)
    {

        // Query untuk mengambil data item penjualan berdasarkan nomor invoice
        $query = $this->db->get_where('t_sale_item', array('sale_id' => $saleId));
        if ($query !== false && $query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array(); // Data tidak ditemukan
        }
    }
    function getCustomerBycustomer()
    {
        $query = $this->db->get('customer');
        return $query->row_array();
    }
    function update_stock_out($saleId)
    {
        $data = $this->db->where('sale_id', $saleId)->get('t_sale_item')->result_array();

        // Mempersiapkan array untuk menyimpan nilai barcode
        $barcodes = [];
        $qtyUpdates = [];

        foreach ($data as $row) {
            $qty = $row['qty'];
            $barcode = $row['barcode'];

            // Menyimpan nilai barcode dan update qty dalam array
            $barcodes[] = $this->db->escape_str($barcode);
            $qtyUpdates[] = "WHEN " . $this->db->escape_str($barcode) . " THEN stock - '$qty'";
        }

        // Menggabungkan array barcode menjadi satu string
        $barcodeList = implode(",", $barcodes);

        // Menggabungkan array update qty menjadi satu string
        $qtyUpdateList = implode(" ", $qtyUpdates);

        // Memasukkan data ke dalam pernyataan SQL UPDATE
        $sql = "UPDATE p_item SET stock = CASE barcode $qtyUpdateList END WHERE barcode IN ($barcodeList)";
        $this->db->query($sql);

    }
}