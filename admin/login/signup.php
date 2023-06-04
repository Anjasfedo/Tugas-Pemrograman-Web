<?php
session_start();
include("../../include/db.php");

if(isset($_SESSION['username'])){
    header('location:../');
}

$message = "";

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    $query = "SELECT * FROM admin_users WHERE user_id='$email'";
    $run = mysqli_query($db, $query);
    $result = mysqli_fetch_array($run);
    
    if($result){
        $message = "Email is already registered.";
    } else {
        $query = "INSERT INTO admin_users (username, user_id, user_pass) VALUES ('$username', '$email', '$password')";
        $run = mysqli_query($db, $query);
    
        if($run){
            $message = "Account successfully created.";
        } else {
            $message = "Failed to create the account.";
        }
    }
    
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta
            name="author"
            content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>Register</title>
        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
        <link href="../assets/dist/css/bootstrap.css" rel="stylesheet">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <link href="../css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="form-signin">
            <form class="form-signin" action="" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Create an Account</h1>
                <label for="inputUsername" class="sr-only">Username</label>
                <input
                    type="text"
                    id="inputUsername"
                    name="username"
                    class="form-control"
                    placeholder="Username"
                    required="required"
                    autofocus="autofocus">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input
                    type="email"
                    id="inputEmail"
                    name="email"
                    class="form-control"
                    placeholder="Email address"
                    required="required">
                <label for="inputPassword" class="sr-only">Password</label>
                <input
                    type="password"
                    id="inputPassword"
                    name="password"
                    class="form-control"
                    placeholder="Password"
                    required="required">
                <input
                    type="submit"
                    name="register"
                    class="btn btn-lg btn-primary btn-block"
                    value="Register">
            </form>
            <a href="index.php">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In"></a>
            <h4><?php echo $message; ?></h4>
        </div>
    </body>
</html>