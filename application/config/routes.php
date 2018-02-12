
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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Register'] = 'Login/register';


/*This is for the student*/

$route['Schedules'] = 'Studentschedules';
$route['Schoolworks'] = 'Studentschoolworks';


$route['Messages'] = 'Studentmessage';
$route['Messages/(:num)'] = 'Studentmessage/message/$1';
$route['chat/send_message/(:num)']= 'Studentchatsession/send_message/$1';
$route['chat/get_message/(:num)']= 'Studentchatsession/get_messages/$1';


$route['Subjects'] = 'Studentsubjects';
$route['Videochat'] = 'Studentvideochat';
$route['Teachers'] = 'Studentprofessor';
$route['Chatsessions']= 'Studentchatsession';


/*This is for the teacher*/

$route['Schedule']= 'Teacherschedules';
$route['Livechat']= 'Teacherlivechat';
$route['Message']= 'Teachermessage';
$route['Message/(:num)']= 'Teachermessage/message/$1';


$route['chat/send_messages/(:num)']= 'Teacherchatsession/send_message/$1';
$route['chat/get_messages/(:num)']= 'Teacherchatsession/get_messages/$1';


$route['Requirement']= 'Teacherschoolworks';
$route['Student']= 'Teacherstudents';
$route['Subject'] = 'Teachersubjects';
$route['Chatsession'] = 'Teacherchatsession';

