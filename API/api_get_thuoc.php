<?php
include("db.php");

$query = "SELECT * FROM Thuoc";
$result = $conn->query($query);

$thuoc = [];
while($row = $result->fetch_assoc()){
    $thuoc[] = $row;
}

header('Content-Type: application/json');
echo json_encode($thuoc);
?>
