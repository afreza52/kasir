<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();

        $this->template->load('template', 'dashboard');
    }
    function product()
    {
        $data = $this->db->get('p_item')->result_array();
        echo json_encode($data);
    }
    function sale()
    {
        $data = $this->db->get('t_sale')->result();
        echo json_encode($data);
    }
    function item()
    {
        $data = $this->db->get('t_sale_item')->result();
        echo json_encode($data);
    }
}