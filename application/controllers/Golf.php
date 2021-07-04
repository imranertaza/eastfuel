<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golf extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->library('cart');
        $this->load->helper(self::$helper);
        $this->system_config = $this->CommonModel->get_single_data_by_single_column('nso_sysconfig', 'id', 1);
    }

    public function participant()
    {

        $data['title'] = "Home";
        //$data['mainContent'] = $this->load->view('frontend/index.php', $data, true);
        $this->load->view('frontend/golf_participant',);
    }
}