<!DOCTYPE html>

<?php 
    include 'searchPrimary.php';
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
