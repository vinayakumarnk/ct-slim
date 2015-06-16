<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$link	=	new MySQLi('us-cdbr-iron-east-02.cleardb.net', 'b3839c81c0b0de', 'f32b049b', 'heroku_5139ce7a09c55ce');

                if(mysqli_connect_errno()){
                    echo 'Failed to connect to MySQL '.mysqli_connect_error();
                }
                else{
                    
                    print_r('conn success');
                }
                
//$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
$listdbtables = array_column(mysqli_fetch_all($link->query('SHOW TABLES')),0);                
?>