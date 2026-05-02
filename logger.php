<?php

$ip = $_SERVER['REMOTE_ADDR'] ?? 'UNKNOWN';

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';

$time = date("Y-m-d H:i:s");

$data = "TIME: $time | IP: $ip | UA: $userAgent\n";

file_put_contents("logs.txt", $data, FILE_APPEND);

echo json_encode([
    "status" => "ok"
]);

?>
