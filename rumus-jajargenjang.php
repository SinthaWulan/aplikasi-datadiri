<form action="rumus-jajargenjang.php" method="POST">
    <h1> Rumus Luas dan Keliling Jajargenjang </h1>
    <p>Alas :</p><input type="number" name="Alas" placeholder="Ex.4 " /><br>
    <p>Tinggi :</p><input type="number" name="Tinggi" placeholder="Ex.4 " /><br>
    <p>SisiA :</p><input type="number" name="SisiA" placeholder="Ex.6 " /><br>
    <p>SisiB :</p> <input type="number" name="SisiB" placeholder="Ex.6 " /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $alas = $_POST["Alas"];
    $tinggi = $_POST["Tinggi"];
    $A = $_POST["SisiA"];
    $B = $_POST["SisiB"];
    $luas = $alas * $tinggi;
    $keliling = 2 * ($A + $B);

    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "SisiA & SisiB : $A & $B <br>";
    echo "Luas Jajargenjang : $luas <br>";
    echo "Keliling Jajargenjang : $keliling <br>"; 
}
