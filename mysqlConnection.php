<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $server="localhost";
// $username="root";
// $password="root@123";
// $con=mysql_connect($server,$username,$password);
// if(!$con){
//     die("connection to this database failed due to".mysql_connect_error());
// }echo "success connecting to db";



$servername = "localhost";
$username = "root";
$password = "root@123";
$DbName="MYSQLDB";

$conn = new mysqli($servername, $username, $password,$DbName);




// $sql = "INSERT INTO empl(first_name ,last_name ,email)VALUES('gasd','yadav','ry@gmail.com')";
// $sql .= "INSERT INTO empl(first_name ,last_name ,email)VALUES('sd','pandey','rp@gmail.com')";
// $sql .= "INSERT INTO empl(first_name ,last_name ,email)VALUES('sd','singh','gs@gmail.com')";
// $sql = "INSERT INTO empl (first_name ,last_name ,email) VALUES('dd','jaiswal','aj@gmail.com'),
// ('tramu','jaifswal','aj@fgmail.com')

// ";


// $sql="DELETE FROM empl WHERE id=10";
$sql="UPDATE empl 
SET first_name='tanish'
WHERE id=11
";

if ($conn->multi_query($sql) === TRUE) {
    $last_id=$conn->insert_id;
    echo "new record successfully .. ";
} else {
  echo "error $sql " . $conn->error;
}




$conn->close();
?>