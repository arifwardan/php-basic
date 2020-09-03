<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
</head>
<body>
    <div class="container">
        <div class="header">
        
        </div>
        <div class="form">
            <form action="index.php" method="POST">
                Kode Buku       : <input type="text" name="kode">     <br>
                Judul Buku      : <input type="text" name="judul">    <br>
                Pengarang Buku  : <input type="text" name="pengarang"><br>
                Penerbit Buku   : <input type="text" name="penerbit"> <br>
                <input type="submit" name="addBook" value="addBook">
                <input type="reset" value="reset">
            </form>
        </div>
    </div>
</body>
</html>

<?php 

require('Library.php');
if(isset($_POST['addBook'])){
    $kode       = $_POST['kode'];
    $judul      = $_POST['judul'];
    $pengarang  = $_POST['pengarang'];
    $penerbit   = $_POST['penerbit'];

    $lib = new Library();
    $add = $lib->addBook($kode, $judul, $pengarang, $penerbit);
    if($add == "Success"){
        header('Location: List.php');
    }
}