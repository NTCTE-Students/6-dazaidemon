<?php
function countLinesInFile($filename) {
    if (file_exists($filename)) {
        $lines = count(file($filename));
        echo "Количество строк в файле: $lines";
    } else {
        echo "Ошибка: Файл не существует.";
    }
}
countLinesInFile('example.txt');
?>