<?php
session_start();
if(isset($_POST['submit_login'])){
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        require 'database.php';
        $db = connection();
        $sql = 'SELECT u_name, u_firstname, u_password FROM users WHERE u_login = :u_login';
        $request = $db->prepare($sql);
        $request->bindValue(':u_login', $login);
        $request->execute();
        if($result = $request->fetch(PDO::FETCH_OBJ)){
            if(password_verify($password, $result->u_password)){
                $_SESSION['name'] = $result->u_name;
                $_SESSION['firstname'] = $result->u_firstname;
                header('location: login_ok.php');
            }else{ 
                echo 'bad identifiants';
            }
        } 
    }
}