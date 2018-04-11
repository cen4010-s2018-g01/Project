<?php

session_start();

if ($_SESSION['userAuthorized'] !== TRUE || !isset($_SESSION['userAuthorized'])){
    header('Location: index.php');
    exit();
}

?>


<!DOCTYPE html>

<html>
    
    <script>
        
        function redirect(){
            var form = document.getElementById('searchForm');
            var parameter = form.elements.searchParam.value;
            var category = form.elements.searchCategory.value;
            var extra = "?param=" + parameter + "&category=" + category;
            window.location = "search/search.php" + extra;
            return false;
        }
    
    </script>
    
    <body>
        
        <?php
            echo "Logged in as " . strtoupper($_SESSION["firstname"]) . " " . strtoupper($_SESSION["lastname"]) . "<br><br>";
            echo
                "<a href='index.php'>LOG OUT</a> and return to the Log In screen<br>";
        ?>
        <br>
        <form id= "searchForm" onsubmit = "return redirect()">
            
            Search:
            <input type="text" name="searchParam">
            <select name="searchCategory">
                <option value="name">Name</option>
                <option value="newark">Newark Part Number</option>
                <option value="sku">SKU</option>
                <option value="key">Keyword</option>
            </select>
            <br>
            <input type="submit" value="Search">  
            
        </form>
        
    </body>

</html>