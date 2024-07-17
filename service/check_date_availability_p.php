<?php
include_once('../config/connect.php');

$sql = "SELECT date_a, COUNT(*) AS count FROM ccfn_form_p GROUP BY date_a HAVING count >= 3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$unavailable_dates = array();
foreach ($result as $row) {
    $unavailable_dates[] = $row['date_a'];
}

header('Content-Type: application/json');
echo json_encode($unavailable_dates);
