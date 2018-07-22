<?php
 
return [
    
    'mysql' => array(
        'driver'    => 'mysql',
        'host'      => '127.0.0.1',
        'database'  => 'laravel',
        'username'  => 'root',
        'password'  => 'toor',
        'port'      => '3306',
        'file_name' => 'dump_mysql.sql'  // name of the dump file
    ),
    
    'email' => array (
        'address' => 'joy@bigdatalogin.com'
    ),
//    'mysql_EC2' => array(
//        'driver'    => 'mysql',
//        'host'      => '127.0.0.1:13306',
//        'database' => 'EC2_website',
//        'username' => 'root',
//        'password' => 'xxxxxxxxxxxxxxxx',
//        'charset'   => 'utf8',
//        'collation' => 'utf8_unicode_ci',
//        'prefix'    => '',
//    )
];