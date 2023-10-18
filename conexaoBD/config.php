<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DATA', 'progbasica');
    $conn = new MySQLi(HOST, USER, PASS, DATA);

    if(!$conn){
        echo "Falha na conexão com o BD.";
    }

?>