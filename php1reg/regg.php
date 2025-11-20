<!DOCTYPE html>
<html>
<head>
    <title>Simple Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">
    Name: <br>
    <input type="text" name="name"><br><br>

    Email: <br>
    <input type="email" name="email"><br><br>

    Password: <br>
    <input type="password" name="password"><br><br>

    <button type="submit">Register</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "<h3>Registration Successful</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
}
?>

</body>
</html>


