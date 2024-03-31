
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if($conn){
    echo "connected;;;;;;;;;;;;;;;;;;;;;;;;;;;;";
}else
{
die("Connection Failed:". mysqli_connect_error());
}

?>