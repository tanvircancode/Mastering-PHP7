<?php
session_name('myapp');
session_start([
    'cookie_domain' => '.localhost:8080',
    'cookie_path' => '/'
]);
$_SESSION['data'] = 'Hello World 123';
echo $_SESSION['data'];
