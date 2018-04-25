<?php

session_start();

include_once('universals/links.php');
include_once('auth/allowed.php');
include_once('admin.php');

CheckAllowed();

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
    
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="universals/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body class="text-center">
        
        <?php
            CreateLinksEntry(FALSE, TRUE, TRUE);
        ?>
        <br>
        <form id= "searchForm" onsubmit = "return redirect()">
            
            Search:
            <input type="text" name="searchParam" placeholder="Search term">
            <select name="searchCategory">
                <option value="name">Name</option>
                <option value="newark">Newark Part Number</option>
                <option value="sku">SKU</option>
                <option value="key">Keyword</option>
            </select>
            <br><br>
            <input type="submit" class="btn btn-success" value="SEARCH">
            <br><br>
            To look at the entire inventory, leave the search box blank, <br> and press the SEARCH button.
            
        </form>
        
        <?php Admin() ?>
        
    </body>

</html>