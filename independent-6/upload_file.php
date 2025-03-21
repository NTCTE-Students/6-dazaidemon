<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Проверка на изображение
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check === false) {
        echo "Ошибка: Файл не является изображением.";
        $uploadOk = 0;
    }

    // Проверка размера файла
    if ($_FILES["fileToUpload"]["size"] > 2000000) {
        echo "Ошибка: Файл слишком велик.";
        $uploadOk = 0;
    }

    // Если все проверки пройдены, загрузить файл
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Файл ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " был загружен.";
        } else {
            echo "Ошибка: возникла проблема с загрузкой файла.";
        }
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    Выберите изображение для загрузки:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Загрузить файл">
</form>
