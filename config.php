<?php
    date_default_timezone_set('Asia/Bangkok');
    $config['title'] = 'Moon';


    // Database Connection
    $config['database']['host'] = 'localhost';
    $config['database']['user'] = 'root';
    $config['database']['pass'] = '';
    $config['database']['name'] = 'datashop';
    $conn = mysqli_connect($config['database']['host'], $config['database']['user'], $config['database']['pass'], $config['database']['name']);
