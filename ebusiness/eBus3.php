<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reciept</title>
    </head>
    <body>
        <h4>RECIEPT</h4>
        
        <?php
        //Echo session variables that were set on a previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
     </body>
</html>
