<!DOCTYPE html>

<?php 
    include 'searchFunctions.php';
    include 'connectDatabase.php'
?> 

<html>
    <body>
        <?php
            $conn = Connect();
            search($conn); 
            $conn -> close();
        ?>
    </body>
</html>
