<?php
require_once "config.php"; // Kết nối database

class HocPhan {
    public static function getAll() {
        global $conn;
        $query = "SELECT * FROM HocPhan"; // Lấy danh sách học phần
        $result = $conn->query($query);

        if (!$result) {
            die("Lỗi truy vấn: " . $conn->error); // Hiển thị lỗi SQL
        }

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
