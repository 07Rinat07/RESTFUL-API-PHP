<?php
header('Content-type: json/application');
require 'connect.php';
require 'functions.php';

$type = $_GET['q'];

if ($type === 'posts') {
    getPosts($connect);
}


