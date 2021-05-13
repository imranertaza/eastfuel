<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FrontendController extends CI_Controller
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

    public function index()
    {

        $data['title'] = "Home";
        $data['mainContent'] = $this->load->view('frontend/index.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function registration()
    {
        if (isPostBack()) {
            // dumpVar($_POST);

            $postBackData['form_type'] = 1;
            $postBackData['firstName'] = $fname =  $this->input->post('firstName');
            $postBackData['lastName'] = $lname =  $this->input->post('lastName');
            $postBackData['badgeName'] = $this->input->post('badgeName');
            $postBackData['email'] = $email =  $this->input->post('email');
            $postBackData['secondaryEmail'] = $this->input->post('secondaryEmail');
            $postBackData['organization'] = $this->input->post('organization');
            $postBackData['jobTitle'] = $this->input->post('jobTitle');
            $postBackData['addressLine1'] = $this->input->post('addressLine1');
            $postBackData['addressLine2'] = $this->input->post('addressLine2');
            $postBackData['city'] = $this->input->post('city');
            $postBackData['state'] = $this->input->post('state');
            $postBackData['country'] = $this->input->post('country');
            $postBackData['zip'] = $this->input->post('zip');
            $postBackData['phone'] = $this->input->post('phone');
            $postBackData['officePhone'] = $this->input->post('officePhone');
            $postBackData['attendingConf'] = $this->input->post('attendingConf');
            $postBackData['companyType'] = $this->input->post('companyType');
            $postBackData['other'] = $this->input->post('other');
            $postBackData['emergencyContactName'] = $this->input->post('emergencyContactName');
            $postBackData['emmergencyContactPhone'] = $this->input->post('emmergencyContactPhone');
            $postBackData['confEvent'] = $this->input->post('confEvent');
            $postBackData['handicap'] = $this->input->post('handicap');
            $postBackData['rentalClubs'] = $this->input->post('rentalClubs');
            $postBackData['messagePreferredTime'] = $this->input->post('messagePreferredTime');
            $postBackData['wedWelReception'] = $this->input->post('wedWelReception');
            $postBackData['thursdayBreakfast'] = $this->input->post('thursdayBreakfast');
            $postBackData['thursdayLuncheon'] = $this->input->post('thursdayLuncheon');
            $postBackData['thursdayDinner'] = $this->input->post('thursdayDinner');
            $postBackData['spouseDinnerTicket'] = $this->input->post('spouseDinnerTicket');
            $postBackData['spouseFirstName'] = $this->input->post('spouseFirstName');
            $postBackData['spouseLastName'] = $this->input->post('spouseLastName');
            $postBackData['fridayBreakfast'] = $this->input->post('fridayBreakfast');
            $postBackData['dietaryRestrictions'] = $this->input->post('dietaryRestrictions');
            // $postBackData['password'] = md5($this->input->post('password'));
            // $postBackData['rawpass'] = $this->input->post('password');
            $postBackData['paymentMethod'] = $paymentMethod = $this->input->post('paymentMethod');
            $postBackData['amount'] = $this->input->post('amount');

            $new_user = $this->CommonModel->insert_data('nso_forms', $postBackData);

            if (!empty($new_user)) {
                $this->session->set_userdata('userId', $new_user);
                $this->session->set_userdata('name', $fname . " " . $lname);
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('loginTime', time());

                // Send confirmation email
                $user_data['user'] = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $new_user);
                $content['Subject'] = "Thank you for registering ". $fname . " " . $lname .", for the EFBC!";
                $content['message'] = $this->load->view('frontend/email/confirmation_templete.php', $user_data, true); 
                sendEmail($email, $content);

                if ($paymentMethod == "online") {
                    redirect(base_url('payment'));
                } else {
                    message("Submitted successfully! Thank You...");
                    redirect(base_url('confirmation_user'));
                }
            } else {
                exception("ERROR!!!");
                redirect(base_url('error'));
            }
        }

        $data['title'] = "Registration Form";
        $data['mainContent'] = $this->load->view('frontend/form/registration.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function attendees()
    {
        $data['title'] = "Attendees List";
        $data['extendedData'] = 0;
        $data['attendees'] = $this->CommonModel->get_data_list('nso_forms', 'lastName', 'ASC');
        $data['mainContent'] = $this->load->view('frontend/attendees.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function event_attendees($confEvent)
    {
        $data['title'] = $confEvent . "- Attendees List";
        $data['extendedData'] = 1;
        $data['confEvent'] = $confEvent;
        $data['attendees'] = $this->CommonModel->get_data_list_by_single_column('nso_forms','confEvent', $confEvent, 'lastName', 'ASC');
        
        $page = ($confEvent == "golf") ?  'frontend/attendees_golf.php' : 'frontend/attendees.php' ;
        $data['mainContent'] = $this->load->view($page , $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function dashboard()
    {

        $userId = $this->session->userdata('userId');
        $confEvent = $this->session->userdata('confEvent');

        // dumpVar($this->session->userdata('userId'));

        if (!empty($userId)) {
            $data['title'] = "Dashboard";
            $data['user'] = $user = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $userId);
            $data['groupUser'] = $this->CommonModel->get_data_list_by_single_column('nso_forms', 'confEvent', $confEvent, 'firstName', 'ASC');
            $data['mygroup'] = $this->CommonModel->get_data_list_by_single_column('nso_group', 'formId', $user->form_id, 'created_at', 'DESC');
            $data['mainContent'] = $this->load->view('frontend/dashboard.php', $data, true);
            $this->load->view('frontend_master_templete', $data);
        } else {
            exception("You are not allowed to access. Please login or try again");
            redirect(base_url('login'));
        }
    }

    public function create_group()
    {
        if (isPostBack()) {
            $userId = $this->session->userdata('userId');
            $user = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $userId);

            $postBackData['partner_id'] = $this->input->post('partner_id');
            $postBackData['formId'] = $userId;
            $postBackData['group_type'] = $user->confEvent;


            $this->CommonModel->insert_data('nso_group', $postBackData);
            message("Group Added successfully! Thank You...");
        } else {
            exception("Something went wrong! Please try again...");
        }
        redirect(base_url('dashboard'));
    }


    public function create_golf_group()
    {
        if(isPostBack()){
            // dumpVar($_POST);
            $postBackData['group_slug'] = time();
            $postBackData['group_type'] = 'Golf';
            $postBackData['group_title'] = $this->input->post('grouptitle');
            $postBackData['group_members'] = json_encode($this->input->post('attendees'));

            $this->CommonModel->insert_data('nso_group', $postBackData);
            message("Group Added successfully! Thank You...");
            redirect(base_url('group/golf'));
        }
        $data['title'] = "Create Golf Group";
        $data['attendees'] = $this->CommonModel->get_data_list_by_single_column('nso_forms', 'confEvent', 'Golf', 'createdAt', 'DESC');
        $data['groups'] = $this->CommonModel->get_data_list_by_single_column('nso_group', 'group_type', 'Golf', 'created_at', 'DESC');
        $data['mainContent'] = $this->load->view('frontend/form/golf_group.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function create_fishing_group()
    {
        $data['title'] = "Create Fishing Group";
        $data['attendees'] = $this->CommonModel->get_data_list_by_single_column('nso_forms', 'confEvent', 'Fishing', 'createdAt', 'DESC');
        $data['groups'] = $this->CommonModel->get_data_list_by_single_column('nso_group', 'group_type', 'Fishing', 'created_at', 'DESC');
        $data['mainContent'] = $this->load->view('frontend/form/fishing_group.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

     public function create_golf_gp()
    {
        $data['title'] = "Create Golf Group";
        $data['attendees'] = $this->CommonModel->get_data_list_by_single_column('nso_forms', 'confEvent', 'Golf', 'createdAt', 'DESC');
        $data['groups'] = $this->CommonModel->get_data_list_by_single_column('nso_new_group', 'type', 'Golf', 'category', 'ASC');
        $data['mainContent'] = $this->load->view('frontend/group/golf_group.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function create_fishing_gp()
    {
        $data['title'] = "Create Fishing Group";
        $data['attendees'] = $this->CommonModel->get_data_list_by_single_column('nso_forms', 'confEvent', 'Fishing', 'createdAt', 'DESC');
        $data['groups'] = $this->CommonModel->get_data_list_by_single_column('nso_new_group', 'type', 'Fishing', 'category', 'ASC');
        $data['mainContent'] = $this->load->view('frontend/group/fishing_group.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }


    public function golf_foursomes()
    {
        $data['title'] = "Create Golf Group";
        $data['attendees'] = $this->CommonModel->get_data_list_by_single_column('nso_forms', 'confEvent', 'Golf', 'createdAt', 'DESC');
        $data['groups'] = $this->CommonModel->get_data_list_by_single_column('nso_group', 'group_type', 'Golf', 'created_at', 'DESC');
        $data['mainContent'] = $this->load->view('frontend/form/golf_foursomes.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }





    public function contact()
    {
        $data['title'] = "Contact";
        $data['mainContent'] = $this->load->view('frontend/contact.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function upload_image()
    {
        if ($_FILES) {
            $result = image_upload('picture', 'original_image');
            if ($result['upload_data']) {
                $data['file_type'] = 1;
                $data['file_name'] = $filename = $result['upload_data']['file_name'];

                $this->CommonModel->insert_data('nso_user_image', $data);

                echo $filename;
            }
        }
    }

    public function upload_blob_image()
    {
        if (isPostBack()) {
            $dataURL = $this->input->post('image');

            $image_info = getimagesize($dataURL);
            $extension = (isset($image_info["mime"]) ? explode('/', $image_info["mime"])[1] : "");

            $dataURL = str_replace('data:image/' . $extension . ';base64,', '', $dataURL);
            $dataURL = str_replace(' ', '+', $dataURL);
            $image = base64_decode($dataURL);
            $filename = time() . '.' . $extension; //renama file name based on time

            $path = realpath(FCPATH . 'upload/custom_image');
            $result = file_put_contents($path . '/' . $filename, $image);
            if ($result != false) {
                $data['file_type'] = 2;
                $data['file_name'] =  $filename;

                $this->CommonModel->insert_data('nso_user_image', $data);

                echo $filename;
            } else {
                echo 0;
            }
        }
    }


    public function confirmation_user()
    {
        $data['title'] = "Confirmation";
        $data['mainContent'] = $this->load->view('frontend/confirmation/user_confirmation.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }

    public function confirmation_payment()
    {
        $data['title'] = "Payment Confirmation";
        $data['mainContent'] = $this->load->view('frontend/confirmation/payment_confirmation.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }


    public function error()
    {
        $data['title'] = "Error";
        $data['mainContent'] = $this->load->view('frontend/error.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }



    public function contactmail()
    {
        if (isPostBack()) {
            $this->db->trans_start();
            $postBackData['type'] = $this->input->post('form_type');
            $postBackData['name'] = $this->input->post('form_name');
            $postBackData['phone'] = $this->input->post('form_phone');
            $postBackData['email'] = $this->input->post('form_email');
            $postBackData['subject'] = $this->input->post('form_subject');
            $postBackData['message'] = $this->input->post('form_message');

            $this->CommonModel->insert_data('nso_inbox', $postBackData);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                redirect(base_url('error'));
            } else {
                $this->db->trans_commit();
                $this->session->set_flashdata('confirm_type', 1);
                redirect(base_url('emailconfirmation'));
            }
        }
    }
}
