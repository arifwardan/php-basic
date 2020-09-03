<?php 

spl_autoload_register(function($class){
    require_once 'Class/'. $class . '.php';
});

require "view/header.php";

?>
<link rel="stylesheet" href="view/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="container">

    <h1>Auto Load</h1>
        <div class="row" style="margin-top:5%; margin-bottom:5%">
            <div class="Trapezoidal btn btn-outline-primary">
                <form action="" method="POST" >
                    <h3>Trapezoidal</h3>
                    <div class="card" style="width: 15rem;">
                        <input type="text" name="sisi1" placeholder="Sisi pertama">
                        <input type="text" name="sisi2" placeholder="Sisi kedua">
                        <input type="text" name="tinggi" placeholder="Tinggi">
                        <input type="submit" name="Trapezoidal" value="Hasil" class="btn btn-outline-danger">
                    </div>
                </form>
            <?php 

                if (isset($_POST['Trapezoidal'])) {
                    $sisi1  = $_POST['sisi1'];
                    $sisi2  = $_POST['sisi2'];
                    $tinggi = $_POST['tinggi'];

                    $trip = new Trapezoidal();
                    $coun = $trip->countTrapezoidal($sisi1, $sisi2, $tinggi);

                    if($coun == "Trapezoidal"){
                        $hasil = $tinggi / 2 * ($sisi1 + $sisi2);
                        echo $hasil . " cm";
                    }

                }
            ?>
            </div>
            <div class="Rectangle btn btn-outline-primary">
                <form action="" method="POST">
                    <h3>Rectangle</h3>
                    <div class="card" style="width: 15rem;">
                        <input type="text" name="panjang" placeholder="Panjang">
                        <input type="text" name="lebar" placeholder="Lebar">
                        <input type="reset" value="Reset">
                        <input type="submit" name="Rectangle" value="Hasil" class="btn btn-outline-danger">
                    </div>
                </form>
            <?php 
                if(isset($_POST['Rectangle'])){
                    $panjang = $_POST['panjang'];
                    $lebar   = $_POST['lebar'];

                    $recta = new Rectangle();
                    $count = $recta->countRectangle($panjang, $lebar);
                    if($count == "Count"){
                        $hasil = $panjang * $lebar;
                        echo $hasil . " cm";
                    }
                    
                }
            ?>
            </div>
            <div class="Triangle btn btn-outline-primary">
                <form action="" method="POST">
                    <h3>Triangle</h3>
                    <div class="card" style="width: 15rem;">
                        <input type="text" name="alas" placeholder="Alas">
                        <input type="text" name="tinggi" placeholder="Tinggi">
                        <input type="reset" value="Reset">
                        <input type="submit" name="Triangle" value="Hasil" class="btn btn-outline-danger">
                    </div>
                </form>
            <?php 
                if(isset($_POST['Triangle'])){
                    $alas   = $_POST['alas'];
                    $tinggi = $_POST['tinggi'];

                    $trian  = new Triangle();
                    $count  = $trian->countTriangle($alas, $tinggi);

                    if($count == "Triangle"){
                        $hasil = $alas * $tinggi;
                        echo $hasil . " cm";
                    }
                }
            ?>
            </div>
            <div class="Circle btn btn-outline-primary">
                <form action="" method="POST">
                    <h3>Circle</h3>
                    <div class="card " style="width: 15rem;">
                        <input type="button" value="Circle">
                        <input type="text" name="jari" placeholder="Jari Jari">
                        <input type="reset" value="Reset">
                        <input type="submit" name="Circle" value="Hasil" class="btn btn-outline-danger">
                    </div>
                </form>
            <?php 
                if(isset($_POST['Circle'])){
                    $jr   = $_POST['jari'];

                    $circ = new Circle();
                    $coun = $circ->countCircle($jr);

                    if($coun == "Circle"){
                        $phi        = 22 / 7;
                        $luasCircle = $phi * $jr * $jr;
                        $keliling   = $phi * ($jr + $jr);
                        echo "luas Circle : " . $luasCircle. " cm" . "<br>";
                        echo "keliling Circle : " . $keliling . " cm";
                    }
                }
            ?>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php require "view/footer.php";?>