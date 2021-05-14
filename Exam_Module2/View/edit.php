<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Update product
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="./index.php?page=edit&id=<?php echo $product->id ?>">
                    <input type="hidden" name="id" value="<?php echo $product->id; ?>"/>
                    <div class="mb-3">
                        <label class="form-label">Tên mặt hàng</label>
                        <input type="text" value="<?php echo $product->name; ?>" name="name" class="form-control">
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
                        <input type="text" value="<?php echo $product->price; ?>" name="price" class="form-control">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số lượng</label>
                        <input type="text" value="<?php echo $product->quantity; ?>" name="quantity" class="form-control">
                        <?php if (isset($errors['quantity'])): ?>
                            <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả sản phẩm</label>
                        <input type="text" value="<?php echo $product->description; ?>" name="description" class="form-control">
                        <?php if (isset($errors['description'])): ?>
                            <p class="text-danger"><?php echo $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a type="button" href="./index.php" class="btn btn-secondary">Return</a>
                </form>
            </div>
        </div>
    </div>
</div>