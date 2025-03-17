<?php include 'navbar.php'; ?>

<?php 
    require_once __DIR__ . "/../../models/SinhVien.php"; 

    // Kiểm tra nếu có mã sinh viên được truyền vào
    if (!isset($_GET['ma_sv'])) {
        die("⚠️ Lỗi: Không tìm thấy mã sinh viên.");
    }

    $ma_sv = $_GET['ma_sv'];
    $sinhvien = SinhVien::getById($ma_sv);

    if (!$sinhvien) {
        die("⚠️ Lỗi: Sinh viên không tồn tại.");
    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Xác nhận Xóa Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center text-danger">⚠️ Xác nhận Xóa Sinh Viên</h2>

    <div class="card p-4 shadow">
        <p><strong>Mã SV:</strong> <?= $sinhvien["MaSV"]; ?></p>
        <p><strong>Họ Tên:</strong> <?= $sinhvien["HoTen"]; ?></p>
        <p><strong>Giới Tính:</strong> <?= $sinhvien["GioiTinh"]; ?></p>
        <p><strong>Ngày Sinh:</strong> <?= $sinhvien["NgaySinh"]; ?></p>
        <p><strong>Mã Ngành:</strong> <?= $sinhvien["MaNganh"]; ?></p>

        <p><strong>Hình Ảnh:</strong></p>
        <?php if (!empty($sinhvien["Hinh"])) { ?>
            <img src="<?= $sinhvien["Hinh"]; ?>" width="200" class="img-thumbnail">
        <?php } else { ?>
            <span>Không có ảnh</span>
        <?php } ?>

        <div class="mt-3">
            <p class="text-danger"><strong>Bạn có chắc chắn muốn xóa sinh viên này không?</strong></p>
            <a href="routes.php?action=confirm_delete&ma_sv=<?= $sinhvien['MaSV']; ?>" class="btn btn-danger">🗑️ Xóa</a>
            <a href="routes.php" class="btn btn-secondary">🔙 Hủy</a>
        </div>
    </div>

</body>
</html>