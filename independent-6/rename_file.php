<?php
function renameFile($oldName, $newName) {
    if (file_exists($newName)) {
        echo "Ошибка: Файл с новым именем уже существует.";
    } else if (file_exists($oldName)) {
        rename($oldName, $newName);
        echo "Файл '$oldName' был успешно переименован в '$newName'.";
    } else {
        echo "Ошибка: Исходный файл не существует.";
    }
}
renameFile('example.txt', 'new_example.txt');
?>