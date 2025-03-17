<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center">Danh sách Sinh viên</h2>
    <a href="routes.php?action=create" class="btn btn-primary mb-3">➕ Thêm Sinh Viên</a>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Mã SV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Mã Ngành</th>
                <th>Hình Ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sinhviens as $sv) { ?>
                <tr>
                    <td><?= $sv["MaSV"]; ?></td>
                    <td><?= $sv["HoTen"]; ?></td>
                    <td><?= $sv["GioiTinh"]; ?></td>
                    <td><?= $sv["NgaySinh"]; ?></td>
                    <td><?= $sv["MaNganh"]; ?></td>
                    <td>
                        <?php if (!empty($sv["Hinh"])) { ?>
                            <img src="<?= $sv["Hinh"]; ?>" width="100" height="100" class="img-thumbnail rounded mx-auto d-block">
                        <?php } else { ?>
                            <span>Không có ảnh</span>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="routes.php?action=detail&ma_sv=<?= $sv['MaSV']; ?>" class="btn btn-info btn-sm">👀 Xem</a>
                        <a href="routes.php?action=edit&ma_sv=<?= $sv['MaSV']; ?>" class="btn btn-warning btn-sm">✏️ Sửa</a>
                        <a href="routes.php?action=delete&ma_sv=<?= $sv['MaSV']; ?>" class="btn btn-danger btn-sm">🗑️ Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
