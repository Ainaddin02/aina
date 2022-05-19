<?php
$username = 'root';
$password = 'root';
$dsn = 'mysql:host=localhost; dbname=mydb';

try {

  $conn = new PDO($dsn, $password, $db_name);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Fail to connect to the database ".$e->getMessage();

}

if($conn){
    echo "connected";
}else {
    echo "not connected";
}

?>