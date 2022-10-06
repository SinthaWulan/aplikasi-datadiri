<form action="rumus-segitiga.php" method="POST">
    <h1> Rumus Luas dan Keliling Segitiga </h1>
    <p>Alas :</p>
    <p>Tinggi :</p>
    <p>Sisi :</p>
    <input type="number" name="Alas" placeholder="Ex.4 " /><br>
    <input type="number" name="Tinggi" placeholder="Ex.4 " /><br>
    <input type="number" name="Sisi" placeholder="Ex.6 " /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $alas = $_POST["Alas"];
    $tinggi = $_POST["Tinggi"];
    $sisi = $_POST["Sisi"];
    $luas =  1/2 * $alas * $tinggi;
    $keliling = $sisi + $sisi + $sisi;

    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Sisi : $sisi <br>";
    echo "Luas Segitiga : $luas <br>";
    echo "Keliling Segitiga : $keliling <br>"; 
}
