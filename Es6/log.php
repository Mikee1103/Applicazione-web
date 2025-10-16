<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $logFile = 'logfile.txt';
    $message = trim($_POST['message'] ?? '');

    if ($message !== '') {
        $logMessage = date('Y-m-d H:i:s') . " - " . htmlspecialchars($message) . "\n";
        file_put_contents($logFile, $logMessage, FILE_APPEND);
        echo "Messaggio registrato nel log.";
    } else {
        echo "Il messaggio è vuoto!";
    }
} else {
    echo "Metodo non consentito.";
}
?>