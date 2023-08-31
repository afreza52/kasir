<?php
class Supplier extends CI_Controller
{
    function index()
    {
        check_not_login();
        check_admin();
        $data['row'] = $this->m_supplier->get();
        $this->template->load('template', 'supplier/supplier_data', $data);
    }
    function add()
    {
        $supplier = new stdClass();
        $supplier->supplier_id = null;
        $supplier->name = null;
        $supplier->phone = null;
        $supplier->address = null;
        $supplier->description = null;
        $data = [
            'page' => 'add',
            'row' => $supplier
        ];
        $this->template->load('template', 'supplier/supplier_form', $data);

    }
    function edit($id)
    {
        $query = $this->m_supplier->get($id);
        if ($query->num_rows() > 0) {
            $supplier = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $supplier
            ];
            $this->template->load('template', 'supplier/supplier_form', $data);
        } else {
            echo "<script>alert('Data Tidal Ditemukan');window.location='" . base_url('supplier') . "';</script>";
        }
    }
    function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->m_supplier->add($post);
        } elseif (isset($post['edit'])) {
            $this->m_supplier->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            echo "<script>
                    alert('Data Berhasil disimpan');
                 </script>";
        }
        echo "<script>window.location='" . base_url('supplier') . "';</script>";
    }
    function del($id)
    {
        $this->m_supplier->del($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            echo "<script>
                    alert('Data tidak dapat dihapus (sudah berelasi)');
                 </script>";

        } else {
            echo "<script>
                    alert('Data Berhasil dihapus');
                 </script>";
        }
        echo "<script>window.location='" . base_url('supplier') . "';</script>";
    }
}