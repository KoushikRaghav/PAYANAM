<?php

include 'dbconnection.php';
$conn = OpenCon();
include 'TA_display.html';
$id = $_POST['id'];
$sql = "SELECT SCHEDULE_ID, TRAVELS_NAME, BUS_NO, FROM_PLACE, TO_PLACE, DOJ, DEPARTURE_TIME, ARRIVAL_TIME, BUS_TYPE, NO_OF_SEATS_AVAILABLE FROM bus_ticket_application.schedule WHERE SCHEDULE_ID='$id'";
$result = $conn->query($sql);
   
   if( $result->num_rows > 0) {
   
        while( $row = $result->fetch_assoc() ) {
            echo '<center>';
            echo"<style>
                table, th, td {
                border: 1px solid black;
                }
            </style>";
            echo "<table><tr><th>ID</th>  <th>TRAVELS NAME</th> <th>BUS NO</th> <th>FROM</th> <th>TO</th> <th>DOJ</th> <th>DEPT TIME</th> <th>ARRI TIME</th> <th>TYPE</th> <th>SEATS AVALAIBLE</th> </tr>";
            echo "<tr><td align='center'> {$row['SCHEDULE_ID']}  </td> ".
                 "<td align='center'> {$row['TRAVELS_NAME']} </td> ".
                 "<td align='center'> {$row['BUS_NO']} </td> ".
                 "<td align='center'> {$row['FROM_PLACE']} </td> ".
                 "<td align='center'> {$row['TO_PLACE']} </td> ".
                 "<td align='center'> {$row['DOJ']} </td> ".
                 "<td align='center'> {$row['DEPARTURE_TIME']} </td> ".
                 "<td align='center'> {$row['ARRIVAL_TIME']} </td> ".
                 "<td align='center'> {$row['BUS_TYPE']} </td> ".
                 "<td align='center'> {$row['NO_OF_SEATS_AVAILABLE']} </td> ";
            echo '</center>';
        } 
   }
   else {
   echo '<dialog open><center><b>NO DATA FOUND</center></b></dialog>';
   }   
   
   CloseCon($conn);
?>
