<?php

require('Library.php');

if(isset($_GET['kode'])){
    $Lib = new Library();
    $book = $Lib->editBook($_GET['kode']);
    $edit = $book->fetch(PDO::FETCH_OBJ);
    ?>

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
        <h2>Ubah Buku</h2>
        </div>
        <form action="edit.php" method="POST">
            Kode Buku: <input type="text" name="kode" value="<?="$edit->kodeBuku";?>"><br>
            Judul Buku: <input type="text" name="judul" value="<?="$edit->judulBuku";?>"><br>
            Pengarang Buku: <input type="text" name="pengarang" value="<?="$edit->pengarang";?>"><br>
            Penerbit Buku: <input type="text" name="penerbit" value="<?="$edit->penerbit";?>"><br>
            <input type="submit" name="updateBook" value="Update" >
        </form>
    </body>
    </html>


<?php 
}

if(isset($_POST['updateBook'])){
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $Lib = new Library();
    $upd = $Lib->updateBook($kode, $judul, $pengarang, $penerbit);
    if($upd == "Success"){
        header('Location: List.php');
    }else{
        echo "Update Failed";
    }
}