<?php
function readCsvFile($filename) {
    if (file_exists($filename)) {
        $handle = fopen($filename, "r");
        if ($handle !== FALSE) {
            echo "<table border='1'>";
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                echo "<tr>";
                foreach ($data as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            fclose($handle);
        }
    } else {
        echo "Ошибка: Файл не существует.";
    }
}

readCsvFile('data.csv');
?>