<?php

class Ecommerce {
    public function __construct(){
        $server   = "localhost";
        $username = "root";
        $password = "?>bismillah";
        $this->db = new PDO("mysql:host=$server;dbname=e_commerce", $username, $password);
    }

    /*debugging doang ! 

    public function connection(){
        $this->db;
        if ($this->db){
            return "Terhubung ke DataBase!!!";
        }else{
            return "Gagal Terhubung Ke DataBase";
        }
    }
    */

    public function addProduct($namaProduct, $hargaProduct){
        $sql   = "INSERT INTO data_barang(nama_barang, harga_barang)VALUES ('$namaProduct', '$hargaProduct')";
        $query = $this->db->query($sql);
        if($query){
            return "Add Product Success";
        }else{
            return "Add Product Failed";
        }
    }

    public function editProduct($id){
        $sql   = "SELECT * FROM data_barang WHERE  id='$id' ";
        $query = $this->db->query($sql);
        if ($query){
            return $query;
        }else{
            return "Gagal Di Edit";
        }
    }

    public function updateProduct($id, $namaProduct, $hargaProduct){
        $sql   = "UPDATE data_barang SET nama_barang='$namaProduct', harga_barang='$hargaProduct' WHERE id='$id' ";
        $query = $this->db->query($sql);
        if($query){
            return "Success";
        }else{
            return "Failed";
        }
    }

    public function showProduct(){
        $sql   = "SELECT * FROM data_barang";
        $query = $this->db->query($sql);
        if($query){
            return $query;
        }else{
            return "404 Not Found";
        }
    }

    public function deleteProduct($id){
        $sql   = "DELETE FROM data_barang WHERE id='$id' ";
        $query = $this->db->query($sql);
        if($query){
            return "Deleted";
        }else{
            return "Delete Failed";
        }
    }


}

/*
$con = new Ecommerce();
print_r($con->connection());

$addProduct = new Ecommerce();
print_r($addProduct->addProduct('Buku Sirokh', '50.000'));

$editProduct = new Ecommerce();
print_r($editProduct->editProduct('17'));

$updateProduct = new Ecommerce();
print_r($updateProduct->updateProduct('bubuk gandum', '4000', '2'));

$showProduct = new Ecommerce();
print_r($showProduct->showProduct());

$deleteProduct = new Ecommerce();
print_r($deleteProduct->deleteProduct('1'));
*/