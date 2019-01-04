<?php
session_start();
// Ne détruit pas les cookies de sessions ni les variables globales associées
session_destroy();
header('location: index.php');