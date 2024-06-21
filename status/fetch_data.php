<?php
// fetch_data.php

// Assuming you have connect.php that contains database connection details
require_once '../config/connect.php';

// Check if 'service' parameter is received via GET method
if (isset($_GET['service'])) {
    $selected_service = $_GET['service'];

    // Determine which table to select based on $selected_service
    $table_name = '';
    if ($selected_service == "ประชาสัมพันธ์สื่อออนไลน์") {
        $table_name = 'ccfn_form_s';
    } elseif ($selected_service == "ออกแบบสื่อประชาสัมพันธ์") {
        $table_name = 'ccfn_form_p';
    }

    if (!empty($table_name)) {
        // Prepare SQL statement to fetch data from selected table
        $stmt = $conn->prepare("SELECT * FROM $table_name");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return data as JSON format
        echo json_encode($result);
    } else {
        // If no valid table name found
        echo json_encode(array('error' => 'Invalid service selection'));
    }
} else {
    // If 'service' parameter is not provided
    echo json_encode(array('error' => 'Service parameter is missing'));
}
