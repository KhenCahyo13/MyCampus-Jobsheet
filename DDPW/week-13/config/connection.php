<?php
    $host = 'localhost';
    $connectionInfo = array("Database" => "PraktekWeb", "UID" => "SA", "PWD" => "Khencahyo@130402");
    $connection = sqlsrv_connect($host, $connectionInfo);

    // if ($connection) {
    //     echo "Successfully connect to SQL Server";
    // } else {
    //     echo "Failed to connect to SQL Server";
    //     die(print_r(sqlsrv_errors(), true));
    // }
?>