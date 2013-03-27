<?php
require_once 'vendor/autoload.php';

Gnix_Db_Connection::setInfo(
    'master',
    array(
        'host'   => 'localhost',
        'port'   => '3306',
        'dbname' => 'test',
        'user'   => 'root',
        'pass'   => '',
        'attributes' => array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        )
    )
);
