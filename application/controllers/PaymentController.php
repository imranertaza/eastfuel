<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Example usage of Authorize.net's
 * Advanced Integration Method (AIM)
 */
class PaymentController extends CI_Controller
{
    static $helper   = array('user_helper');
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model', 'CommonModel');
        $this->load->library('cart');
        $this->load->library('authorize_net');
        $this->load->helper(self::$helper);
        $this->system_config = $this->CommonModel->get_single_data_by_single_column('nso_sysconfig', 'id', 1);
    }
    // Example auth & capture of a credit card
    public function index()
    {
        // Authorize.net lib


        $auth_net = array(
            'x_card_num'            => '4111111111111111', // Visa
            'x_exp_date'            => '12/14',
            'x_card_code'            => '123',
            'x_description'            => 'A test transaction',
            'x_amount'                => '20',
            'x_first_name'            => 'John',
            'x_last_name'            => 'Doe',
            'x_address'                => '123 Green St.',
            'x_city'                => 'Lexington',
            'x_state'                => 'KY',
            'x_zip'                    => '40502',
            'x_country'                => 'US',
            'x_phone'                => '555-123-4567',
            'x_email'                => 'test@example.com',
            'x_customer_ip'            => $this->input->ip_address(),
        );
        $this->authorize_net->setData($auth_net);

        // Try to AUTH_CAPTURE
        if ($this->authorize_net->authorizeAndCapture()) {
            echo '<h2>Success!</h2>';
            echo '<p>Transaction ID: ' . $this->authorize_net->getTransactionId() . '</p>';
            echo '<p>Approval Code: ' . $this->authorize_net->getApprovalCode() . '</p>';
        } else {
            echo '<h2>Fail!</h2>';
            // Get error
            echo '<p>' . $this->authorize_net->getError() . '</p>';
            // Show debug data
            $this->authorize_net->debug();
        }
    }


    public function payment()
    {
        $data['title'] = "Payment Now";
        $userId = $this->session->userdata('userId');
        // $userId = 6;
        $data['user'] = $user = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $userId);
        $data['mainContent'] = $this->load->view('frontend/payment.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }


    public function purchase()
    {
        $postBackData['formId'] = $userId = $this->session->userdata('userId');
        $data['user'] = $email_data['user'] = $user = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $userId);

        if (isPostBack()) {
            $postBackData['cardNumber'] = $cardNumber =  $this->input->post('cardNumber');
            $postBackData['expireMonth'] = $expireMonth =  $this->input->post('expireMonth');
            $postBackData['expireYear'] = $expireYear =  $this->input->post('expireYear');
            $postBackData['cvv'] = $cvv =  $this->input->post('cvv');
            $postBackData['amount'] = $user->amount;


            $auth_net = array(
                'x_card_num'            => $cardNumber, // Visa
                'x_exp_date'            => $expireMonth . '/' . $expireYear,
                'x_card_code'            => $cvv,
                'x_description'            => '50th Annual Eastern Fuel Buyers Conference Registration',
                'x_amount'                => $user->amount,
                'x_first_name'            => $user->firstName,
                'x_last_name'            => $user->lastName,
                'x_address'                => $user->addressLine1,
                'x_city'                =>  $user->city,
                'x_state'                => $user->state,
                'x_zip'                    => $user->zip,
                'x_country'                => $user->country,
                'x_phone'                => $user->phone,
                'x_email'                => $user->email,
                'x_customer_ip'            => $this->input->ip_address(),
            );
            $this->authorize_net->setData($auth_net);


            // Try to AUTH_CAPTURE
            if ($this->authorize_net->authorizeAndCapture()) {
                $postBackData['transactionId'] =  $this->authorize_net->getTransactionId();
                $postBackData['approvalCode'] =  $this->authorize_net->getApprovalCode();

                $payment_id = $this->CommonModel->insert_data('nso_payment', $postBackData);
                $email_data['payment'] = $this->CommonModel->get_single_data_by_single_column('nso_payment', 'payment_id', $payment_id);
                

                // Update Payment Status
                $postBackUpdate['paymentStatus'] = "paid";
                $this->CommonModel->update_data('nso_forms', $postBackUpdate, 'form_id', $userId);


                // Send Payment email
                $content['Subject'] = "Thank you for payment ". $user->firstName . " " . $user->lastName.", for the EFBC!";
                $content['message'] = $this->load->view('frontend/email/payment_templete.php', $email_data, true); 
                sendEmail($email, $content);

                message("Payment Completed successfully! Thank You...");
                redirect(base_url('confirmation_payment'));
                // echo '<h2>Success!</h2>';
                // echo '<p>Transaction ID: ' . $this->authorize_net->getTransactionId() . '</p>';
                // echo '<p>Approval Code: ' . $this->authorize_net->getApprovalCode() . '</p>';
            } else {
                // echo '<h2>Fail!</h2>';
                // Get error
                // echo '<p>' . $this->authorize_net->getError() . '</p>';

                exception('Failed! ' .  $this->authorize_net->getError());
                redirect(base_url('payment'));
                // Show debug data
                // $this->authorize_net->debug();
            }
        }
    }

    
    public function payment_single()
    {
        $data['title'] = "Payment Now";
        $data['mainContent'] = $this->load->view('frontend/payment_single.php', $data, true);
        $this->load->view('frontend_master_templete', $data);
    }


    public function purchase_single()
    {


        if (isPostBack()) {


            $postBackData['form_type'] = 2;
            $postBackData['firstName'] = $fname =  $this->input->post('firstName');
            $postBackData['lastName'] = $lname =  $this->input->post('lastName');
            $postBackData['email'] = $email =  $this->input->post('email');
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


            // $postBackData['password'] = md5($this->input->post('password'));
            // $postBackData['rawpass'] = $this->input->post('password');

            $postBackData['amount'] = $amount = $this->input->post('amount');
            $postBackData['paymentMethod'] = "online";

            $new_user = $this->CommonModel->insert_data('nso_forms', $postBackData);


            if (!empty($new_user)) {
                $this->session->set_userdata('userId', $new_user);
                $this->session->set_userdata('name', $fname . " " . $lname);
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('loginTime', time());


                // message("Submitted successfully! Thank You...");
                // redirect(base_url('dashboard'));



                $payment_postBackData['formId'] = $userId = $new_user;
                $data['user'] = $email_data['user'] =  $user_data['user'] =  $user = $this->CommonModel->get_single_data_by_single_column('nso_forms', 'form_id', $new_user);

                // Send confirmation email
                $content['Subject'] = "Thank you for registering ". $fname . " " . $lname .", for the EFBC!";
                $content['message'] = $this->load->view('frontend/email/confirmation_templete.php', $user_data, true); 
                sendEmail($email, $content);

                $payment_postBackData['cardNumber'] = $cardNumber =  $this->input->post('cardNumber');
                $payment_postBackData['expireMonth'] = $expireMonth =  $this->input->post('expireMonth');
                $payment_postBackData['expireYear'] = $expireYear =  $this->input->post('expireYear');
                $payment_postBackData['cvv'] = $cvv =  $this->input->post('cvv');
                $payment_postBackData['amount'] = $amount;


                $auth_net = array(
                    'x_card_num'            => $cardNumber, // Visa
                    'x_exp_date'            => $expireMonth . '/' . $expireYear,
                    'x_card_code'            => $cvv,
                    'x_description'            => '50th Annual Eastern Fuel Buyers Conference Registration',
                    'x_amount'                => $amount,
                    'x_first_name'            => $user->firstName,
                    'x_last_name'            => $user->lastName,
                    'x_address'                => $user->addressLine1,
                    'x_city'                =>  $user->city,
                    'x_state'                => $user->state,
                    'x_zip'                    => $user->zip,
                    'x_country'                => $user->country,
                    'x_phone'                => $user->phone,
                    'x_email'                => $user->email,
                    'x_customer_ip'            => $this->input->ip_address(),
                );
                $this->authorize_net->setData($auth_net);


                // Try to AUTH_CAPTURE
                if ($this->authorize_net->authorizeAndCapture()) {
                    $payment_postBackData['transactionId'] =  $this->authorize_net->getTransactionId();
                    $payment_postBackData['approvalCode'] =  $this->authorize_net->getApprovalCode();

                    $payment_id = $this->CommonModel->insert_data('nso_payment', $payment_postBackData);
                    $email_data['payment'] = $this->CommonModel->get_single_data_by_single_column('nso_payment', 'payment_id', $payment_id);

                    // Update Payment Status
                    $postBackUpdate['paymentStatus'] = "paid";
                    $this->CommonModel->update_data('nso_forms', $postBackUpdate, 'form_id', $userId);


                    // Send Payment email
                    $content['Subject'] = "Thank you for payment ". $user->firstName . " " . $user->lastName.", for the EFBC!";
                    $content['message'] = $this->load->view('frontend/email/payment_templete.php', $email_data, true); 
                    sendEmail($email, $content);


                    message("Payment Completed successfully! Thank You...");
                    redirect(base_url('confirmation_payment'));
                } else {
                    exception('Failed! ' .  $this->authorize_net->getError());
                    redirect(base_url('payment_single'));
                }
            } else {
                exception("Something went wrong! Please try again");
                redirect(base_url('payment_single'));
            }
        }
    }
}
