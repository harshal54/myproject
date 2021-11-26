<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Users/login';
$route['404_override'] = '';
$route['add-student'] = 'mycontroller/add_student';
$route['show-student'] = 'mycontroller/show_student';
$route['add-courses'] = 'mycontroller/add_courses';
$route['show-courses'] = 'mycontroller/show_courses';
$route['add-fees'] = 'mycontroller/add_fees';
$route['show-fees'] = 'mycontroller/show_fees';
$route['InsertStudent'] = 'mycontroller/insertstudentdata';
$route['Insertcourse'] = 'mycontroller/insertcourse';
$route['InsertFees'] = 'mycontroller/insertfees';
$route['deleteStudent/(:any)'] = 'mycontroller/deletestudent/$1';
$route['send/(:any)'] = 'Users/send/$1';
$route['googlemap']='mycontroller/google_map';
$route['calendar']='mycontroller/calendar';
$route['updateStudent/(:any)'] = 'mycontroller/updatestudent/$1';
$route['products']='Products/products';
$route['buy/(:any)']='Products/buy/$1';
$route['success']='Products/success';
$route['cancel']='Products/cancel';
$route['ipn']='Products/ipn';
$route['Chat_controller/(:any)']='chat_controller/chatBox/$1';
$route['updateData/(:any)'] = 'mycontroller/updateStudentdata/$1';
$route['Signature']='signature_controller';
$route['forgotpassword']='Users/forgotpassword';
$route['createnewaccount']='Users/register';
$route['Signature/(:any)']='signature_controller/insert_single_signature/$1';
$route['translate_uri_dashes'] = FALSE;
