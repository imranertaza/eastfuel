<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('image_upload')) {
    function image_upload($filetemp, $path, $filename = null)
    {
        if (!empty($filename)) {
            $config['file_name'] = $filename;
        } else {
            $config['encrypt_name'] = TRUE;
        }
        $config['upload_path'] = realpath(FCPATH . 'upload/' . $path);
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['overwrite'] = FALSE;
        $config['remove_spaces'] = TRUE;
        $_CI = &get_instance();
        $_CI->load->library('upload', $config);

        if (!$_CI->upload->do_upload($filetemp)) {
            return array('error' => $_CI->upload->display_errors());
        } else {
            return array('upload_data' => $_CI->upload->data());
        }
    }
}


if (!function_exists('night_calculator')) {
    function night_calculator($arrive, $departure)
    {

        // formate "2010-07-06"
        $date1 = new DateTime($arrive);
        $date2 = new DateTime($departure);

        // this calculates the diff between two dates, which is the number of nights
        return $numberOfNights = $date2->diff($date1)->format("%a");
    }
}



// Convert amount to cent
if (!function_exists('to_pennies')) {
    function to_pennies($value)
    {
        return intval(
            strval(floatval(
                preg_replace("/[^0-9.]/", "", $value)
            ) * 100)
        );
    }
}

// Send Email
if (!function_exists('sendEmail')) {
    function sendEmail($email, $content, $attachment = null)
    {
        //$senderEmail = 'info@eastfuelconf.com';
        $senderEmail = 'info@eastfuelconf.com';
        $replyTo = 'info@eastfuelconf.com';
        $senderName = 'no reply';
        $subject =  $content['Subject'];
        $message = $content['message'];
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'eastfuelconf.com',
            'smtp_port' => 587,
            'smtp_user' => 'mail@eastfuelconf.com',
            //'smtp_user' => 'info@eastfuelconf.com',
            //'smtp_pass' => '2$O5_lg.12o1',
            'smtp_pass' => '11%332I#1)^q',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1',
            'newline' => "\r\n"
        );


        $_CI = &get_instance();
        $_CI->load->library('email');
        $_CI->email->initialize($config);
        $_CI->email->from($senderEmail, $senderName);
        $_CI->email->reply_to($replyTo, $senderName);
        $_CI->email->to($email);
        $_CI->email->bcc(array('Zeeshan0811@gmail.com', 'info@eastfuelconf.com'));
        $_CI->email->subject($subject);
        $_CI->email->message($message);
        if ($attachment != null) {
            if (is_array($attachment)) {
                foreach ($attachment as $file) {
                    $_CI->email->attach($file);
                }
                // $_CI->email->attach(implode(",", $attachment));
            } else {
                $_CI->email->attach($attachment);
            }
        }
        $_CI->email->set_newline("\r\n");
        // $result =  $_CI->email->send();
        // return $result;
        if(!$_CI->email->send()){
            return 0;
            // print_r($_CI->email->print_debugger(), true);
        } else {
            return 1;
        }
    }
}


if (!function_exists('gallery_wall_style')) {
    function gallery_wall_style($style)
    {
        switch ($style) {
            case 1:
                $result['text'] = "Black";
                $result['image'] = "black.png";
                break;
            case 2:
                $result['text'] = "White";
                $result['image'] = "white.png";
                break;
            case 3:
                $result['text'] = "Gold";
                $result['image'] = "gold.png";
                break;
            case 4:
                $result['text'] = "Natural";
                $result['image'] = "natural.png";
                break;
            case 5:
                $result['text'] = "Modern";
                $result['image'] = "modern.png";
                break;

            default:
                $result['text'] = "";
                $result['image'] = "";
                break;
        }

        return $result;
    }
}


if (!function_exists('frame_category')) {
    function frame_category($type)
    {
        switch ($type) {
            case 1:
                $result = "Print Only";
                break;
            case 2:
                $result = "Gallery Wall";
                break;
            case 3:
                $result = "Collage Frame";
                break;
            case 4:
                $result = "Frame - Direct Buy";
                break;
            case 5:
                $result = " Print & Frame";
                break;
            case 6:
                $result = "Gift Card";
                break;

            default:
                break;
        }

        return $result;
    }
}
