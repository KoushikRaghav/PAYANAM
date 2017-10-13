
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           function OpenCon()
            {
             $dbhost="Localhost";
             $dbuser="root";
             $dbpass="Km1309mK";
             $db="bus_ticket_application";
             $conn= new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection failed: %s\n".$conn.error);
             return $conn;
            }
           function CloseCon($conn)
           {
            $conn->close();
           }
        ?>
    </body>    
</html>
