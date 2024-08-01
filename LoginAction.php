<?php
session_start();
require("Config.php");

$username = mysqli_real_escape_string($con, $_POST["Username"]);
$pass = mysqli_real_escape_string($con, $_POST["Pass"]);

$query = "SELECT * FROM users WHERE Username='$username'";
$result = mysqli_query($con, $query);

if (!$result) {
    die(mysqli_error($con));
}

if (mysqli_num_rows($result) == 0) {
    $_SESSION["ERROR"] = "Invalid username";
    header("Location: login.php");
} else {
    $row = mysqli_fetch_array($result);

    if (!$row["Verified"]) {
        $_SESSION["ERROR"] = "Please verify your email before logging in.";
        header("Location: login.php");
        exit();
    }
    
    $hash1 = hash('sha256', $pass);
    $salt = $row["Salt"];
    $finalPassword = hash('sha256', $hash1 . $salt);
    
    if ($finalPassword == $row["Password"]) {
        if ($row["RoleId"] == 1) {
            $_SESSION["LoggedIN_Admin"] = 1;
            $_SESSION["Username_Admin"] = $username;
            $_SESSION["UserId_Admin"] = $row["Id"];
            header("Location: Admin/index.php");
        } elseif ($row["RoleId"] == 3) {
            $_SESSION["LoggedIN_Advisor"] = 1;
            $_SESSION["Username_Advisor"] = $username;
            $_SESSION["UserId_Advisor"] = $row["Id"];
            header("Location: Advisor/index.php");
        } else {
            $_SESSION["LoggedIN"] = 1;
            $_SESSION["Username"] = $username;
            $_SESSION["UserId"] = $row["Id"];
            header("Location: index.php");
        }
    } else {
        $_SESSION["ERROR"] = "Invalid Password";
        header("Location: login.php");
    }
}
?>
