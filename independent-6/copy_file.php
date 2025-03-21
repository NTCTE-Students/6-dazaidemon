<?php
function copyFile($source, $destination) {
    if (file_exists($destination)) {
        echo "Предупреждение: Файл назначения уже существует.";
    } else {
        copy($source, $destination);
        echo "Файл успешно скопирован.";
    }
}
copyFile('example.txt', 'backup_example.txt');
?>