<!DOCTYPE html>
<html>
<head>
    <title>Sửa sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.3/dist/flatly/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Sửa sản phẩm</h1>

    <form method="POST" action="/project1/Product/edit/<?= $product->getID(); ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($product->getName()) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Mô tả:</label>
            <textarea id="description" name="description" class="form-control" required><?= htmlspecialchars($product->getDescription()) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Giá:</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= htmlspecialchars($product->getPrice()) ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="/project1/Product/list" class="btn btn-secondary">Hủy</a>
    </form>
</body>
</html>
