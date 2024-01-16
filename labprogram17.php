<?php
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['name'];
    $age=$_POST['age'];
    if (empty($username) || !preg_match("/^[a-zA-Z ]*$/", $username) || empty($age) || !preg_match("/^[0-9]*$/", $age)) {
        echo "Enter Valid Input";
    }
    else{
        echo "<h2>Input is valid:</h2>";
        echo "Username: $username<br>";
        echo "AGE: $age";
        echo "<br><br>";
    }
}
?>
<html>
    <head>
        <title>Validate  input</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="name">USERNAME: <input type="text" name="name" id=""></label><br><br>
            <label for="name">AGE: <input type="number" name="age" id=""></label><br><br>
            <input type="submit" value="Validate" name="submit">
        </form>
    </body>
</html>