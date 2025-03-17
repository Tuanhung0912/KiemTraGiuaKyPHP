<?php include 'navbar.php'; ?>
<?php 
    require_once __DIR__ . "/../../models/HocPhan.php"; 
    $hocphans = HocPhan::getAll();

    if (!$hocphans) {
        echo "<p class='text-danger'>Không có học phần nào.</p>";
    }
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Học Phần</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="text-center">Danh sách Học Phần</h2>

    <?php if (!empty($hocphans)) { ?>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>Mã Học Phần</th>
                <th>Tên Học Phần</th>
                <th>Số Tín Chỉ</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hocphans as $hp) { ?>
                <tr>
                    <td><?= $hp["MaHP"]; ?></td>
                    <td><?= $hp["TenHP"]; ?></td>
                    <td><?= $hp["SoTinChi"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <p class="text-danger text-center">Không có học phần nào.</p>
    <?php } ?>

</body>
</html>
