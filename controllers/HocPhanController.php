<?php
require_once "models/HocPhan.php";
require_once "models/DangKy.php";

class HocPhanController {
    public function index() {
        $hocphans = HocPhan::getAll();
        include "views/hocphan/index.php";
    }

    public function register() {
        if (isset($_GET['ma_sv']) && isset($_GET['ma_hp'])) {
            DangKy::register($_GET['ma_sv'], $_GET['ma_hp']);
        }
        header("Location: routes.php?action=hocphan&ma_sv=" . $_GET['ma_sv']);
    }
}
?>
