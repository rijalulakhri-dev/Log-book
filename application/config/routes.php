<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['login'] = 'C_auth/login';
$route['tambah_pengguna'] = 'C_admin/index';
$route['daftar_pengguna'] = 'C_admin/list_pengguna';

$route['logbook'] = 'C_logBook/index';


$route['default_controller'] = 'C_home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
