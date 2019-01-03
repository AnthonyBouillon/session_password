<?php
require 'script_register.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Inscription</h1>
        <hr>
        <form acion="script_register.php" method="POST">
            <div class="row">
                <div class="form-group col 6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]{1,255}" required>
                    <small id="n_error" class="text-danger"></small>
                </div>
                <div class="form-group col 6">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="firstname" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]{1,255}" required>
                    <small id="f_error" class="text-danger"></small>
                </div>
            </div>


            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>
                <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="login" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü@*/_ -]{1,255}" required>
                <small id="l_error" class="text-danger"></small>
            </div>
            <div class="row">
                <div class="form-group col 6">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <small id="password_not_c" class="text-danger"></small>
                </div>
                <div class="form-group col 6">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Password" required>
                </div>
            </div>
            <button type="submit" name="submit_register" class="btn btn-primary" id="submit">Send</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

