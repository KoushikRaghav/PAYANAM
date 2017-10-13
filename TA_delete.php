<?php

include 'dbconnection.php';
$conn = OpenCon();
include 'TA_delete.html';
$id = $_POST['id'];
$sql = "DELETE FROM `bus_ticket_application`.`schedule` WHERE `schedule`.`SCHEDULE_ID` = '$id';";
 if ($conn->query($sql) == TRUE) {
    echo "<br/><dialog open><center>BUS DELETED</center></b></dialog>";
    echo "<center><p><br><br><br>You will be redirected in 3 seconds</p>
        <script>
            var timer = setTimeout(function() {
            window.location='TA_Home.html'
        }, 3000);
        </script></center>";
} else {
    echo "<dialog open><center><b>SCHEDULE ID IS WRONG</center></b></dialog>";
}
CloseCon($conn);
   ?>
