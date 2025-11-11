<?php
include("db.php");

$data = json_decode(file_get_contents("php://input"));

$query = "INSERT INTO HoaDon (MaKH, MaNV, NgayLap, TongTien)
          VALUES ($data->MaKH, $data->MaNV, '$data->NgayLap', $data->TongTien)";

if($conn->query($query)){
    echo json_encode(["message" => "Hóa đơn đã được tạo"]);
} else {
    echo json_encode(["error" => $conn->error]);
}
?>
