<?php
function readJson($filename) {
    if (file_exists($filename)) {
        return json_decode(file_get_contents($filename), true);
    }
    return [];
}

function writeJson($filename, $data) {
    file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
}
$data = readJson('data.json');
$data[] = ['new_item' => 'Новое значение'];
writeJson('data.json', $data);
?>