<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Thanh điều hướng -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="routes.php">🏫 Quản lý Sinh Viên</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="routes.php">🏠 Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?action=create">➕ Thêm Sinh Viên</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?action=list">📋 Danh sách</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?action=hocphan">📚 Đăng Ký Học Phần</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Container chính -->
<div class="container mt-4">
