<?php
$servername="localhost";
$username="root";
$password="";
$dbname="kfc";

$conn = mysqli_connect($servername, $username,$password,$dbname);
if (!$conn) {
die("Could Not Connect MySQL Server:" .mysql_error());
}
else {
echo("<h1>Welcome to KFC!</h1>");
}
?>