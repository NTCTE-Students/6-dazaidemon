<?php
function writeFileContent($filename, $data) {
    file_put_contents($filename, $data); // Перезаписывает файл
}
writeFileContent('example.txt', "Hello, World!");
?>