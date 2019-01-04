<?php
require 'script_login.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire de connexion</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Connexion</h1>
        <p class="text-center"><a href="logout.php" title="Page déconnexion">Déconnectez-vous ici</a><a href="index.php" title="Page d'inscription">Inscrivez-vous ici</a></p>
        <br>
        <hr>
        <form acion="script_register.php" method="POST">
            <div class="row">
                <div class="form-group col 6">
                    <label for="login">Login</label>
                    <input type="text" name="login" class="form-control" id="login" placeholder="login" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]{1,255}" required>
                    <small id="l_error" class="text-danger"></small>
                </div>
                <div class="form-group col 6">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="password" pattern="[A-Za-z-àáâäçèéêëìíîïñòóôöùúûü -]{1,255}" required>
                    <small id="p_error" class="text-danger"></small>
                </div>
            </div>
            <button type="submit" name="submit_login" class="btn btn-primary" id="submit">Send</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

