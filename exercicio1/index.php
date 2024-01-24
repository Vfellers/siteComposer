<?php

require_once __DIR__."/../vendor/autoload.php";

// Create a connection, once only.
$config = [
            'driver'    => 'mysql', // Db driver
            'host'      => 'localhost',
            'database'  => 'entra21',
            'username'  => 'root',
            'password'  => 'feller123',
            'charset'   => 'utf8' // Optional
        ];

        $connection = new \Pixie\Connection('mysql', $config);
        $qb = new \Pixie\QueryBuilder\QueryBuilderHandler($connection);
        
        $query = $qb->table('pdv_produtos')->where('id', '=', '4');
        

        echo ("<pre>");

        var_dump($query->get());
        
        echo ("</pre>");


    