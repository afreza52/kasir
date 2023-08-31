<?php
class Unit extends CI_Controller
{
    function index()
    {
        check_not_login();
        check_admin();
        $data['row'] = $this->m_unit->get();
        $this->template->load('template', 'product/unit/unit_data', $data);
    }
    function add()
    {
        $unit = new stdClass();
        $unit->unit_id = null;
        $unit->name = null;
        $data = [
            'page' => 'add',
            'row' => $unit
        ];
        $this->template->load('template', 'product/unit/unit_form', $data);

    }
    function edit($id)
    {
        $query = $this->m_unit->get($id);
        if ($query->num_rows() > 0) {
            $unit = $query->row();
            $data = [
                'page' => 'edit',
                'row' => $unit
            ];
            $this->template->load('template', 'product/unit/unit_form', $data);
        } else {
            redirect('unit');
        }
    }
    function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['add'])) {
            $this->m_unit->add($post);
        } elseif (isset($post['edit'])) {
            $this->m_unit->edit($post);
        }

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil di simpan</div>');
        }
        redirect('unit');
    }
    function del($id)
    {
        $this->m_unit->del($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');

        }
        redirect('unit');
    }
}