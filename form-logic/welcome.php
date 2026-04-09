<!doctype html>
<html>
<head>
<style>
body {
    background-color: black;
}
</style>
</head>
<body>
    <form action="teste.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Uid: <input type="text" name="uid"><br>
    <input type="submit">
</form>

</body>
</html>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Welcome " . $_POST["name"] . "<br>";
    echo "Your Email is " . $_POST["email"] . "<br>";
    echo "Your UID is " . $_POST["uid"];
}
?>
