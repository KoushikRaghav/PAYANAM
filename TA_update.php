<?php
    
    include 'dbconnection.php';
    $conn = OpenCon();
    include 'TA_update.html';
    
    $id = $_POST['id'];
    $busno = $_POST['busnumber'];
    $noofseats = $_POST['seatnumbers'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $doj = $_POST['date'];
    $dept = $_POST['dept'];
    $arr = $_POST['arr'];
    $type = $_POST['type'];
 
    $sql = "UPDATE schedule SET BUS_NO='$busno', NO_OF_SEATS_AVAILABLE='$noofseats', FROM_PLACE='$from', TO_PLACE='$to', DOJ='$doj', DEPARTURE_TIME='$dept', ARRIVAL_TIME='$arr', BUS_TYPE='$type' WHERE SCHEDULE_ID='$id';" ;
    
    if ($conn->query($sql) == TRUE) {
        echo "<br><dialog open><center><b> UPDATED SCHEDULE $id </center></b></dialog>";
        echo "<center><p><br><br><br>You will be redirected in 3 seconds</p>
        <script>
            var timer = setTimeout(function() {
            window.location='TA_Home.html'
        }, 3000);
        </script></center>";
    } else {
        echo "<dialog open><center><b>You are accessible to this Schedule Id</center></b></dialog>";
    }
    
    CloseCon($conn);
    
?>