<?php
function appendToFile($filename, $data) {
    file_put_contents($filename, $data . PHP_EOL, FILE_APPEND); // Добавляет данные в конец файла
}

// Пример использования
appendToFile('example.txt', "This is a new line.");
?>