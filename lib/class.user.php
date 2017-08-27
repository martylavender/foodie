<?php

require_once 'database.php';

class USER {

    private $conn;

    public function __construct() {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql) {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function lasdID() {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }

    public function register($username, $password ,$code) {
        try
        {
            $password = md5($password);
            $stmt = $this->conn->prepare("INSERT INTO users (username, password, token) 
                                                VALUES(:username, :password, :active_code)");
            $stmt->bindparam(":username",$username);
            $stmt->bindparam(":password",$password);
            $stmt->bindparam(":active_code",$code);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function login($username, $password) {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = :username ");
            $stmt->execute(array(":username=>$username"));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1) {
                if($userRow['userstatus'] == "Y") {
                    if($userRow['password'] == md5($password)) {
                        $_SESSION['usersession'] = $userRow['userID'];
                        return true;
                    } else {
                        header('Location:index.php?error');
                        exit;
                    }
                } else {
                    header ('Location:index.php?inactive');
                    exit;
                }
            } else {
                header ('Location: index.php?error');
                exit;
            }
        } catch(PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    public function isloggedin() {
        if(isset($_SESSION['userSession'])) {
            return true;
        } else {
            return null;
        }
    }

    public function redirect($url) {
        header ('Location: $url');
    }

    public function logout() {
        session_destroy();
        $_SESSION['usersession'] = false;
    }

    function sendemail($email, $message, $subject) {
        require_once ('class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465;
        $mail->AddAddress($mail);
        $mail->Username="succeededcoma@gmail.com";
        $mail->Password="Jnm21791480@@";
        $mail->SetFrom("noreply@cutiefoodie.com");
        $mail->AddReplyTo("noreply@cutiefoodie.com");
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        $mail->Send();
    }
}

?>






















