<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
die("Connection Failed:". mysqli_connect_error());
}
if(isset($_POST['save']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$message = $_POST['message'];

/*$sql_query="INSERT INTO entry_details(name,'email',subject,address,'contact',message)
VALUES('$name','$email ','$subject','$address','$contact','$message')";
if(mysqli_query($conn,$sql_query))
{
    echo "New Details Entry sucessfully !";
}
else{
echo "Error: "  . $sql="" . mysqli_error($conn);
//echo "Error";
}
mysqli_close($conn);
}*/
$sql_query = "INSERT INTO entry_details (name, email, subject, address, contact, message)
VALUES ('$name', '$email', '$subject', '$address', '$contact', '$message')";

if(mysqli_query($conn, $sql_query)) {
    echo "Your Message has been send successfully to developer he will contact you Soon!";
} else {
    echo "Error: " . $sql_query . mysqli_error($conn);
}

mysqli_close($conn);
}
?>