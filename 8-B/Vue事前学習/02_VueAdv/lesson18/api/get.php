<?php
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Methods: GET, POST');
    exit();
}
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=UTF-8');

define('DB_HOST',   'localhost');
define('DB_USER',   'root');
define('DB_PASSWD', 'root');
define('DB_NAME',   'sample_api');

try {
    $dbh = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASSWD);
    $sql = 'SELECT id,name,email,birthday,gender FROM users';
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

header('Content-type: application/json');
echo json_encode($result);