<?php
class Sale extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();

    }
    function index()
    {
        $customer = $this->m_customer->get()->result();
        $item = $this->m_item->get()->result();
        $data = [
            'customer' => $customer,
            'invoice' => $this->m_sale->invoice_no(),
            'item' => $item
        ];
        $this->template->load('template', 'transaction/sale/sale_form', $data);
    }
    public function process_payment()
    {
        // Ambil data dari permintaan POST
        $invoice = $this->m_sale->invoice_no();
        $customer = $this->input->post('customer');
        $priceTotal = $this->input->post('priceTotal');
        $grandTotal = $this->input->post('grandTotal');
        $cash = $this->input->post('cash');
        $totalDiscount = $this->input->post('totalDiscount');
        $note = $this->input->post('note'); // Ambil data note dari permintaan POST
        $remaining = $this->input->post('change'); // Ambil data remaining dari permintaan POST
        $saleItems = $this->input->post('saleItems'); // Data array dari client

        $barangkosong = array();
        $itemsToUpdate = array(); // Array untuk mengumpulkan data barang yang akan di-update

        // Validasi apakah stok cukup dan kumpulkan data untuk update
        foreach ($saleItems as $item) {
            $barcode = $item['barcode'];
            $qty = $item['qty'];
            $itemData = $this->db->get_where('p_item', ['barcode' => $barcode])->row_array();
            if ($itemData) {
                if ($itemData['stock'] < $qty) {
                    $barangkosong[] = $itemData['name'];
                } else {
                    $itemsToUpdate[] = array(
                        'barcode' => $barcode,
                        'qty' => $qty
                    );
                }
            }
        }

        if (!empty($barangkosong)) {
            $response = array('success' => false, 'message' => 'Stok barang Kosong: ' . implode(', ', $barangkosong));
        } else {
            // Stok cukup, simpan data ke database menggunakan model
            $saleId = $this->m_sale->saveSale($invoice, $priceTotal, $customer, $grandTotal, $totalDiscount, $cash, $note, $remaining, $saleItems);

            // Update stok barang secara masal
            foreach ($itemsToUpdate as $itemToUpdate) {
                $this->m_item->reduceStock($itemToUpdate['barcode'], $itemToUpdate['qty']);
            }

            if ($saleId) {
                $response = array('success' => true);
            } else {
                $response = array('success' => false);
            }
        }

        // Mengirim respons sebagai JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    function receipt($saleId)
    {
        // Di sini, Anda perlu memuat data berdasarkan nomor invoice, misalnya dari database

        $sale_data = $this->m_sale->getSaleDataByInvoice($saleId);
        $sale_items = $this->m_sale->getSaleItemsByInvoice($saleId);
        $customer = $this->m_sale->getCustomerBycustomer($saleId);

        if ($sale_data !== false) {
            // Memuat tampilan struk dan mengirimkan data ke tampilan
            $data = array(
                'sale_data' => $sale_data,
                'sale_items' => $sale_items,
                'customer' => $customer
            );

            $this->load->view('transaction/sale/struk', $data);
        } else {
            // Menangani kasus ketika data penjualan tidak ditemukan
            echo "Data penjualan tidak ditemukan.";
        } // Setelah Anda memiliki data, Anda dapat memuat view struk dengan data tersebut
    }



}