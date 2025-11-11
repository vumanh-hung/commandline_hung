<?php
include("db.php");

$keyword = $_GET['keyword'] ?? '';
$query = "SELECT * FROM Thuoc WHERE TenThuoc LIKE '%$keyword%'";
$result = $conn->query($query);

$data = [];
while($row = $result->fetch_assoc()){
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
