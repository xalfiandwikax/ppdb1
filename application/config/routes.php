<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'web';
$route['(:any)/'] = 'web/$1';
$route['admin'] = 'web/admin';
$route['user'] = 'web/user';
// $route['login'] = 'auth/login';
// $route['register'] = 'auth/register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
