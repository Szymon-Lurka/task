<?php
session_start();

$text = $_POST['text'];

require_once "connect.php";

$connect = @new mysqli($host,$db_user,$db_password,$db_name);
if ($connect->connect_errno!=0)
{
    echo "Error: ".$connect->connect_errno;
}
else {
    $sql = "SELECT * FROM uzytkownicy";
    if($result = @$connect->query($sql))
    {
        $paragraphs = $result->num_rows;
        if($paragraphs>0)
        {
            $sqlC = "UPDATE uzytkownicy SET paragraph='$text'";
            @$connect->query($sqlC);
            header('Location: panel.php');
            $_SESSION['updated'] = true;
        }
    }

}

$connect->close();

?>