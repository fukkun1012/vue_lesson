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

$request = $_REQUEST;
try {
    $dbh = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASSWD);
    $sql = 'UPDATE users SET name=:name,email=:email,birthday=:birthday,gender=:gender,updated=:updated WHERE id=:id';
    $sth = $dbh->prepare($sql);
    $sth->bindParam(':id', $request['id'], PDO::PARAM_INT);
    $sth->bindParam(':name', $request['name'], PDO::PARAM_STR);
    $sth->bindParam(':email', $request['email'], PDO::PARAM_STR);
    $sth->bindValue(':birthday', $request['birthday'], PDO::PARAM_STR);
    $sth->bindParam(':gender', $request['gender'], PDO::PARAM_INT);
    $sth->bindValue(':updated', date('Y-m-d H:i:s'), PDO::PARAM_STR);
    $result = $sth->execute();
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

if($result > 0) {
    header('Content-type: application/json');
    echo json_encode($result);
} else {
    throw new Exception('test');
}
