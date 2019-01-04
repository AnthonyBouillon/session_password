<?php
session_start();
require 'database.php';
$error = array();
$count_error = 0;
// Si le formulaire est soumis,
if(isset($_POST['submit_register'])){
    if(!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
        if(strlen($_POST['name']) > 255){
            $error['tooLong_n'] = 'Limitation à 255 caractères';
            $count_error++;
        }else{
            if(preg_match('/^[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]+$/', $_POST['name'])){
                $name = $_POST['name'];
            }else{
                $count_error++;
            }
        }
        if(strlen($_POST['firstname']) > 255){
            $error['tooLong_f'] = 'Limitation à 255 caractères';
            $count_error++;
        }else{
            if(preg_match('/^[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]+$/', $_POST['firstname'])){
                $firstname = $_POST['firstname'];
            }else{
                $count_error++;
            }
        }
        if(strlen($_POST['email']) > 255){
            $error['tooLong_e'] = 'Limitation à 255 caractères';
            $count_error++;
        }else{
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $db = connection();
                $sql = 'SELECT COUNT(u_email) as "number_email" FROM users WHERE u_email = :u_email';
                $request = $db->prepare($sql);
                $request->bindValue(':u_email', $_POST['email']);
                $request->execute();
                $result = $request->fetch(PDO::FETCH_OBJ);
                    if($result->number_email == 0){
                        $email = $_POST['email'];
                    }else{
                        $count_error++;
                        $error['already_email'] = 'Votre email existe déja';
                    }
            }else{
                $count_error++;
            }
        }
        if(strlen($_POST['login']) > 255){
            $error['tooLong_l'] = 'Limitation à 255 caractères';
            $count_error++;
        }else{
            if(preg_match('/^[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü0-9 -_]+$/', $_POST['login'])){
                $db = connection();
                $sql = 'SELECT COUNT(u_login) as "number_login" FROM users WHERE u_login = :u_login';
                $request = $db->prepare($sql);
                $request->bindValue(':u_login', $_POST['login']);
                $request->execute();
                $result = $request->fetch(PDO::FETCH_OBJ);
                echo $result->number_login . '<hr>';
                    if($result->number_login == 0){
                        $login = $_POST['login'];
                    }else{
                        $count_error++;
                        $error['already_login'] = 'Votre login existe déja';
                    }
            }else{
                $count_error++;
            }
        }
        if($_POST['password'] == $_POST['confirm_password']){
            $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }else{
            $error['!password_c'] = 'Les deux mots de passe ne sont pas identiques';
            $count_error++;
        }
        if($count_error == 0){
            $db = connection();
            $sql = 'INSERT INTO users (u_name, u_firstname, u_email, u_login, u_password) VALUES (:u_name, :u_firstname, :u_email, :u_login, :u_password)';
            $request = $db->prepare($sql);
            $request->bindValue(':u_name', $name);
            $request->bindValue(':u_firstname', $firstname);
            $request->bindValue(':u_email', $email);
            $request->bindValue(':u_login', $login);
            $request->bindValue(':u_password', $password_hash);
            $request->execute();
            $error['register'] = 'Votre inscription est un succès';
        }else{
            $error['!register'] = 'Vous devez corriger vos erreurs avant de pouvoir vous enregistrer';
        }
    }else{
        $error['empty_field'] = 'Veuillez remplir tous les champs.';
    }
}