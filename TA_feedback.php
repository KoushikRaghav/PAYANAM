<?php

include 'dbconnection.php';
 $conn = OpenCon();
 include 'feedback.html';
 $Name = $_POST['name'];
 $feedback = $_POST['feedback'];
 $sql = "INSERT INTO feedback VALUES ('$Name','$feedback');";
 if ($conn->query($sql) == TRUE) {
    echo "<br/><dialog open><center><b>Thanks for your feedback!!!</center></b></dialog>";
    echo"
    <script>
        var timer = setTimeout(function() {
            window.location='about.html'
        }, 3000);
    </script>";
 }
 else
 {
     echo"
    <script>
        var timer = setTimeout(function() {
            window.location='about.html'
        }, 3000);
    </script>";
 }
 CloseCon($conn);
 ?>