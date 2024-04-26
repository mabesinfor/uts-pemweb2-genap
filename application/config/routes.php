<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth Routes
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

// Jadwal Routes
$route['jadwal'] = 'jadwal/index';
$route['jadwal/create'] = 'jadwal/create';
$route['jadwal/read/(:num)'] = 'jadwal/read/$1';
$route['jadwal/update/(:num)'] = 'jadwal/update/$1';
$route['jadwal/store'] = 'jadwal/store';
$route['jadwal/edit/(:num)'] = 'jadwal/edit/$1';
$route['jadwal/delete/(:num)'] = 'jadwal/delete/$1';

// JadwalMahasiswa Routes
$route['jadwalmahasiswa'] = 'jadwalmahasiswa/index';
$route['jadwalmahasiswa/create'] = 'jadwalmahasiswa/create';
$route['jadwalmahasiswa/read/(:num)'] = 'jadwalmahasiswa/read/$1';
$route['jadwalmahasiswa/update/(:num)'] = 'jadwalmahasiswa/update/$1';
$route['jadwalmahasiswa/store'] = 'jadwalmahasiswa/store';
$route['jadwalmahasiswa/edit/(:num)'] = 'jadwalmahasiswa/edit/$1';
$route['jadwalmahasiswa/delete/(:num)'] = 'jadwalmahasiswa/delete/$1';

// Mahasiswa Routes
$route['mahasiswa'] = 'mahasiswa/index';
$route['mahasiswa/create'] = 'mahasiswa/create';
$route['mahasiswa/read/(:num)'] = 'mahasiswa/read/$1';
$route['mahasiswa/update/(:num)'] = 'mahasiswa/update/$1';
$route['mahasiswa/store'] = 'mahasiswa/store';
$route['mahasiswa/edit/(:num)'] = 'mahasiswa/edit/$1';
$route['mahasiswa/delete/(:num)'] = 'mahasiswa/delete/$1';

// Matakuliah Routes
$route['matakuliah'] = 'matakuliah/index';
$route['matakuliah/create'] = 'matakuliah/create';
$route['matakuliah/read/(:num)'] = 'matakuliah/read/$1';
$route['matakuliah/update/(:num)'] = 'matakuliah/update/$1';
$route['matakuliah/store'] = 'matakuliah/store';
$route['matakuliah/edit/(:num)'] = 'matakuliah/edit/$1';
$route['matakuliah/delete/(:num)'] = 'matakuliah/delete/$1';

// User Routes
$route['user'] = 'user/index';
$route['user/create'] = 'user/create';
$route['user/read/(:num)'] = 'user/read/$1';
$route['user/update/(:num)'] = 'user/update/$1';
$route['user/store'] = 'user/store';
$route['user/edit/(:num)'] = 'user/edit/$1';
$route['user/delete/(:num)'] = 'user/delete/$1';