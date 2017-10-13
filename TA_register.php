
 <?php 
 include 'dbconnection.php';
$conn = OpenCon();
 include 'TA_register.html';
     $Tname = $_POST['travelsname'];
     $Tcontact = $_POST['contactnumber'];
      $TAddr = $_POST['address'];
      $Tmail= $_POST['email'];
      $Tun = $_POST['un'];
      $Tnp = $_POST['npwd'];
      $Tcp = $_POST['cpwd'];
      $ID = rand(1111,1199);
      if ( $Tnp == $Tcp ) {
        $Password = $_POST['npwd'];
        $sql = "INSERT INTO travel_agent VALUES ('TA$ID','$Tname','$Tcontact','$TAddr','$Tmail','$Tun','$Password');";
        if ($conn->query($sql) == TRUE) {
            echo "<br/><dialog open><center><b>ACCOUNT CREATED<br> ID: TA$ID</center></b></dialog>";
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