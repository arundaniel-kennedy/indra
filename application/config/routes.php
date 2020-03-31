<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['logout'] = 'users/logout';
$route['home'] = 'users/view';
$route['homer'] = 'admin/index';

$route['user/generate'] = 'users/generate';

$route['admin/events/(:any)'] = 'admin/events/$1';
$route['admin/news/(:any)'] = 'admin/news/$1';
$route['admin/gallery/(:any)'] = 'admin/gallery/$1';

$route['events']  = 'views/events';
$route['events/(:any)']  = 'views/events/$1';

$route['gallery']  = 'views/gallery';
$route['gallery/(:any)']  = 'views/gallery/$1';

$route['default_controller'] = 'views/index';

$route['index']  = 'views/index';
$route['(:any)'] = 'views/view/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
