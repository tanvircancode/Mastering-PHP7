<?php
session_start();
$_SESSION['data'] = 'Hello World';
echo $_SESSION['data'];