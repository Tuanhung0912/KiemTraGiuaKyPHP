<?php
require_once "config.php";

class DangKy {
    public static function getHocPhanBySinhVien($ma_sv) {
        global $conn;
        $stmt = $conn->prepare("SELECT MaHP FROM ChiTietDangKy WHERE MaDK IN (SELECT MaDK FROM DangKy WHERE MaSV = ?)");
        $stmt->bind_param("s", $ma_sv);
        $stmt->execute();
        $result = $stmt->get_result();
        $hocphan_da_dang_ky = [];
        while ($row = $result->fetch_assoc()) {
            $hocphan_da_dang_ky[] = $row['MaHP'];
        }
        return $hocphan_da_dang_ky;
    }

    public static function register($ma_sv, $ma_hp) {
        global $conn;
        
        // Kiểm tra xem sinh viên đã có mã đăng ký hay chưa
        $stmt = $conn->prepare("SELECT MaDK FROM DangKy WHERE MaSV = ?");
        $stmt->bind_param("s", $ma_sv);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            $ma_dk = $row["MaDK"];
        } else {
            // Nếu sinh viên chưa có mã đăng ký, tạo mới
            $stmt = $conn->prepare("INSERT INTO DangKy (NgayDK, MaSV) VALUES (NOW(), ?)");
            $stmt->bind_param("s", $ma_sv);
            $stmt->execute();
            $ma_dk = $conn->insert_id;
        }

        // Thêm học phần vào ChiTietDangKy
        $stmt = $conn->prepare("INSERT INTO ChiTietDangKy (MaDK, MaHP) VALUES (?, ?)");
        $stmt->bind_param("is", $ma_dk, $ma_hp);
        return $stmt->execute();
    }
}
?>
