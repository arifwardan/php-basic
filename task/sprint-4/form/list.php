<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="navbar">
        <nav>
        <a href="index.php">Home</a>
        </nav>
    </div>
        <h2>All Product</h2>
        <table class="table">
            <tr>
                <td>Id Product</td>
                <td>Nama Product</td>
                <td>Harga Product</td>

            </tr>

            <?php
            
            require ('fungsi.php');
            $shop = new Ecommerce();
            $show = $shop->showProduct();
            while($data = $show->fetch(PDO::FETCH_OBJ)){
            ?>
            <tr>
                <?= "<td type='hidden'>$data->id</td>"?>
                <?= "<td>$data->nama_barang</td>";?>
                <?= "<td>$data->harga_barang</td>";?>
                <?= "<td><a href='edit.php?id=$data->id'><input type='button' class='btn-primary' value='Edit'></a></td>";?>
                <?= "<td><a href='list.php?delete=$data->id'><input type='button' class='btn-danger' value='Delete'></a></td>";?>
            </tr>

            <?php } ?>

        </table>
        <a href="index.php"><input type="button" class="btn-success" value="Tambah Product Baru"></a>

        <?php
        
        if(isset($_GET['delete'])){
            $delete = $shop->deleteProduct($_GET['delete']);
                header('Location: list.php');
        }
        if(isset($_GET['delete'])){
            echo "
            <div class='alert alert-danger' role='alert'>
                Product dengan id $data->id Deleted
            </div>
            ";
        }
        ?>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>