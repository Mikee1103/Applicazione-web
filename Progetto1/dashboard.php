<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
  <h2>Benvenuto, <?php echo $_SESSION['username']; ?>!</h2>
  <ul>
    <li><a href="aggiungi_persona.php">Aggiungi Persona</a></li>
    <li><a href="persone.php">Visualizza Persone</a></li>
    <li><a href="logout.php">Logoutcoiooo</a></li>
  </ul>
</body>
</html>