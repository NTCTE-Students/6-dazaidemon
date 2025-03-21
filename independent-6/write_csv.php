<?php
function writeCsvFile($filename, $dataArray) {
    $handle = fopen($filename, "w");
    foreach ($dataArray as $data) {
        fputcsv($handle, $data);
    }
    fclose($handle);
}

$data = [
    ['Name', 'Age', 'Email'],
    ['John Doe', 30, 'john@example.com'],
    ['Jane Smith', 25, 'jane@example.com']
];
writeCsvFile('output.csv', $data);
?>