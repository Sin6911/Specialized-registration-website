<?php

require_once('config/database.php');
require_once('models/User.php');
class AccountController{
    private $model;

    function __construct() {
        global $pdo;
        $this->model = new User($pdo);
    }
    function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            session_start();
            $userName = $_POST['username'];
            $pass = $_POST['password'];
            if(empty($userName) || empty($pass)){
                echo"Chua dien kia";
            }else{
                $hashPass = password_hash($pass, PASSWORD_BCRYPT);
                //  var_dump($hashPass);
            // die('ok');
                $user = $this->model->findd($userName, $hashPass);
                if(!$user){
                    $_SESSION['error'] = 'Invalid user or password!!';
                }else{
                    if(password_verify($pass, $user['pass'])){
                        $_SESSION['userId'] = $user["id"];
                        header("Location: ?");
                        //var_dump($hashPass);
                        //die('ok');
                        exit;
                    }else{
                        $_SESSION['error'] = 'Invalid user or password!!';
                    }
                }
            }
        }
        require_once('views/account/login.php');
    }
    function logout(){
        session_start();
        session_destroy();
        header("Location: ?r=/");

    }

    function register(){
        session_start();
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $userName = $_POST['username'];
            $pass = $_POST['password'];
            $confirmPass = $_POST['confirm_password'];
            if($pass != $confirmPass){
                $_SESSION['Error'] = 'hap sai pass';
                header("Location: ?r=register");
                exit;
            }
            $user = $this->model->findd($userName, $pass);
            if(!empty($user)){
                $_SESSION['Error'] = 'tai khoan da dang ky';
                header("Location: ?r=register");
                exit;
            }
            $hashPass = password_hash($pass, PASSWORD_BCRYPT);
            $isSucces = $this->model->addd($userName,$hashPass);
            if( $isSucces){
                header("Location: ?r=login");
                exit;
            }else{
                $_SESSION['Error'] = 'sever is expected error!';
                header("Location: ?r=register");
                exit;
            }
        }
        require_once('views/account/register.php');
    }
}

?>