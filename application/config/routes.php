<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'FrontendController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Frontend 
$route['login'] = 'AuthController/login';
$route['register'] = 'AuthController/register';
$route['logout'] = 'AuthController/logout';


$route['registration'] = 'FrontendController/registration';
$route['attendees'] = 'FrontendController/attendees';
$route['attendees/(:any)'] = 'FrontendController/event_attendees/$1';

$route['golf_participant'] = 'golf/participant';
$route['golf/update'] = 'golf/update';
$route['group/golf'] = 'FrontendController/create_golf_gp';
$route['group/fishing'] = 'FrontendController/create_fishing_gp';

$route['fishing_participant'] = 'fishing/participant';
$route['fishing/update'] = 'fishing/update';

$route['payment'] = 'PaymentController/payment';
$route['purchase'] = 'PaymentController/purchase';

$route['payment_single'] = 'PaymentController/payment_single';
$route['purchase_single'] = 'PaymentController/purchase_single';


$route['confirmation_user'] = 'FrontendController/confirmation_user';
$route['confirmation_payment'] = 'FrontendController/confirmation_payment';



// Dashboard
$route['dashboard'] = 'FrontendController/dashboard';
$route['create_group'] = 'FrontendController/create_group';


$route['dashboard/school-waiver-list'] = 'FrontendController/dashboard_waiver_list';
$route['dashboard/school-holiday-program-waiver-list'] = 'FrontendController/dashboard_holiday_waiver_list';


$route['about'] = 'FrontendController/about';
$route['contact'] = 'FrontendController/contact';


$route['upload_image'] = 'FrontendController/upload_image';
$route['upload_blob_image'] = 'FrontendController/upload_blob_image';


$route['error'] = 'FrontendController/error';
$route['reserve'] = 'FrontendController/reserve';
$route['confirmation'] = 'FrontendController/confirmation';


$route['contactmail'] = 'FrontendController/contactmail';
$route['emailconfirmation'] = 'FrontendController/emailconfirmation';


// Api Panel


// Admin Panel
$route['admin'] = 'AdminController/index';
$route['admin/login'] = 'AdminController/checkLogin_admin';
$route['admin/logout'] = 'AdminController/logout_admin';




$route['admin/page_edit/(:any)'] = 'SetupController/page_edit/$1';
$route['admin/price_scheduling/(:any)'] = 'SetupController/price_scheduling/$1';
$route['admin/price_scheduling_delete/(:any)/(:any)'] = 'SetupController/price_scheduling_delete/$1/$2';
$route['admin/file_upload/(:any)'] = 'SetupController/file_upload/$1';
$route['admin/file_update'] = 'SetupController/file_update';

$route['admin/products'] = 'SetupController/products';

$route['admin/edit_attendee/(:any)'] = 'SetupController/edit_attendee/$1';
$route['admin/edit_grouping/(:any)'] = 'SetupController/edit_grouping/$1';
$route['admin/canceled_attendee/(:any)'] = 'SetupController/canceled_attendee/$1';

$route['admin/attendee'] = 'SetupController/attendee';
$route['admin/registereduser'] = 'SetupController/registereduser';
$route['admin/grouping'] = 'SetupController/grouping';
$route['admin/addattendee'] = 'SetupController/addattendee';

$route['admin/addnote/(:any)/(:any)'] = 'SetupController/addnote/$1/$2';

$route['admin/transections'] = 'SetupController/transections';
$route['admin/transection/(:any)'] = 'SetupController/transection/$1';

$route['admin/inbox'] = 'SetupController/inbox';

$route['admin/calenderapi'] = 'CalenderController/calenderapi';

// Setup Controller

$route['admin/setting/user'] = 'SetupController/setting_user';
$route['admin/setting/company'] = 'SetupController/setting_company';
$route['admin/setting/password'] = 'SetupController/change_password';

$route['admin/delete/(:any)/(:any)'] = 'SetupController/delete_row/$1/$2';
