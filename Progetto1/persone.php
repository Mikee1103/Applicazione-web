<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
include 'config.php';

$result = $conn->query("SELECT * FROM persone");
?>
<!DOCTYPE html>
<html>
<head><title>Elenco Persone</title></head>
<body>
  <h2>Elenco Persone Registrate</h2>
  <table border="1" cellpadding="5">
    <tr>
      <th>Codice Fiscale</th>
      <th>Nome</th>
      <th>Cognome</th>
      <th>Data di nascita</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['codice_fiscale'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['cognome'] ?></td>
        <td><?= $row['data_nascita'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <br><a href="dashboard.php">Torna alla dashboard</a>
</body>
</html>