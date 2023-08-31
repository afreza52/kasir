<?php
class Category extends CI_Controller
{
    function index()
    {
        check_not_login();
        check_admin();
        $data['row'] = $this->m_category->get();
        $this->template->load('template', 'product/category/category_data', $data);
    }
    function add()
    {
        $category = new stdClass();
        $category->category_id = null;
        $category->name = null;
        $data = [
            'page' => 'add',
            'row' => $category
        ];
        $this->template->load('template', 'product/category/category_form', $data);

    }
    function edit($id)
    {
        $query = $this->m_category->get($id);
        if ($query->num_rows() > 0) {
            $category = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $category
            ];
            $this->template->load('template', 'product/category/category_form', $data);
        } else {
            redirect('category');
        }
    }
    function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->m_category->add($post);
        } elseif (isset($post['edit'])) {
            $this->m_category->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil di simpan</div>');
        }
        redirect('category');
    }
    function del($id)
    {
        $this->m_category->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');

        }
        redirect('category');
    }
}