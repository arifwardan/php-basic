<?php

require('fungsi.php');

if (isset($_GET['id'])) {
    $shop = new Ecommerce();
    $product = $shop->editProduct($_GET['id']);
    $edit = $product->fetch(PDO::FETCH_OBJ);
?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Edit Product</title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    </head>
    <body>
        <div class="navbar">
			<h1>Editing</h1>
		</div>
		<div class="container">
			<h2>Edit Product</h2>
			<div class="col-md-4">
				<form action="edit.php" method="POST">
					<div class="form-group">
						<input type="hidden" name="id" value="<?="$edit->id";?>"><br>
						NAMA Product <br>
						<input type="text" name="nama_barang" value="<?="$edit->nama_barang";?>"><br>
						HARGA Product <br>
						<input type="text" name="harga_barang" value="<?="$edit->harga_barang";?>"><br>
						<br>
						<input type="submit" name="updateProduct" class="btn-warning" value="Update">
						
					</div>
				</form>
			</div>
		</div>
    </body>
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
    </html>

<?php 
} 

if(isset($_POST['updateProduct'])){
	$id 		  = $_POST['id'];
	$namaProduct  = $_POST['nama_barang'];
	$hargaProduct = $_POST['harga_barang'];

	$shop = new Ecommerce();
	$updt = $shop->updateProduct($id, $namaProduct, $hargaProduct);
	if($updt == "Success"){
		header('Location: list.php');
	}else{
		header("Location:failed.php");
	}
}

?>
