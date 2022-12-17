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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['login'] = 'LoginController';
$route['login/(:any)'] = 'LoginController/$1';
$route['login/(:any)/(:any)'] = 'LoginController/$1/$2';
$route['login/(:any)/(:any)/(:any)'] = 'LoginController/$1/$2/$3';

$route['home'] = 'HomeController';
$route['home/(:any)'] = 'HomeController/$1';
$route['home/(:any)/(:any)'] = 'HomeController/$1/$2';
$route['home/(:any)/(:any)/(:any)'] = 'HomeController/$1/$2/$3';

$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['report'] = 'ReportController';
$route['report/(:any)'] = 'ReportController/$1';
$route['report/(:any)/(:any)'] = 'ReportController/$1/$2';
$route['report/(:any)/(:any)/(:any)'] = 'ReportController/$1/$2/$3';

$route['molekuler'] = 'MolekulerController';
$route['molekuler/(:any)'] = 'MolekulerController/$1';
$route['molekuler/(:any)/(:any)'] = 'MolekulerController/$1/$2';
$route['molekuler/(:any)/(:any)/(:any)'] = 'MolekulerController/$1/$2/$3';

$route['account'] = 'AccountController';
$route['account/(:any)'] = 'AccountController/$1';
$route['account/(:any)/(:any)'] = 'AccountController/$1/$2';
$route['account/(:any)/(:any)/(:any)'] = 'AccountController/$1/$2/$3';
