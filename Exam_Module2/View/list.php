<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách mặt hàng
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="./index.php?page=add">Thêm mặt hàng</a>
                <table class="table table-bordered">
                    <thead>
                    <form action="./index.php?page=search" method="post">
                        Search: <label>
                            <input type="text" name = "searchProduct" placeholder="Insert">
                        </label>
                        <a class="btn btn-dark btn-sm" href="./index.php?page=search">Search</a>
                    </form>
                    <tr>
                        <th>#</th>
                        <th>Tên mặt hàng</th>
                        <th>Loại mặt hàng</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <td><?php echo ++$key; ?></td>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['productLine'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                        <td><?php echo $product['quantity'] ?></td>
                        <td><?php echo $product['description'] ?></td>
                        <td><a href="./index.php?page=delete&id=<?php echo $product['id']; ?>"
                               class ="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')">Delete</a>
                            <a href="./index.php?page=edit&id=<?php echo $product['id']; ?>"
                               class="btn btn-primary btn-sm">Update</a>
                        <?php endforeach; ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div
</div>