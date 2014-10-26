<?php
$dsn = 'mysql:host=localhost;dbname=Bakeshop';
$username = 'bakeuser';
$password = 'bake';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
//use try-throw-catch model to handle PDO exceptions
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include '../errors/db_error_connect.php';
    exit;
}

function display_db_error($error_message) {
    global $app_path;
    include '../errors/db_error.php';
    exit;
}
?>