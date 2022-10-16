<?php

class categoryModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_producto;charset=utf8', 'root', '');
    }

    public function getAllCategories() {
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    public function getCategory($id){
        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_category = ?");
        $query->execute([$id]);

        $category = $query->fetch(PDO::FETCH_OBJ);
        
        return $category;
    }

    public function insertCategory($category) {
        $query = $this->db->prepare("INSERT INTO categoria (category) VALUES (?)");
        $query->execute([$category]);

        return $this->db->lastInsertId();
    }

    public function updateCategoryById($id, $category){
        $query = $this->db->prepare("UPDATE `categoria` SET `category` = ? WHERE `id_category` = ?");
        $query->execute([$category, $id]);
    }

    public function deleteCategoryById($id) {
        $query = $this->db->prepare('DELETE FROM categoria WHERE id_category = ?');
        $query->execute([$id]);
    }

    public function getProductsByCategory($id){
        $query = $this->db->prepare("SELECT producto.*, categoria.* FROM producto INNER JOIN categoria ON producto.id_category = categoria.id_category WHERE categoria.id_category = ?");
        $query->execute([$id]);

        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

}

