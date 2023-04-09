<?php
require_once "server.php";

if (!isset($_GET['id'])) {
    $data = getLocations();
} else {
    $data = getLocationdetails($_GET['id']);
}

header("Content-Type: application/json");
echo json_encode($data);
exit;