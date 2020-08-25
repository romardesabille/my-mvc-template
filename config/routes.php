<?php
//Home default page
$route->get('', 'Home/index');


//About page
$route->get('about', 'About/index');


//test page
$route->get('test', 'Test/index');
$route->post('test/create', 'Test/create');


?>