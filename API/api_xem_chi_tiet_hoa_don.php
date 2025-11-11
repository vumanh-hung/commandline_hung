<?php
include("db.php");

$maHD = $_GET['id'] ?? 0;


$query = "SELECT hd.MaHD, hd.NgayLap, kh.TenKH, nv.TenNV, 
                 ct.MaThuoc, t.TenThuoc, ct.SoLuong, ct.DonGia, ct.ThanhTien
          FROM HoaDon hd
          JOIN KhachHang kh ON hd.MaKH = kh.MaKH
          JOIN NhanVien nv ON hd.MaNV = nv.MaNV
          JOIN ChiTietHoaDon ct ON hd.MaHD = ct.MaHD
          JOIN Thuoc t ON ct.MaThuoc = t.MaThuoc
          WHERE hd.MaHD = $maHD";

$result = $conn->query($query);

$data = [];
while($row = $result->fetch_assoc()){
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
