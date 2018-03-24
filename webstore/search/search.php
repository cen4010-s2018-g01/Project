<!DOCTYPE html>

<?php 
    include 'searchFunctions.php';
    include '../connectDatabase.php'
?> 

<html>
    <body>
        <?php
            $conn = Connect();
            Search($conn); 
            $conn -> close();
        ?>
    </body>
</html>
