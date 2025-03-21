<?php
function deleteFile($filename) {
    if (file_exists($filename)) {
        unlink($filename);
        echo "Файл '$filename' был успешно удален.";
    } else {
        echo "Ошибка: Файл не существует.";
    }
}
deleteFile('example.txt');
?>