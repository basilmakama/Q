<?php
/**
 * Created by PhpStorm.
 * User: 1712000
 * Date: 23/03/2018
 * Time: 15:18
 */
include ("connection.php");
if (empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
echo $username, $password;

    $sql = "SELECT * FROM users ";

    $result = $db->query($sql);
    echo "<br>".$result->num_rows;

    if ($result->num_rows > 0) {
        header("location: home.php");
    } else {
        echo "Incorrect username or password.";
    }

}

?>