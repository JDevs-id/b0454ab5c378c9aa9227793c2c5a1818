<?php
include 'conn.php';

$queryResult = $conn->query("SELECT * FROM `tb_users`");
$result = array();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[] = $fetchData;
}

echo json_encode($result);
