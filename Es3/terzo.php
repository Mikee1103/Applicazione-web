<?php
session_start();

$nome_utente_valido = "Michele";
$password_valida = "Seghezzi";

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $nome_utente_valido && $password === $password_valida) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    header("Location: protetta.php");
    exit();
} else {
    echo "Nome utente o password errati. <a href='index.html'>Riprova</a>";
}
?>