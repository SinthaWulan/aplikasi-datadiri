<form action="rumus-lingkaran.php" method="POST">
    <h1> Rumus Luas dan Keliling Lingkaran </h1>
    <p>Jari-Jari :</p>
    <input type="text" name="r" placeholder="Ex.4 " /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $r = $_POST["r"];
    $luas =  3.14 * $r * $r;
    $keliling = 2 * 3.14 * $r;

    echo "Luas Lingkaran : $luas <br>";
    echo "Keliling Lingkaran : $keliling <br>"; 
}

