<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ALL-SHOP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    
    <div class="navbar">
        <a href="list.php"><span>our product</span></a>
    </div>

    <div class="container">
        <div class="jumbotron">
            <h1>ALL-SHOP <br> <span>semua bisa anda beli disini</span></h1>
        </div>
        <div class="col-sm-10 form-group-lg">
    <form action="" method="POST" class="centered">
        <div class="form-group row">
            <div class="col-md-4 mb-3">
                Nama Product <br>
                <input class="form-control" type="text" name="nama_barang" placeholder="Nama Product">
                Harga Product <br>
                <input class="form-control" type="number" name="harga_barang" placeholder="Harga Product">
                Category
                <select class="form-control">
                    <option>Pakaian</option>
                    <option>Elektronik</option>
                    <option>Makanan</option>
                </select>
                <br>
                <input type="submit" name="addProduct" value="add Product" class="btn-primary">
                <input type="reset" value="Reset" class="btn-danger">
            </div>
        </div>
    </form>
    </div>

    </div>
</body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

<?php require ('fungsi.php');

    if(isset($_POST['addProduct'])){
        $namaProduct = $_POST['nama_barang'];
        $hargaProduct = $_POST['harga_barang'];

        if($namaProduct == null){
            echo "nama Product tidak boleh kosong !!";
        }elseif($hargaProduct == null){
            echo "harga tidak boleh kosong";
        }
    }

    $shop = new Ecommerce();
    $add = $shop->addProduct($namaProduct, $hargaProduct);
    if($add == "Add Product Success"){
        header('Location: list.php');
    };

?>

