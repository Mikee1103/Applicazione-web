<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina Protetta</title>
</head>
<body>
    <h1>Benvenuto</h1>
    <p>Solo gli utenti autenticati possono vedere questa pagina</p>
</body>
</html>