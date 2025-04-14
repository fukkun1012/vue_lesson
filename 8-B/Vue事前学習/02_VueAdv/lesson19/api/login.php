<?php
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('Access-Control-Allow-Origin: http://localhost:8080');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Methods: GET, POST');
    exit();
}
header('Access-Control-Allow-Origin: http://localhost:8080');
header('Content-type: application/json; charset=UTF-8');

define('DB_HOST',   'localhost');
define('DB_USER',   'root');
define('DB_PASSWD', 'root');
define('DB_NAME',   'sample_api');

try {
    $dbh = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASSWD);
    $sql = 'SELECT id,name,email,password,birthday,gender,access_token FROM users WHERE email = :email';
    $sth = $dbh->prepare($sql);
    $sth->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    if(isset($result['password']) && password_verify($_REQUEST['password'], $result['password'])){
        unset($result['password']);
        $result['result'] = true;
    } else {
        $result['result'] = false;
    }
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}

header('Content-type: application/json');
echo json_encode($result);