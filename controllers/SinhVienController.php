<?php
require_once "models/SinhVien.php";

class SinhVienController {
    public function index() {
        $sinhviens = SinhVien::getAll();
        include "views/sinhvien/index.php";
    }

    public function detail($ma_sv) {
        $sinhvien = SinhVien::getById($ma_sv);
        include "views/sinhvien/detail.php";
    }

    public function create() {
        include "views/sinhvien/create.php";
    }

    public function store() {
        $hinh_anh = "uploads/" . basename($_FILES["hinh"]["name"]);
        move_uploaded_file($_FILES["hinh"]["tmp_name"], $hinh_anh);

        SinhVien::create($_POST["ma_sv"], $_POST["ho_ten"], $_POST["gioi_tinh"], $_POST["ngay_sinh"], $hinh_anh, $_POST["ma_nganh"]);
        header("Location: routes.php");
    }

    public function edit($ma_sv) {
        $sinhvien = SinhVien::getById($ma_sv);
        include "views/sinhvien/edit.php";
    }

    public function update() {
        $hinh_anh = "uploads/" . basename($_FILES["hinh"]["name"]);
        move_uploaded_file($_FILES["hinh"]["tmp_name"], $hinh_anh);

        SinhVien::update($_POST["ma_sv"], $_POST["ho_ten"], $_POST["gioi_tinh"], $_POST["ngay_sinh"], $hinh_anh, $_POST["ma_nganh"]);
        header("Location: routes.php");
    }

    public function delete($ma_sv) {
        SinhVien::delete($ma_sv);
        header("Location: routes.php");
    }
}
?>
