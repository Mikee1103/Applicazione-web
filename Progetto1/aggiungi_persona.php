<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cf = $_POST['cf'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $data_nascita = $_POST['data_nascita'];

    $sql = "INSERT INTO persone (codice_fiscale, nome, cognome, data_nascita)
            VALUES ('$cf', '$nome', '$cognome', '$data_nascita')";

    if ($conn->query($sql) === TRUE) {
        echo "Persona aggiunta con successo! <a href='dashboard.php'>Torna alla dashboard</a>";
    } else {
        echo "Errore: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Aggiungi Persona</title></head>
<body>
  <h2>Aggiungi Persona</h2>
  <form method="POST">
    Codice fiscale: <input type="text" name="cf" required><br><br>
    Nome: <input type="text" name="nome" required><br><br>
    Cognome: <input type="text" name="cognome" required><br><br>
    Data di nascita: <input type="date" name="data_nascita" required><br><br>
    <button type="submit">Salva</button>
  </form>
</body>
</html>
