<?php

session_start();

include_once('encode.php');

?>

<!DOCTYPE html>
<html>

    <body>
        <form method= 'post' action='generate.php'>
            <input type='text' name='toCode'>
        </form>
        <br>
        <?php 
            if (isset($_POST['toCode']) && $_POST['toCode'] !== ""){
                echo "Encoded: " . Encode($_POST['toCode']);
            }?>
    </body>
    
</html>