<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center">Chi Tiết Sinh Viên</h2>
    
    <div class="card p-4 shadow">
        <p><strong>Mã SV:</strong> <?= $sinhvien["MaSV"]; ?></p>
        <p><strong>Họ Tên:</strong> <?= $sinhvien["HoTen"]; ?></p>
        <p><strong>Giới Tính:</strong> <?= $sinhvien["GioiTinh"]; ?></p>
        <p><strong>Ngày Sinh:</strong> <?= $sinhvien["NgaySinh"]; ?></p>
        <p><strong>Ngành Học:</strong> <?= $sinhvien["MaNganh"]; ?></p>
        <p><strong>Hình Ảnh:</strong></p>
        <?php if (!empty($sinhvien["Hinh"])) { ?>
            <img src="<?= $sinhvien["Hinh"]; ?>" width="200" class="img-thumbnail">
        <?php } else { ?>
            <span>Không có ảnh</span>
        <?php } ?>

        <a href="routes.php" class="btn btn-secondary mt-3">🔙 Quay lại</a>
    </div>

</body>
</html>
