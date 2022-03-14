<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_USERS', 'users');
    define('DB_MESSAGES', 'messages');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_USERS);

    

    $conn2 = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_MESSAGES);
?>