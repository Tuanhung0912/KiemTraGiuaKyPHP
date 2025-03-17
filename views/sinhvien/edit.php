<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center">Chỉnh sửa Sinh Viên</h2>

    <form method="POST" action="routes.php?action=update" enctype="multipart/form-data" class="card p-4 shadow">
        <input type="hidden" name="ma_sv" value="<?= $sinhvien["MaSV"]; ?>">
        <input type="hidden" name="old_hinh" value="<?= $sinhvien["Hinh"]; ?>">

        <div class="mb-3">
            <label class="form-label">Mã SV:</label>
            <input type="text" name="ma_sv_display" class="form-control" value="<?= $sinhvien["MaSV"]; ?>" disabled>
        </div>

        <div class="mb-3">
            <label class="form-label">Họ Tên:</label>
            <input type="text" name="ho_ten" class="form-control" value="<?= $sinhvien["HoTen"]; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giới Tính:</label>
            <select name="gioi_tinh" class="form-select">
                <option value="Nam" <?= ($sinhvien['GioiTinh'] == 'Nam') ? 'selected' : ''; ?>>Nam</option>
                <option value="Nữ" <?= ($sinhvien['GioiTinh'] == 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày Sinh:</label>
            <input type="date" name="ngay_sinh" class="form-control" value="<?= $sinhvien["NgaySinh"]; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mã Ngành:</label>
            <input type="text" name="ma_nganh" class="form-control" value="<?= $sinhvien["MaNganh"]; ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hình ảnh hiện tại:</label><br>
            <?php if (!empty($sinhvien["Hinh"])) { ?>
                <img src="<?= $sinhvien["Hinh"]; ?>" width="150" class="img-thumbnail">
            <?php } else { ?>
                <span>Không có ảnh</span>
            <?php } ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Chọn ảnh mới:</label>
            <input type="file" name="hinh" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">💾 Cập Nhật</button>
        <a href="routes.php" class="btn btn-secondary">🔙 Quay lại</a>
    </form>

</body>
</html>
