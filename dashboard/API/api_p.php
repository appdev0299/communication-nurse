<?php
require_once '../../config/connect.php';
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        handleGetRequest($conn);
        break;
    case 'POST':
        handlePostRequest($conn);
        break;
    case 'PUT':
        handlePutRequest($conn);
        break;
    case 'DELETE':
        handleDeleteRequest($conn);
        break;
    default:
        echo json_encode(["message" => "Method not supported"]);
        break;
}

function handleGetRequest($conn)
{
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($id !== null) {
        $stmt = $conn->prepare("SELECT * FROM ccfn_form_p WHERE id = :id");
        $stmt->bindParam(':id', $id);
    } else {
        $stmt = $conn->prepare("SELECT * FROM ccfn_form_p");
    }

    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($results);
}

function handlePostRequest($conn)
{
    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $conn->prepare("INSERT INTO ccfn_form_p (fullname, department, tel, personnel, email, social, `option`, date_a, communicate, production_file, status_user, status_admin, status_ss) VALUES (:fullname, :department, :tel, :personnel, :email, :social, :option, :date_a, :communicate, :production_file, :status_user, :status_admin, :status_ss)");
    $stmt->bindParam(':fullname', $data['fullname']);
    $stmt->bindParam(':department', $data['department']);
    $stmt->bindParam(':tel', $data['tel']);
    $stmt->bindParam(':personnel', $data['personnel']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':social', $data['social']);
    $stmt->bindParam(':option', $data['option']);
    $stmt->bindParam(':date_a', $data['date_a']);
    $stmt->bindParam(':communicate', $data['communicate']);
    $stmt->bindParam(':production_file', $data['production_file']);
    $stmt->bindParam(':status_user', $data['status_user']);
    $stmt->bindParam(':status_admin', $data['status_admin']);
    $stmt->bindParam(':status_ss', $data['status_ss']);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Record created successfully"]);
    } else {
        echo json_encode(["message" => "Failed to create record"]);
    }
}

function handlePutRequest($conn)
{
    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $conn->prepare("UPDATE ccfn_form_p SET fullname=:fullname, department=:department, tel=:tel, personnel=:personnel, email=:email, social=:social, `option`=:option, date_a=:date_a, communicate=:communicate, production_file=:production_file, status_user=:status_user, status_admin=:status_admin, status_ss=:status_ss WHERE id=:id");
    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':fullname', $data['fullname']);
    $stmt->bindParam(':department', $data['department']);
    $stmt->bindParam(':tel', $data['tel']);
    $stmt->bindParam(':personnel', $data['personnel']);
    $stmt->bindParam(':email', $data['email']);
    $stmt->bindParam(':social', $data['social']);
    $stmt->bindParam(':option', $data['option']);
    $stmt->bindParam(':date_a', $data['date_a']);
    $stmt->bindParam(':communicate', $data['communicate']);
    $stmt->bindParam(':production_file', $data['production_file']);
    $stmt->bindParam(':status_user', $data['status_user']);
    $stmt->bindParam(':status_admin', $data['status_admin']);
    $stmt->bindParam(':status_ss', $data['status_ss']);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Record updated successfully"]);
    } else {
        echo json_encode(["message" => "Failed to update record"]);
    }
}

function handleDeleteRequest($conn)
{
    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $conn->prepare("DELETE FROM ccfn_form_p WHERE id=:id");
    $stmt->bindParam(':id', $data['id']);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Record deleted successfully"]);
    } else {
        echo json_encode(["message" => "Failed to delete record"]);
    }
}
