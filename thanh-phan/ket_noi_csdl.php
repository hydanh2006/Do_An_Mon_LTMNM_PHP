<?php
$may_chu = 'localhost';
$tai_khoan = 'root';
$mat_khau = '';
$ten_csdl = 'csdl_noi_that';

$ket_noi = new mysqli($may_chu, $tai_khoan, $mat_khau, $ten_csdl);
if ($ket_noi->connect_error) {
    die("Kết nối CSDL thất bại: " . $ket_noi->connect_error);
}
mysqli_set_charset($ket_noi, "utf8mb4");
?>