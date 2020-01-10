<?php

namespace Project\model;

use Project\model\Product;
use Project\model\DB;

class ProductDB
{
    private $db;

    public function __construct()
    {
        $this->db = DB::connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $arr = $stmt->fetchAll();

        $products = [];

        foreach ($arr as $key => $item) {
            $product = new Product();
            $product->setId($item["id"]);
            $product->setName($item["name"]);
            $product->setType($item["type"]);
            $product->setDescription($item["description"]);
            $product->setCreatedDate($item["createdDate"]);
            $product->setPrice($item["price"]);
            $product->setAmount($item["amount"]);
            array_push($products, $product);
        }

        return $products;
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $arr = $stmt->fetch();

        $product = new Product();
        $product->setId($arr["id"]);
        $product->setName($arr["name"]);
        $product->setType($arr["type"]);
        $product->setDescription($arr["description"]);
        $product->setCreatedDate($arr["createdDate"]);
        $product->setPrice($arr["price"]);
        $product->setAmount($arr["amount"]);

        return $product;
    }

    public function edit($product)
    {
        $sql = "UPDATE products SET name = ?, type = ?, price = ?, amount = ?, description = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getType());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getAmount());
        $stmt->bindParam(5, $product->getDescription());
        $stmt->bindParam(6, $product->getId());

        $stmt->execute();

    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

    public function search($keyword)
    {
        $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $arr = $stmt->fetchAll();

        $products = [];

        foreach ($arr as $key => $item) {
            $product = new Product();
            $product->setId($item["id"]);
            $product->setName($item["name"]);
            $product->setType($item["type"]);
            $product->setDescription($item["description"]);
            $product->setCreatedDate($item["createdDate"]);
            $product->setPrice($item["price"]);
            $product->setAmount($item["amount"]);
            array_push($products, $product);
        }
        return $products;
    }

    public function add($product)
    {
        $sql = "INSERT INTO products (name, type, price, amount, description, createdDate) values (?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getType());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getAmount());
        $stmt->bindParam(5, $product->getDescription());
        $stmt->bindParam(6, $product->getCreatedDate());

        $stmt->execute();
    }
}