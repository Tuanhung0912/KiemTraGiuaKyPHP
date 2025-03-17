<?php
require_once 'controllers/SinhVienController.php';
require_once 'controllers/HocPhanController.php'; 

$controller = new SinhVienController();
$hocphanController = new HocPhanController();

if (!isset($_GET['action'])) {
    $controller->index();
} else {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'store':
            $controller->store();
            break;
        case 'edit':
            $controller->edit($_GET['ma_sv']);
            break;
        case 'update':
            $controller->update();
            break;
        case 'delete':
            include "views/sinhvien/delete.php"; // Hiển thị trang xác nhận xóa
            break;
        case 'confirm_delete': 
            $controller->delete($_GET['ma_sv']); // Xóa sinh viên thực sự
            break;
        case 'detail':
            $controller->detail($_GET['ma_sv']);
            break;
        // Hiển thị trang danh sách học phần
        case 'hocphan':
            $hocphanController->index(); // Gọi controller để hiển thị học phần
            break;    
        // Xử lý đăng ký học phần
        case 'dangky_hocphan':
            if (isset($_GET['ma_sv']) && isset($_GET['ma_hp'])) {
                $hocphanController->register($_GET['ma_sv'], $_GET['ma_hp']);
            }
            header("Location: routes.php?action=hocphan&ma_sv=" . $_GET['ma_sv']);
            break;
        default:
            $controller->index();
            break;
    }
}
?>
