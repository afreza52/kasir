<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_already_login();
        $this->load->view('login');
    }
    function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $query = $this->m_user->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $data = [
                    'userid' => $row->user_id,
                    'level' => $row->level
                ];
                $this->session->set_userdata($data);
                echo "<script>
                        alert('Selamat, login berhasil');
                        window.location='" . base_url('dashboard') . "';
                     </script>";
            } else {
                echo "<script>
                alert('Maaf, login gagal, username / password salah');
                window.location='" . base_url('auth/login') . "';
             </script>";
            }
        }
    }

    function logout()
    {
        $data = ['userid', 'level'];
        $this->session->sess_destroy($data);
        redirect('auth/login');
    }
}