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
        <p class="text-center"><a href="form_login.php" title="Page d'inscription">Connectez-vous ici</a></p>
        <br>
        <small class="text-success"><?= !empty($error['register']) ? $error['register'] : '' ?></small>
        <small class="text-danger"><?= !empty($error['!register']) ? $error['!register'] : '' ?></small>
        <hr>
        <form acion="script_register.php" method="POST">
            <div class="row">
                <div class="form-group col 6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]{1,255}" required>
                    <small id="n_error" class="text-danger"><?= !empty($error['tooLong_n']) ? $error['tooLong_n'] : '' ?></small>
                </div>
                <div class="form-group col 6">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="firstname" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]{1,255}" required>
                    <small id="f_error" class="text-danger"><?= !empty($error['tooLong_f']) ? $error['tooLong_f'] : '' ?></small>
                </div>
            </div>


            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$" required>
                <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <small class="text-danger"><?= !empty($error['tooLong_e']) ? $error['tooLong_e'] : '' ?></small>
                <small class="text-danger"><?= !empty($error['already_email']) ? $error['already_email'] : '' ?></small>
            </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="login" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü@*/_0-9 -]{1,255}" required>
                <small id="l_error" class="text-danger"><?= !empty($error['tooLong_l']) ? $error['tooLong_l'] : '' ?></small>
                <small class="text-danger"><?= !empty($error['already_login']) ? $error['already_login'] : '' ?></small>
            </div>
            <div class="row">
                <div class="form-group col 6">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <small id="password_not_c" class="text-danger"><?= !empty($error['!password_c']) ? $error['!password_c'] : '' ?></small>
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

