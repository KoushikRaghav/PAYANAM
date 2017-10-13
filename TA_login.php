<?php
include 'dbconnection.php';
$conn = OpenCon();
include 'TA_login.html';
$username = $_POST['uname'];
$password = $_POST['pwd']; 

$sql = "SELECT TRAVELSID FROM bus_ticket_application.travel_agent WHERE USERNAME = '$username' and PASSWORD = '$password'";
$result = mysql_query($sql) or die(mysql_error());
$numrows = mysql_num_rows($result);

if ($numrows > 0) {
    header("Location:TA_home.html");   
} else {
    echo '<dialog open> <center><b>USERNAME OR PASSWORD IS WRONG</b></center></dialog>';
}
CloseCon($conn);
?>
