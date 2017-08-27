<?php
require_once 'lib/class.user.php';
$user = new USER();

if(empty($_GET['id']) && empty($_GET['code'])) {
    $user->redirect('index.php');
}

if(isset($_GET['id']) && isset($_GET['code'])) {
    $id = base64_decode($_GET['id']);
    $code = $_GET['code'];

    $statusY = "Y";
    $statusN = "N";

    $stmt = $user->runQuery("SELECT userid, userstatus FROM users WHERE userid=:userid AND token = :code LIMIT 1");
    $stmt->execute(array(":userid"=>$id,":code"=>$code));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount() > 0)
    {
        if($row['userstatus'] == $statusN)
        {
            $stmt = $user->runQuery("UPDATE users SET userStatus=:status WHERE userid=:userid");
            $stmt->bindparam(":status",$statusY);
            $stmt->bindparam(":userid",$id);
            $stmt->execute();

            $msg = "
             <div class='alert alert-success'>
       <button class='close' data-dismiss='alert'>&times;</button>
       <strong>WoW !</strong>  Your Account is Now Activated : <a href='index.php'>Login here</a>
          </div>
          ";
        } else {
            $msg = "
             <div class='alert alert-error'>
       <button class='close' data-dismiss='alert'>&times;</button>
       <strong>sorry !</strong>  Your Account is allready Activated : <a href='index.php'>Login here</a>
          </div>
          ";
        }
    } else {
        $msg = "
         <div class='alert alert-error'>
      <button class='close' data-dismiss='alert'>&times;</button>
      <strong>sorry !</strong>  No Account Found : <a href='register.php'>Signup here</a>
      </div>
      ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cutie Foodie - Verify Account</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body id="login">
<div class="container">
    <?php if(isset($msg)) { echo $msg; } ?>
</div> <!-- /container -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>