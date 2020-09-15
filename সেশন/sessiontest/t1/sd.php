<?php
session_name('myapp');
session_start([
    'cookie_domain' => '.localhost:8080',
    'cookie_path' => '/'
]);
echo $_SESSION['data'];
echo "<br/>";
echo $_SESSION['data2'];