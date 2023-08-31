<?php
class Item extends CI_Controller
{
    function index()
    {
        check_not_login();
        check_admin();
        $query['row'] = $this->m_item->get();


        $this->template->load('template', 'product/item/item_data', $query);
    }
    function add()
    {
        $item = new stdClass();
        $item->item_id = null;
        $item->barcode = null;
        $item->name = null;
        $item->price = null;
        $item->category_id = null;

        $category = $this->m_category->get();
        $query_unit = $this->m_unit->get();
        $unit['null'] = '- pilih -';
        foreach ($query_unit->result() as $unt) {
            $unit[$unt->unit_id] = $unt->name;
        }

        $data = [
            'page' => 'add',
            'row' => $item,
            'category' => $category,
            'unit' => $unit,
            'selectedunit' => null,

        ];
        $this->template->load('template', 'product/item/item_form', $data);

    }
    function edit($id)
    {
        $query = $this->m_item->get($id);
        if ($query->num_rows() > 0) {
            $item = $query->row();
            $category = $this->m_category->get();
            $query_unit = $this->m_unit->get();
            $unit['null'] = '- pilih -';
            foreach ($query_unit->result() as $unt) {
                $unit[$unt->unit_id] = $unt->name;
            }

            $data = [
                'page' => 'edit',
                'row' => $item,
                'category' => $category,
                'unit' => $unit,
                'selectedunit' => $item->unit_id,

            ];
            $this->template->load('template', 'product/item/item_form', $data);

        } else {
            redirect('item');
        }
    }
    function process()
    {
        $config['upload_path'] = './uploads/product/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 3072;
        $config['file_name'] = 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
        $this->load->library('upload', $config);
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            if ($this->m_item->check_barcode($post['barcode'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "Barcode $post[barcode] sudah dipakai barang lain");
                redirect('item/add');
            } else {

                if (@$_FILES['image']['name'] != null) {
                    if ($this->upload->do_upload('image')) {
                        $post['image'] = $this->upload->data('file_name');
                        $this->m_item->add($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('success', "Data Berhasil di simpan");
                        }
                        redirect('item');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image'] = null;
                    $this->m_item->add($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', "Data Berhasil di simpan");
                    }
                    redirect('item');
                }
            }
        } elseif (isset($post['edit'])) {
            if ($this->m_item->check_barcode($post['barcode'], $post['id'])->num_rows() > 0) {
                $this->session->set_flashdata('error', "Barcode $post[barcode] sudah dipakai barang lain");
                redirect('item/edit/' . $post['id']);
            } else {
                if (@$_FILES['image']['name'] != null) {
                    if ($this->upload->do_upload('image')) {

                        $item = $this->m_item->get($post['id'])->row();
                        if ($item->image != null) {
                            $target_file = './uploads/product/' . $item->image;
                            unlink($target_file);
                        }

                        $post['image'] = $this->upload->data('file_name');
                        $this->m_item->edit($post);
                        if ($this->db->affected_rows() > 0) {
                            $this->session->set_flashdata('success', "Data Berhasil di simpan");
                        }
                        redirect('item');
                    } else {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('item/add');
                    }
                } else {
                    $post['image'] = null;
                    $this->m_item->edit($post);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', "Data Berhasil di simpan");
                    }
                    redirect('item');
                }
            }
        }


    }
    function del($id)
    {
        $item = $this->m_item->get($id)->row();
        if ($item->image != null) {
            $target_file = './uploads/product/' . $item->image;
            unlink($target_file);
        }
        $this->m_item->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', "Data Berhasil di hapus");

        }
        redirect('item');
    }
}