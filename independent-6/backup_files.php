<?php
function backupFiles($directory, $backupDir) {
    if (!is_dir($backupDir)) {
        mkdir($backupDir);
    }

    $files = glob($directory . '/*'); // Получаем все файлы в директории
    foreach ($files as $file) {
        $fileName = basename($file);
        copy($file, $backupDir . '/' . $fileName);
    }
    echo "Резервное копирование завершено.";
}
backupFiles('uploads', 'backup_' . date('Y-m-d'));
?>