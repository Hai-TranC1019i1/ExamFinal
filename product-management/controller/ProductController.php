<?php

namespace Project\model;
use Project\model\DB;
use Project\model\Product;
use Project\model\ProductDB;

class ProductController
{
    private $productDB;

    public function __construct()
    {
        $this->productDB = new ProductDB();
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include "view/list.php";
    }

    public function search($keyword)
    {
        $products = $this->productDB->search($keyword);
        include "view/list.php";
    }

    public function add()
    {
        include "view/add.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product = new Product();
            $product->setName($_POST["name"]);
            $product->setType($_POST["type"]);
            $product->setPrice($_POST["price"]);
            $product->setAmount($_POST["amount"]);
            $product->setDescription($_POST["description"]);
            $product->setCreatedDate($_POST["createdDate"]);

            $this->productDB->add($product);
            header("location: index.php");
        }
    }

    public function edit()
    {
        $id = $_GET["id"];
        $product = $this->productDB->getById($id);

        include "view/edit.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $product = new Product();
            $product->setId($_POST["id"]);
            $product->setName($_POST["name"]);
            $product->setType($_POST["type"]);
            $product->setPrice($_POST["price"]);
            $product->setAmount($_POST["amount"]);
            $product->setDescription($_POST["description"]);
            $product->setCreatedDate($_POST["createdDate"]);

            $this->productDB->edit($product);
            header("location: index.php");
        }
    }

    public function delete()
    {
        $id = $_GET["id"];
        $product = $this->productDB->getById($id);

        include "view/delete.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->productDB->delete($_POST["id"]);
            header("location: index.php");
        }
    }

    public function directionalSearchAndIndex()
    {
        if (empty($_POST["keyword"])) {
            $this->index();
        } else {
            $this->search($_POST["keyword"]);
        }
    }
}