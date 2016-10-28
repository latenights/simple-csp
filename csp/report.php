<?php

$filename = 'violations.txt';
$data = file_get_contents('php://input');

if ($data = json_decode($data, true)) {
    $data['date'] = date('Y-m-d H:i:s');
    $data = json_encode(
        $data,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
    );
    $report = fopen($filename, 'a+') OR die('Unable to open file!');
    fwrite($report, $data);
    fclose($report);
}