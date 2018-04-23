<!DOCTYPE html>

<html>

    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    
    <body class="text-center">
        <br>
        <h2>New Account Creation</h2>
        <br>
        <form method="post" action="newuser.php">
            <input type="submit" class="btn btn-success mb-2 mt-2">
            <br>
            <input type="text" name="newUser" placeholder="Username" class="mb-2 mt-2 ml-2 mr-2" required>
            <input type="password" name="newPass" placeholder="Password" class="mb-2 mt-2 ml-2 mr-2" required>
            <br>
            <input type="text" name="firstName" placeholder="First Name" class="mb-2 mt-2 ml-2 mr-2" required>
            <input type="text" name="lastName" placeholder="Last Name" class="mb-2 mt-2 ml-2 mr-2" required>
            <br>
            <input type="number" name="znumber" placeholder="Z Number" class="mb-2 mt-2 ml-2 mr-2" required>
        </form>
        <br>
        <form action="../index.php">
            <input type="submit" value="Return to Log In" class="btn btn-info">
        </form>
    </body>

</html>