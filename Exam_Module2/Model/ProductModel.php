<?php

namespace App\Model;

use PDO;

class ProductModel
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create(object $product)
    {
        $sql = "INSERT INTO lists(name,productLine,price,quantity,description) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->productLine);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->quantity);
        $stmt->bindParam(5, $product->description);
        return $stmt->execute();
    }

    public function getAll(): array
    {
        $sql = "SELECT * FROM lists";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM lists WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $row = $stmt->fetch();
        $product = new Product($row['name'],$row['productLine'],$row['price'],$row['quantity'],$row['description']);
        $product->id = $row['id'];
        return $product;
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM lists WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function update($id,$product)
    {
        $sql = "UPDATE lists SET name = ?, productLine = ?, price = ?, quantity = ?, description = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->productLine);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->quantity);
        $stmt->bindParam(5, $product->description);
        $stmt->bindParam(6, $id);
        return $stmt->execute();
    }

    public function searchProduct($keyword)
    {
        $sql = "SELECT * FROM lists WHERE name LIKE '%$keyword%'";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$keyword);
        $stmt->execute();
        $result =$stmt->fetch();
        $product = new Product($result['name'],$result['productLine'],$result['price'],$result['quantity'],$result['description']);
        $product->id = $result['id'];
        return $product;
    }
}