<?php
include("dbconnection.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $username = mysqli_real_escape_string($mysqli,$_POST['name']);
    $myusername = mysqli_real_escape_string($mysqli,$_POST['username']);
    $mypassword = mysqli_real_escape_string($mysqli,$_POST['password']);

    $sql = "SELECT id, type FROM login
  WHERE username = '$myusername' and passcode = '$mypassword' and fullname = '$username'";

    $result = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1 && $row['type'] == 1) {
        $_SESSION['login_user'] = $username;
        header("location: dashboard.php");
    }elseif ($count == 1 && $row['type'] == 2) {
        $_SESSION['login_user'] = $username;
        header("location: dashboard2.php");
    }
    else {
        $error = "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styling.css?v=<?php echo time(); ?>">
</head>
<body id="login_body">
<div id="login">
    <form class="" method = "post">
        <fieldset>
            <legend>LOGIN</legend>
            <label for="name">Full Names:</label>
            <input type="text" id="name" name="name"><br><br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <div id="error">
                <?php echo @$error;
                ?>
            </div>
            <input type="submit" id="log" value="LOG IN">
        </fieldset>
    </form>
</div>
</body>
</html>
