<form action="rumus-persegipanjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Persegi Panjang </h1>
    <p>Panjnang :</p>
    <p>Lebar :</p>
    <input type="number" name="Panjang" placeholder="Ex. 6" /><br>
    <input type="number" name="Lebar" placeholder="Ex. 6" /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $panjang = $_POST["Panjang"];
    $lebar = $_POST["Lebar"];
    $luas = $panjang * $lebar;
    $keliling = 2 * $panjang + $lebar;

    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luas Persegi Panjang : $luas <br>";
    echo "Keliling Persegi Panjang : $keliling <br>"; 
}