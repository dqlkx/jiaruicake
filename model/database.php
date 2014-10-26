<?php
$dsn = 'mysql:host=jiaruicake.c05oeszhyenp.us-west-2.rds.amazonaws.com;port=3306;dbname=Bakeshop';
$username = 'jiarui';
$password = 'liukaixi59153270';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
//use try-throw-catch model to handle PDO exceptions
try {
    $db = new PDO($dsn, $username, $password);
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
