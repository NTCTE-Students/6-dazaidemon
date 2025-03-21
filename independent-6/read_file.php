<?php
function readFileContent($filename) {
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        echo nl2br(htmlspecialchars($content)); // nl2br для перевода перевода строки
    } else {
        echo "Ошибка: Файл не существует.";
    }
}

readFileContent('example.txt');
?>