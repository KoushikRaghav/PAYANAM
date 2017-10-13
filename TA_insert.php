<?php

include 'dbconnection.php';
 $conn = OpenCon();
 include 'TA_insert.html';
 $Tname = $_POST['travelsname'];
 $busno = $_POST['busnumber'];
 $noofseats = $_POST['seatnumbers'];
 $from = $_POST['from'];
 $to = $_POST['to'];
 $doj = $_POST['date'];
 $dept = $_POST['dept'];
 $arr = $_POST['arr'];
 $type = $_POST['type'];
 $no = rand(101,199);
 $sql = "INSERT INTO schedule VALUES ('SID$no','$Tname','$busno','$from','$to','$doj','$dept','$arr','$type','$noofseats','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE','AVAILABLE');";
     if ($conn->query($sql) == TRUE) {
    echo "<br/><dialog open><center><b> BUS INSERTED <br> SCHEDULE ID IS <i>SID$no</i></center></b></dialog>";
    echo "<center><p><br><br><br><br>You will be redirected in 5 seconds</p>
    <script>
        var timer = setTimeout(function() {
            window.location='TA_Home.html'
        }, 5000);
    </script></center>";
} else {
    echo "<dialog open><center><b>FILL ALL THE DETAILS</center></b></dialog>";
}
CloseCon($conn);
?>

