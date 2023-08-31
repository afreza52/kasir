<?php
class customer extends CI_Controller
{
    function index()
    {
        check_not_login();
        check_admin();
        $data['row'] = $this->m_customer->get();
        $this->template->load('template', 'customer/customer_data', $data);
    }
    function add()
    {
        $customer = new stdClass();
        $customer->customer_id = null;
        $customer->gender = null;
        $customer->name = null;
        $customer->phone = null;
        $customer->address = null;
        $data = [
            'page' => 'add',
            'row' => $customer
        ];
        $this->template->load('template', 'customer/customer_form', $data);

    }
    function edit($id)
    {
        $query = $this->m_customer->get($id);
        if ($query->num_rows() > 0) {
            $customer = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $customer
            ];
            $this->template->load('template', 'customer/customer_form', $data);
        } else {
            echo "<script>alert('Data Tidal Ditemukan');window.location='" . base_url('customer') . "';</script>";
        }
    }
    function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->m_customer->add($post);
        } elseif (isset($post['edit'])) {
            $this->m_customer->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>
                    alert('Data Berhasil disimpan');
                 </script>";
        }
        echo "<script>window.location='" . base_url('customer') . "';</script>";
    }
    function del($id)
    {
        $this->m_customer->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>
                    alert('Data Berhasil dihapus');
                 </script>";
        }
        echo "<script>window.location='" . base_url('customer') . "';</script>";
    }
}