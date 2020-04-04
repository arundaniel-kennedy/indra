<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['logout'] = 'users/logout';
$route['home'] = 'users/view';
$route['log-in'] = 'users/login';
$route['register'] = 'views/register';
$route['register-user'] = 'users/register';
$route['generate'] = 'users/generate';

$route['homer'] = 'admin/index';

$route['view_events'] = 'admin/view_events';
$route['view_events/(:any)'] = 'admin/view_events/$1';
$route['new_event/(:any)'] = 'admin/new_event/$1';
$route['alter_event/(:any)'] = 'admin/alter_event/$1';

$route['view_news'] = 'admin/view_news';
$route['view_news/(:any)'] = 'admin/view_news/$1';
$route['new_news/(:any)'] = 'admin/new_news/$1';
$route['alter_news/(:any)'] = 'admin/alter_news/$1';

$route['view_gallery'] = 'admin/view_gallery';
$route['view_gallery/(:any)'] = 'admin/view_gallery/$1';
$route['new_gallery/(:any)'] = 'admin/new_gallery/$1';
$route['alter_gallery/(:any)'] = 'admin/alter_gallery/$1';

$route['events']  = 'views/events';
$route['events/(:any)']  = 'views/events/$1';

$route['gallery']  = 'views/gallery';
$route['gallery/(:any)']  = 'views/gallery/$1';

$route['default_controller'] = 'views/index';

$route['index']  = 'views/index';
$route['(:any)'] = 'views/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
