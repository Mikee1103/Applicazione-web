<?php
require 'db.php';

$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($username === '' || $password === '') {
    die("Campi obbligatori");
}

// hash password
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

// controllo utente esistente
$stmt = $pdo->prepare("SELECT id FROM utenti WHERE username = ?");
$stmt->execute([$username]);

if ($stmt->fetch()) {
    die("Username già esistente");
}

// inserimento
$stmt = $pdo->prepare("INSERT INTO utenti (username, password) VALUES (?, ?)");
$stmt->execute([$username, $passwordHash]);

header("Location: index.html");
exit;
?>