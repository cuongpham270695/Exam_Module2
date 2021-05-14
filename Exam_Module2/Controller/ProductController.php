<?php

namespace App\Controller;

use App\Model\Product;
use App\Model\ProductModel;
use App\Model\DBConnection;

class ProductController
{
    public ProductModel $productModel;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=product_manage", "phpmyadmin", "1");
        $this->productModel = new ProductModel($connection->connect());
    }

    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include 'View/add.php';
        } else {
            //Validate data
            $errors = [];
            $fields = ['name', 'productLine', 'price', 'quantity', 'description'];
            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Cannot empty!';
                }
            }
            if (empty($errors)) {
                $name = $_POST['name'];
                $productLine = $_POST['productLine'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $description = $_POST['description'];
                $product = new Product($name, $productLine, $price, $quantity, $description);
                $this->productModel->create($product);
                header('Location: index.php');
            } else {
                include 'View/add.php';
            }
        }
    }

    public function index()
    {

        $products = $this->productModel->getAll();
        include 'View/list.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->productModel->deleteProduct($id);
        header('Location: index.php');
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_GET['id'];
            $product = $this->productModel->get($id);
            include 'View/edit.php';
        } else {
            //Validate data
            $errors = [];
            $fields = ['name', 'productLine', 'price', 'quantity', 'description'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = "Cannot be empty";
                }
            }
            $id = $_POST['id'];
            if (empty($errors)) {
                $name = $_POST['name'];
                $productLine = $_POST['productLine'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $description = $_POST['description'];
                $product = new Product($name, $productLine, $price, $quantity, $description);
                $this->productModel->update($id, $product);
                header('Location: index.php');
            } else {
                $product = $this->productModel->get($id);
                include 'View/edit.php';
            }
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $keyword = $_POST['keyword'];
            $result = $this->productModel->searchProduct($keyword);
            include 'View/search.php';
        }return $result;
    }
}