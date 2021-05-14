<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Thêm mặt hàng:
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="mb-2">
                        <label class="form-label">Tên hàng</label>
                        <input type="text" name="name" class="form-control">
                        <?php if (isset($errors['name'])): ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Loại mặt hàng</label>
                        <label>
                            <select name="productLine" class="select-css">
                                <option value="1">Điện thoại</option>
                                <option value="2">Điều hòa</option>
                                <option value="3">Tủ lạnh</option>
                            </select>
                        </label>
                        <?php if (isset($errors['productLine'])): ?>
                            <p class="text-danger"><?php echo $errors['productLine'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input type="text" name="price" class="form-control">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số lượng</label>
                        <input type="text" name="quantity" class="form-control">
                        <?php if (isset($errors['quantity'])): ?>
                            <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả sản phẩm</label>
                        <input type="text" name="description" class="form-control">
                        <?php if (isset($errors['description'])): ?>
                            <p class="text-danger"><?php echo $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Nhập mặt hàng</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Thoát</a>
                </form>
            </div>
        </div>
    </div>
</div>