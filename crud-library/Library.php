<?php

class Library {
    public function __construct(){
        $this->db = new PDO("mysql:host=localhost;dbname=crud", 'root', '?>bismillah');
    }

    /*
    hanya untuk debugging!
    public function connection(){
        $this->db;
        if($this->db){
            return "Berhasil Connect ke DB - ";
        }else{
            return "Gagal Connect ke DB - ";
        }
    }
    */

    public function addBook($kode, $judul, $pengarang, $penerbit){
        $sql        = "INSERT INTO books(kodeBuku, judulBuku, pengarang, penerbit) VALUES ('$kode', '$judul', '$pengarang', '$penerbit')";
        $query      = $this->db->query($sql);
        if(!$query){
            return "Add Book Failed";
        }else {
            return "Success";
        }
    }
    public function editBook($kode){
        $sql = "SELECT * FROM books WHERE kodeBuku='$kode' ";
        $query = $this->db->query($sql);
        return $query;
    }
    public function updateBook($kode, $judul, $pengarang, $penerbit){
        $sql = "UPDATE books SET judulBuku='$judul', pengarang='$pengarang', penerbit='$penerbit' WHERE kodeBuku='$kode' ";
        $query = $this->db->query($sql);
        if(!$query){
            return "Update Failed";
        }else{
            return "Success";
        }
    }
    public function showBooks(){
        $sql   = "SELECT * FROM books";
        $query = $this->db->query($sql);
        return $query;
        
    }
    public function deleteBook($kode){
        $sql   = "DELETE FROM books WHERE kodeBuku='$kode' ";
        $query = $this->db->query($sql);
    }
}

//perintah dibawah ini hanya untuk debugging di terminal !!! jangan di eksekusi di web!
/*
$con = new Library();
print_r($con->connection());

$addBooks = new Library();
print_r($addBooks->addBook('rtedg', 'judulBuku', 'pengarang', 'penerbit')); //value pertama = kode buku. input maxlimal panjang nilai 5

$edit = new Library();
print_r($edit->editBook('12ti'));

$tampil = new Library();
print_r($tampil->showBooks());

$delete = new Library();
print_r($delete->deleteBook('12ti'));

/*
// $editBuku = new Library();
// print_r($editBuku->editBook());

*/
// echo "TETAP SEMANGAT";
?>