<?php
function replaceTextInFile($source, $search, $replace, $destination) {
    if (file_exists($source)) {
        $content = file_get_contents($source);
        $newContent = str_replace($search, $replace, $content);
        file_put_contents($destination, $newContent);
        echo "Заменено '$search' на '$replace'. Результат записан в '$destination'.";
    } else {
        echo "Ошибка: Исходный файл не существует.";
    }
}
replaceTextInFile('example.txt', 'Hello', 'Hi', 'new_example.txt');
?>