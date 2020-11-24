<?php
session_start();

$_SESSION['global'] = true;

require_once 'connect.php';

$connect = @new mysqli($host,$db_user,$db_password,$db_name);
if ($connect->connect_errno!=0)
{
    echo "Error: ".$connect->connect_errno;
}
else {
    if($result = @$connect->query(
        "SELECT * FROM uzytkownicy"
    ))
    {
        $row = $result->fetch_assoc();
         $_SESSION['text'] = $row['paragraph'];
        $result->close();
        $connect->close();
        header('Location: main.php');
    }
}
?>