<?php
/**
 * Created by PhpStorm.
 * User: wunan
 * Date: 2018/8/17
 * Time: 上午10:35
 */
return [

    'fetch'      => PDO::FETCH_OBJ,

    'connection' => [

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'port'      => '3306',
            'database'  => 'rbacphp',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => '',
        ]
    ]
];
