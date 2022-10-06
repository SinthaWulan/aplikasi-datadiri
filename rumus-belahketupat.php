<form action="rumus-belahketupat.php" method="POST">
    <h1> Rumus Luas dan Keliling Belah Ketupat </h1>
    <p>Diagonal 1 :</p> <input type="number" name="Diagonal1" placeholder="Ex.4 " /><br>
    <p>Diagonal 2:</p><input type="number" name="Diagonal2" placeholder="Ex.4 " /><br>
    <p>Sisi :</p><input type="number" name="Sisi" placeholder="Ex.6 " /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $d1 = $_POST["Diagonal1"];
    $d2 = $_POST["Diagonal2"];
    $sisi = $_POST["Sisi"];
    $luas =  1/2 * $d1 * $d2;
    $keliling = $sisi + $sisi + $sisi + $sisi;

    echo "Diagonal1 & Diagonal2 : $d1 & $d2 <br>";
    echo "Sisi : $sisi <br>";
    echo "Luas Belah Ketupat : $luas <br>";
    echo "Keliling Belah Ketupat : $keliling <br>"; 
}
