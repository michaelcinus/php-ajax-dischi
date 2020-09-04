<?php

header('Content-Type: application/json');

include __DIR__ . '/partials/vars.php';

echo json_encode($data);

?>