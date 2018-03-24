<?php
    session_start();

    if (!isset($_SESSION['userAuthorized'])){
        header('Location: index.php');
        exit();
    }

?>


<!DOCTYPE html>

<html>
    <head>
    </head>
    <body>
        <form action="search/search.php" method="post">
            Search:
            <input type="text" name="searchParam">
            <select name="searchType">
                <option value="Name">Name</option>
                <option value="Newark">Newark Part Number</option>
                <option value="SKU">SKU</option>
                <option value="key">Keyword</option>
            </select>
            <br>
            <input type="submit" value="Search">
        </form>
    </body>

</html>