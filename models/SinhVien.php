<?php
require_once "config.php";

class SinhVien {
    public static function getAll() {
        global $conn;
        $query = "SELECT sv.*, nh.TenNganh 
                  FROM SinhVien sv
                  JOIN NganhHoc nh ON sv.MaNganh = nh.MaNganh";
        $result = $conn->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT sv.*, nh.TenNganh 
                                FROM SinhVien sv
                                JOIN NganhHoc nh ON sv.MaNganh = nh.MaNganh
                                WHERE sv.MaSV = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function create($ma_sv, $ho_ten, $gioi_tinh, $ngay_sinh, $hinh_anh, $ma_nganh) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO SinhVien (MaSV, HoTen, GioiTinh, NgaySinh, Hinh, MaNganh) 
                                VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $ma_sv, $ho_ten, $gioi_tinh, $ngay_sinh, $hinh_anh, $ma_nganh);
        return $stmt->execute();
    }

    public static function update($ma_sv, $ho_ten, $gioi_tinh, $ngay_sinh, $hinh_anh, $ma_nganh) {
        global $conn;
        $stmt = $conn->prepare("UPDATE SinhVien 
                                SET HoTen=?, GioiTinh=?, NgaySinh=?, Hinh=?, MaNganh=? 
                                WHERE MaSV=?");
        $stmt->bind_param("ssssss", $ho_ten, $gioi_tinh, $ngay_sinh, $hinh_anh, $ma_nganh, $ma_sv);
        return $stmt->execute();
    }

    public static function delete($ma_sv) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM SinhVien WHERE MaSV = ?");
        $stmt->bind_param("s", $ma_sv);
        return $stmt->execute();
    }
}
?>
