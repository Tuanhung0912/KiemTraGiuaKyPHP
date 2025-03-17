<?php include 'navbar.php'; ?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center">Thêm Sinh Viên</h2>
    
    <form method="POST" action="routes.php?action=store" enctype="multipart/form-data" class="card p-4 shadow">
        <div class="mb-3">
            <label class="form-label">Mã SV:</label>
            <input type="text" name="ma_sv" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Họ Tên:</label>
            <input type="text" name="ho_ten" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Giới Tính:</label>
            <select name="gioi_tinh" class="form-select">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Ngày Sinh:</label>
            <input type="date" name="ngay_sinh" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mã Ngành:</label>
            <input type="text" name="ma_nganh" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Hình Ảnh:</label>
            <input type="file" name="hinh" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">✔️ Thêm</button>
        <a href="routes.php" class="btn btn-secondary">🔙 Quay lại</a>
    </form>

</body>
</html>
