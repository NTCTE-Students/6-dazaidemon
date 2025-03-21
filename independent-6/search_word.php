<?php
function searchWordInFile($filename, $word) {
    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $count = substr_count($content, $word);
        echo "Слово '$word' найдено $count раз(а) в файле.";
    } else {
        echo "Ошибка: Файл не существует.";
    }
}
searchWordInFile('example.txt', 'Hello');
?>