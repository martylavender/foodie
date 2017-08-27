<?php

session_start();
require_once 'lib/class.user.php';

$reg_user = new USER();

if($reg_user->isloggedin()!="") {
    $reg_user->redirect('home.php');
}

if(isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $code = md5(uniqid(rand()));

    $stmt = $reg_user->runQuery("SELECT * FROM users WHERE username = :username");
    $stmt->execute(array(":username"=>$username));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->rowCount() > 0) {
        $msg = "
            <div class='alert alert-danger'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Sorry!</strong> that email already exists. Please try again.
            </div>    
        ";
    } else {
        if($reg_user->register($username, $password, $code)) {
            $id = $reg_user->lastID();
            $key = base64_encode($id);
            $id = $key;

            $message = "
                Hello $username, <br/><br/>
                Welcome to The Cutie Foodie! <br/>
                To complete the registration and access your account, please click the link below. <br/>
                <a href='http://www.cutiefoodie.io/verify.php?id=$id&code=$code'>Verify your account.</a><br/>
                Thank you,<br/>
                The Cutie Foodie
            ";
        } else {
            echo "Sorry, Query could not execute";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cutie Foodie - Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/site.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="headerwell" class="well">
            Login
        </div>
        <?php if(isset($msg)) echo $msg; ?>
        <div id="formcontainer" class="container">
            <form class="form-signin" method="post">
                <div>
                    <label for="username">Username</label>
                    <input type="email" class="form-control" placeholder="Email Address" name="username">
                </div><br/>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div><br/>
                <div>
                    <button class="btn btn-primary pull-right" type="submit" name="register">Register</button>
                </div><br/><br/>
            </form>
            <div>
                <a class="pull-right" href="login.php">Have an account? Click here!</a>
            </div>
        </div>

    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
