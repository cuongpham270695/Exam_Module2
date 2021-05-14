<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Search Product
        </div>
        <div class="card-body">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Tên mặt hàng</th>
                        <th>Loại mặt hàng</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['productLine'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                        <td><?php echo $product['quantity'] ?></td>
                        <td><?php echo $product['description'] ?></td>
                        <?php endforeach; ?>
                    </tr>
                    </tbody>
                </table>
                <a type="button" href="./index.php" class="btn btn-secondary">Return</a>
            </div>
        </div>
    </div
</div>