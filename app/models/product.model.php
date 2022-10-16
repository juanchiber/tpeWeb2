<?php

class productModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_producto;charset=utf8', 'root', '');
    }

    //Devuelve lista de productos completa.
    public function getAllProducts() {

        $query = $this->db->prepare("SELECT producto.*, categoria.* FROM producto INNER JOIN categoria ON producto.id_category = categoria.id_category");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $products;
    }

    public function getProduct($id){
        $query = $this->db->prepare("SELECT producto.*, categoria.* FROM producto INNER JOIN categoria ON producto.id_category = categoria.id_category WHERE producto.id_product = ?");
        $query->execute([$id]);
        $product = $query->fetch(PDO::FETCH_OBJ);
        
        return $product;
    }

    public function insertProduct($product, $detail, $price, $category) {
        $query = $this->db->prepare("INSERT INTO producto (product, detail, price, id_category) VALUES (?, ?, ?, ?)");
        $query->execute([$product, $detail, $price, $category]);

        return $this->db->lastInsertId();
    }

    public function deleteProductById($id) {
        $query = $this->db->prepare('DELETE FROM producto WHERE id_product = ?');
        $query->execute([$id]);
    }

    public function updateProductById($id, $product, $detail, $price, $id_category){
        $query = $this->db->prepare("UPDATE producto SET product = ?, detail = ?, price = ?, id_category = ?  WHERE id_product = ?");
        $query->execute([$product, $detail, $price, $id_category, $id]);
    }

}

