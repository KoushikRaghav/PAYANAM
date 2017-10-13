<?php

include 'dbconnection.php';
include 'TA_fp.html';
$conn = OpenCon();
$uname = $_POST['uname'];
$Tnp = $_POST['npwd'];
$Tcp = $_POST['cpwd'];
if ( $Tnp == $Tcp ) {
    $Password = $_POST['npwd'];
    $sql = "UPDATE travel_agent SET PASSWORD='$Password' WHERE USERNAME='$uname';";
    if ($conn->query($sql) == TRUE) {
        echo "<br/><dialog open><center><b>PASSWORD CHANGED!!!</center></b></dialog>";
        echo "<script>
        var timer = setTimeout(function() {
            window.location='TA_login.html'
        }, 3000);
        </script>";
    } else {
        echo "<dialog open><center>FILL ALL THE DETAILS</center></b></dialog>";
    }
} else {
    echo "<dialog open><center>NEW PASSWORD AND CONFIRM PASSWORD <br>MUST BE SAME</center></b></dialog>";
    }
CloseCon($conn);
?>

