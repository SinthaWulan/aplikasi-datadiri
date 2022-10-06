<form action="rumus-layanglayang.php" method="POST">
    <h1> Rumus Luas dan Layang-Layang </h1>
    <p>Diagonal 1 :</p>
    <p>Diagonal 2:</p>
    <p>SisiA :</p>
    <p>SisiB :</p>
    <input type="number" name="Diagonal1" placeholder="Ex.4 " /><br>
    <input type="number" name="Diagonal2" placeholder="Ex.4 " /><br>
    <input type="number" name="SisiA" placeholder="Ex.6 " /><br>
    <input type="number" name="SisiB" placeholder="Ex.6 " /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $d1 = $_POST["Diagonal1"];
    $d2 = $_POST["Diagonal2"];
    $A = $_POST["SisiA"];
    $B = $_POST["SisiB"];
    $luas =  1/2 * $d1 * $d2;
    $keliling = 2 * ($A + $B);

    echo "Diagonal1 & Diagonal2 : $d1 & $d2 <br>";
    echo "SisiA & SisiB : $A & $B <br>";
    echo "Luas Belah Ketupat : $luas <br>";
    echo "Keliling Belah Ketupat : $keliling <br>"; 
}
