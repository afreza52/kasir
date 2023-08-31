<?php
class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();

    }
    function user_login()
    {
        $user_id = $this->ci->session->userdata('userid');
        $user_data = $this->ci->m_user->get($user_id)->row();
        return $user_data;
    }
    function count_item()
    {
        return $this->ci->m_item->get()->num_rows();
    }
    function count_supplier()
    {
        return $this->ci->m_supplier->get()->num_rows();
    }
    function count_customer()
    {
        return $this->ci->m_customer->get()->num_rows();
    }
    function count_user()
    {
        return $this->ci->m_user->get()->num_rows();
    }
}