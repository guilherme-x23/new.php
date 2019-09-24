<?php
$con = @mysqli_connect('localhost','root','','minhaloja',3306);
if(mysqli_connect_error()) {
    echo "<b>erro na conexão<b>";
    exit;
}
$con->query("SET NAMES UTF8");

?>