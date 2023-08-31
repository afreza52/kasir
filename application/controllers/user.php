<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        check_not_login();
        check_admin();
        $data['user'] = $this->m_user->get()->result_array();
        $this->template->load('template', 'user/user_data', $data);
    }
    function add()
    {
        $this->form_validation->set_rules('fullname', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        $this->form_validation->set_rules(
            'passconf',
            'Konfirmasi Password',
            'required|matches[password]',
            [
                'matches' => '%s Tidak sesuai dengan password'
            ]
        );
        $this->form_validation->set_rules('level1', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong,silahkan isi');
        $this->form_validation->set_message('min_length', '%s minimal 4 karakter');
        $this->form_validation->set_message('is_unique', '%s username sudah ada silahkan ganti');

        if ($this->form_validation->run() == false) {
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, true);
            $this->m_user->add($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>
                        alert('Data Berhasil disimpan');
                     </script>";
            }
            echo "<script>window.location='" . base_url('user') . "';</script>";
        }
    }
    function edit($id)
    {

        $this->form_validation->set_rules('fullname', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[4]');
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules(
                'passconf',
                'Konfirmasi Password',
                'matches[password]',
                [
                    'matches' => '%s Tidak sesuai dengan password'
                ]
            );
        }
        $this->form_validation->set_rules('level1', 'Level', 'required');
        $this->form_validation->set_message('required', '%s masih kosong,silahkan isi');
        $this->form_validation->set_message('min_length', '%s minimal 4 karakter');
        $this->form_validation->set_message('is_unique', '%s username sudah ada silahkan ganti');


        if ($this->form_validation->run() == false) {
            $where = ['user_id' => $id];
            $data['u'] = $this->m_user->edit_data($where)->row_array();
            if ($this->m_user->edit_data($where)->num_rows() > 0) {

                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "<script>alert('Data Tidal Ditemukan');window.location='" . base_url('user') . "';</script>";
            }
        } else {
            $post = $this->input->post(null, true);
            $this->m_user->update($post);
            if ($this->db->affected_rows() > 0) {
                echo "<script>
                alert('Data Berhasil disimpan');
                </script>";
            }
            echo "<script>window.location='" . base_url('user') . "';</script>";
        }
    }
    function username_check()
    {
        $post = $this->input->post(null, true);
        $query = $this->db->query("SELECT * FROM user WHERE username= '$post[username]' AND user_id != '$post[user_id]'");
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '%s ini sudah dipakai');
            return false;
        } else {
            return true;
        }
    }
    function hapus($id)
    {
        $where = ['user_id' => $id];
        $this->m_user->del($where);
        if ($this->db->affected_rows() > 0) {
            echo "<script>
                    alert('Data Berhasil dihapus');
                 </script>";
        }
        echo "<script>window.location='" . base_url('user') . "';</script>";
    }
}