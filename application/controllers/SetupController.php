<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SetupController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Common_model', 'CommonModel');
        $this->load->helper(self::$helper);

        if ($this->session->userdata('userId') == null || $this->session->userdata('userId') < 1) {
            redirect(base_url('admin'));
        }
    }

    // Call Back function from insertProduct 
    function set_upload_options($dir)
    {
        // upload an image options
        $config = array();
        $config['upload_path'] = $dir; //give the path to upload the image in folder
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE; // for encrypting the name
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '*';
        $config['overwrite'] = FALSE;
        return $config;
    }


    public function addattendee()
    {
        if (isPostBack()) {
            $postBackData['form_type'] = 3;
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
                // Send confirmation email
                $user_data['user'] = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $new_user);
                $content['Subject'] = "Thank you for registering ". $fname . " " . $lname .", for the EFBC!";
                $content['message'] = $this->load->view('frontend/email/confirmation_templete.php', $user_data, true); 
                sendEmail($email, $content);
                
                message("Submitted successfully! Thank You...");
                redirect(base_url('admin/registereduser'));
            } else {
                exception("Something went wrong! Please try again...");
            }
        }
        $data['title'] = "Add Attendee";
        $data['mainContent'] = $this->load->view('admin/setup/addattendee.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function addnote($type, $id){
        if(isPostBack()){
            $postBackData['note'] = $this->input->post('note');

            switch ($type) {
                case "attendee":
                    $table = 'nso_forms';
                    $primary_column = 'form_id';
                    $redirect = "admin/registereduser";
                    break;
                case "payment":
                    $table = 'nso_payment';
                    $primary_column = 'payment_id';
                    $redirect = "admin/transections";
                    break;
                default:
                    exception("Something went wrong! Please try again...");
            }

            $this->CommonModel->update_data($table, $postBackData, $primary_column, $id);
            message("Note has added successfully!!");
            redirect(base_url($redirect));
        }
        $data['id'] = $id;
        $data['type'] = $type;
        $data['title'] = "Add Note";
        $data['mainContent'] = $this->load->view('admin/setup/add_note.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function registereduser()
    {
        $data['title'] = "User List";
        $data['users'] = $this->CommonModel->get_data_list('nso_forms', 'createdAt', 'DESC');
        $data['mainContent'] = $this->load->view('admin/setup/user_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function grouping()
    {
        $data['title'] = "Group List";
        $data['groups'] = $this->CommonModel->get_data_list('nso_group', 'created_at', 'DESC');
        $data['mainContent'] = $this->load->view('admin/setup/grouping_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }


    public function edit_grouping($id)
    {

        if (isPostBack()) {
            $postBackData['group_type'] = $this->input->post('groupType');
            $postBackData['group_title'] = $this->input->post('groupTitle');
            

            $new_user = $this->db->where('group_id',$id)->update('nso_group', $postBackData);

            // print $this->db->last_query();

            //$this->CommonModel->insert_data('nso_forms', $postBackData);

            // if (!empty($new_user)) {
                
                message("Submitted successfully! Thank You...");
            // } else {
            //     exception("Something went wrong! Please try again...");
            // }
        }



        $data['title'] = "Edit Grouping";
        $data['users'] = $this->db->where('group_id', $id)->get('nso_group')->row();
        //$this->CommonModel->get_data_list('nso_forms', 'createdAt', 'DESC');
        $data['mainContent'] = $this->load->view('admin/setup/grouping_edit.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }



        public function attendee()
    {
        $data['title'] = "Attendees List";
        $data['users'] = $this->CommonModel->get_data_list('nso_forms', 'createdAt', 'DESC');
        $data['mainContent'] = $this->load->view('admin/setup/attendees_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }


    public function edit_attendee($id)
    {

        if (isPostBack()) {
            // $postBackData['form_type'] = 3;
            $postBackData['firstName'] = $fname =  $this->input->post('firstName');
            $postBackData['lastName'] = $lname =  $this->input->post('lastName');
            $postBackData['badgeName'] = $this->input->post('badgeName');
            // $postBackData['email'] = $email =  $this->input->post('email');
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

            $new_user = $this->db->where('form_id',$id)->update('nso_forms', $postBackData);

            //$this->CommonModel->insert_data('nso_forms', $postBackData);

            // if (!empty($new_user)) {
                
                message("Submitted successfully! Thank You...");
            // } else {
            //     exception("Something went wrong! Please try again...");
            // }
        }



        $data['title'] = "Edit Attendees";
        $data['users'] = $this->db->where('form_id', $id)->get('nso_forms')->row();//$this->CommonModel->get_data_list('nso_forms', 'createdAt', 'DESC');
        $data['mainContent'] = $this->load->view('admin/setup/attendees_edit.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }


    public function page_edit($uri)
    {
        $data['page'] = $page =  $this->CommonModel->get_single_data_by_single_column('nso_pages', 'uri', $uri);
        $data['images'] = $this->CommonModel->get_data_list_by_single_column('nso_slider', 'type', $page->page_id, 'slider_order', 'ASC');
        if (isPostBack()) {
            $postBackData['title'] = $this->input->post('title');
            $postBackData['adult_limit'] = $this->input->post('adult_limit');
            $postBackData['minimum_stays'] = $this->input->post('minimum_stays');
            $postBackData['ppn'] = $this->input->post('ppn');
            $postBackData['gpn'] = $this->input->post('gpn');
            $postBackData['cpn'] = $this->input->post('cpn');
            $postBackData['service_fee'] = $this->input->post('service_fee');
            $postBackData['cleaning_fee'] = $this->input->post('cleaning_fee');
            $postBackData['body'] = $this->input->post('page_body');

            $this->CommonModel->update_data('nso_pages', $postBackData, 'page_id', $page->page_id);
            message("Item has updated successfully!!");
            redirect(base_url('admin/page_edit/' . $uri));
        }

        $data['title'] = $page->title;
        $data['mainContent'] = $this->load->view('admin/setup/page_edit.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function price_scheduling($uri)
    {
        $data['page'] = $page =  $this->CommonModel->get_single_data_by_single_column('nso_pages', 'uri', $uri);
        $data['schedulings'] = $this->CommonModel->get_data_list_by_single_column('nso_pricing', 'property_id', $page->page_id,  1);

        if (isPostBack()) {

            // dumpVar($_POST);
            $postBackData['property_id'] = $page->page_id;
            $postBackData['date_starting'] = $this->input->post('date_starting_submit');
            $postBackData['date_end'] = $this->input->post('date_end_submit');
            $postBackData['ppn'] = $this->input->post('ppn');
            $postBackData['gpn'] = $this->input->post('gpn');
            $postBackData['cpn'] = $this->input->post('cpn');
            $postBackData['service_fee'] = $this->input->post('service_fee');
            $postBackData['cleaning_fee'] = $this->input->post('cleaning_fee');
            $postBackData['status'] = 1;
            $postBackData['updated_by'] = $this->session->userdata('userId');

            $this->CommonModel->insert_data('nso_pricing', $postBackData);
            message("Item has Added successfully!!");
            redirect(base_url('admin/price_scheduling/' . $uri));
        }

        $data['title'] = $page->title;
        $data['mainContent'] = $this->load->view('admin/setup/price_scheduling.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function price_scheduling_delete($uri, $pricing_id)
    {
        $postBackData['status'] = 2;
        $postBackData['updated_by'] = $this->session->userdata('userId');
        $this->CommonModel->update_data('nso_pricing', $postBackData, 'pricing_id', $pricing_id);


        message("Item has updated successfully!!");
        redirect(base_url('admin/price_scheduling/' . $uri));
    }

    //Add Image
    public function file_upload($uri)
    {
        $page =  $this->CommonModel->get_single_data_by_single_column('nso_pages', 'uri', $uri);

        if (isPostBack()) {
            $result = image_upload('file', 'images');
            if (empty($result['error'])) {
                $postBackData['type'] =  $page->page_id;
                $postBackData['image'] =  $image['image'] =  $result['upload_data']['file_name'];
                $postBackData['slider_order'] = 0;

                $image['slider_id'] = $this->CommonModel->insert_data('nso_slider', $postBackData);

                echo json_encode($image);
            }
        }
    }

    // Update Image
    public function file_update()
    {
        if (isPostback()) {
            $slider_id = $this->input->post('slider_id');
            $postBackData['title'] = $postBackData['alt'] = $this->input->post('image_title');
            $postBackData['slider_order'] = $this->input->post('image_order');

            echo $this->CommonModel->update_data('nso_slider', $postBackData, 'slider_id', $slider_id);
        }
    }

    public function products()
    {
        $data['title'] = 'Products';
        $data['products'] = $this->CommonModel->get_data_list('nso_frames', 'frame_id', 'ASC');
        $data['mainContent'] = $this->load->view('admin/product/list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function transections()
    {
        $data['title'] = 'Payment';
        $data['generals'] = $this->CommonModel->get_data_list('nso_payment', 'createdAt', 'DESC');
        $data['mainContent'] = $this->load->view('admin/transection/list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function transection($transection_id)
    {
        $data['title'] = 'Transection';
        $data['general'] = $this->CommonModel->get_single_data_by_single_column('nso_generals', 'generalId', $transection_id);
        $data['ledger'] = $this->CommonModel->get_data_list_by_single_column('nso_generalledger', 'generalsId', $transection_id);
        $data['mainContent'] = $this->load->view('admin/transection/view.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function inbox()
    {
        $data['title'] = 'Inbox';
        $data['messages'] = $this->CommonModel->get_data_list('nso_inbox', 'created_at', 'DESC');
        $data['mainContent'] = $this->load->view('admin/message_list.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function change_password()
    {
        if (isPostBack()) {
            $userId = $this->session->userdata('userId');
            $user = $this->CommonModel->get_single_data_by_single_column('nso_user', 'userId', $userId);

            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            $repeat_password = $this->input->post('repeat_password');

            if ($new_password != $repeat_password) {
                exception('New Password and Repeat Password are not matching');
                redirect('admin/setting/password');
            }

            if (md5($old_password) != $user->password) {
                exception('Current Password is not matched');
                redirect('admin/setting/password');
            }

            $postBackData['password'] = md5($new_password);
            $this->CommonModel->update_data('nso_user', $postBackData, 'userId', $userId);

            message("Password has updated successfully!!");
            redirect(base_url('admin/setting/password'));
        }
        $data['title'] = 'Change Password';
        $data['mainContent'] = $this->load->view('admin/change_password.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }



    public function setting_user()
    {
        if (isPostBack()) {
            $this->db->trans_start();
            $postBackData['firstName'] = $this->input->post('firstName');
            $postBackData['phone'] = $this->input->post('phone');
            $postBackData['email'] = $this->input->post('email');
            $postBackData['address'] = $this->input->post('address');

            $this->CommonModel->update_data('nso_user', $postBackData, 'userId', $this->session->userdata('userId'));
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                exception("An unexpected error has occurred. Your try again later!!");
            } else {
                $this->db->trans_commit();
                message(" Item has updated successfully!!");
                redirect(base_url('admin/setting/user'));
            }
        }
        $data['title'] = 'User Setting';
        $data['sysConf'] = $this->CommonModel->get_single_data_by_single_column('nso_user', 'userId', $this->session->userdata('userId'));
        $data['mainContent'] = $this->load->view('admin/setup/setting_user.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }

    public function setting_company()
    {
        if (isPostBack()) {
            $this->db->trans_start();
            $postBackData['company_name'] = $this->input->post('company_name');
            $postBackData['phone'] = $this->input->post('phone');
            $postBackData['email'] = $this->input->post('email');
            $postBackData['location'] = $this->input->post('location');
            $postBackData['facebook'] = $this->input->post('facebook');
            $postBackData['twitter'] = $this->input->post('twitter');
            $postBackData['instagram'] = $this->input->post('instagram');
            $postBackData['linkedin'] = $this->input->post('linkedin');
            $postBackData['pinterest'] = $this->input->post('pinterest');
            $postBackData['factory'] = $this->input->post('factory');

            $this->CommonModel->update_data('nso_sysconfig', $postBackData, 'id', 1);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                exception("An unexpected error has occurred. Your try again later!!");
            } else {
                $this->db->trans_commit();
                message(" Item has updated successfully!!");
                redirect(base_url('admin/setting/company'));
            }
        }
        $data['title'] = 'Company Setting';
        $data['sysConf'] = $this->CommonModel->get_single_data_by_single_column('nso_sysconfig', 'id', 1);
        $data['mainContent'] = $this->load->view('admin/setup/setting_company.php', $data, true);
        $this->load->view('admin_master_templete', $data);
    }



    public function delete_row($type, $id)
    {
        $this->db->trans_start();
        $deleted_data['type'] = $type;
        $deleted_data['deleted_id'] = $id;

        switch ($type) {
            case 'reg_user':
                $deleted_data['from_table'] = 'nso_forms';
                $deleted_Value = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $id);
                $check_exist_group_creator = $this->CommonModel->get_single_data_by_single_column('nso_group', 'formId', $id);
                $check_exist_group_partner = $this->CommonModel->get_single_data_by_single_column('nso_group', 'partner_id', $id);

                if (empty($check_exist_group_creator) && empty($check_exist_group_partner)) {
                    $this->CommonModel->delete_data('nso_forms', 'form_id', $id);
                    $message = "User deleted successfully !!";
                } else {
                    $exception = "The user is already in a group. Can't be deleted";
                }
                $redirect = 'admin/registereduser';
                break;
            default:
                $deleted_Value = 'NULL';
                $exception = "Your request has invalid! Please try again";
                $redirect = 'admin';
        }

        $deleted_data['value1'] =  json_encode($deleted_Value);
        $deleted_data['deleted_by'] = $this->session->userdata('userId');
        $this->CommonModel->insert_data('nso_deleted_data', $deleted_data);
        $this->db->trans_complete();


        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            exception("An unexpected error has occurred. This action cannot be completed.!!");
        } else {
            $this->db->trans_commit();
            if (!empty($message)) {
                message($message);
            } else {
                exception($exception);
            }
        }
        redirect(base_url($redirect));
    }
}
