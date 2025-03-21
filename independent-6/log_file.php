<?php
function logMessage($message) {
    $logfile = 'log.txt';
    $date = date('Y-m-d H:i:s');
    file_put_contents($logfile, "$date - $message" . PHP_EOL, FILE_APPEND);
}
logMessage('Это тестовое сообщение.');
?>