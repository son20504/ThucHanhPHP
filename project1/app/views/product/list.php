<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <!-- Sử dụng Flatly theme từ Bootswatch -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/flatly/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Danh sách sản phẩm</h1>
            <a href="/project1/Product/add" class="btn btn-primary">+ Thêm sản phẩm mới</a>
        </div>

        <?php if (empty($products)): ?>
            <div class="alert alert-info">Chưa có sản phẩm nào.</div>
        <?php else: ?>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php foreach ($products as $product): ?>
                    <div class="col">
                        <div class="card h-100 border-primary shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title text-primary">
                                    <?= htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>
                                </h5>
                                <p class="card-text">
                                    <?= nl2br(htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8')); ?>
                                </p>
                                <p class="fw-bold text-success">
                                    Giá: <?= htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?> đ
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="/project1/Product/edit/<?= $product->getID(); ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="/project1/Product/delete/<?= $product->getID(); ?>" 
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');"
                                   class="btn btn-danger btn-sm">Xóa</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
