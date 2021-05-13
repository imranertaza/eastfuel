<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TestController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);
    }

    public function testing()
    {
        // $key = $this->encryption->create_key(16);
        $encription = $this->encryption->encrypt('Zeeshan');
        $decription = $this->encryption->decrypt($encription);


        dumpVar($decription);
    }

    public function testemail(){
        // $fname = "Zeeshan";
        // $lname = "Akhtar";
        // $email = "Zeeshan0811@gmail.com";
        
        // $user_data['user'] = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', 29);
        // $content['Subject'] = "Thank you for registering ". $fname . " " . $lname .", for the EFBC!";
        // $content['message'] = $this->load->view('frontend/email/confirmation_templete.php', $user_data, true); 
        // sendEmail($email, $content);
    }
}
