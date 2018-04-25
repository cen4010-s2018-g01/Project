<?php

session_start();

if (!isset($_SESSION["phrase"])){
    $_SESSION["phrase"] = "<br><br><br>";
}

?>

<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="../javascript/adminjava.js"></script>
    </head>
    
    <body class="text-center">
        <br>
        <h2>Administrator Functions</h2>
        <br>
        <a href="../entry.php" class="btn btn-info">SEARCH ENTRY</a>
        <br>
        <br>
        <div class="row text-info">
            <h4 class="col-sm-4"></h4>
            <h4 class="border border-info rounded col-sm-4">

            <?php 

            echo $_SESSION["phrase"]; 
            $_SESSION["phrase"] = "<br><br><br>";

            ?>

            </h4>
            <h4 class="col-sm-4"></h4>
        </div>
        <br>
        <div class="row">
            
            <div class="col-sm-4">
                <form method="post" id="formCreate" onsubmit='return createConfirm()' action="addProduct.php">
                    <h3>Add New Product Listing</h3>
                    <br>
                    <input type="text" name="SKU" placeholder="SKU" class="mb-2 mt-2 ml-2 mr-2" required>
                    <input type="text" name="NPN" placeholder="Part Number" class="mb-2 mt-2 ml-2 mr-2" required>
                    <br>
                    <input type="text" name="keywords" placeholder="Keywords" class="mb-2 mt-2 ml-2 mr-2">
                    <input type="text" name="desc" placeholder="Name / Description" class="mb-2 mt-2 ml-2 mr-2">
                    <br>
                    <input type="text" name="quant" placeholder="Quantity" class="mb-2 mt-2 ml-2 mr-2" required>
                    <input type="text" name="price" placeholder="Price per Unit" class="mb-2 mt-2 ml-2 mr-2" required> 
                    <br>
                    <input type="submit" value="SUBMIT" class="btn btn-success" class="mb-2 mt-2 ml-2 mr-2">
                </form>
            </div>
            
            <div class="col-sm-4">
                <form method="post" id="formRemove" onsubmit='return removeConfirm()' action="removeProduct.php">
                    <h3>Remove Product From Listing</h3>
                    <br>
                    <input type="text" name="SKU" placeholder="SKU" class="mb-2 mt-2 ml-2 mr-2" required>
                    <br><br><br><br><br>
                    <input type="submit" value="SUBMIT" class="btn btn-success" class="mb-2 mt-2 ml-2 mr-2">
                </form>
            </div>
            
            <div class="col-sm-4">
                <form method="post" id="formChange" onsubmit='return changeConfirm()' action="changeProduct.php">
                    <h3>Change Product Quantity</h3>
                    <br>
                    <input type="text" name="SKU" placeholder="SKU" class="mb-2 mt-2 ml-2 mr-2" required>
                    <input type="text" name="quant" placeholder="Quantity" class="mb-2 mt-2 ml-2 mr-2" required>
                    <br><br><br><br><br>
                    <input type="submit" value="SUBMIT" class="btn btn-success" class="mb-2 mt-2 ml-2 mr-2">
                </form>
            </div>
        </div>
    </body>
    
</html>