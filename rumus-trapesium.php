<form action="rumus-trapesium.php" method="POST">
    <h1> Rumus Luas dan Keliling Trapesium </h1>
    <p>AlasA :</p> <input type="number" name="AlasA" placeholder="Ex.4 " /><br>
    <p>AlasB :</p><input type="number" name="AlasB" placeholder="Ex.4 " /><br>
    <p>Tinggi :</p> <input type="number" name="Tinggi" placeholder="Ex.4 " /><br>
    <p>SisiAB :</p><input type="number" name="SisiAB" placeholder="Ex.6 " /><br>
    <p>SisiBC:</p><input type="number" name="SisiBC" placeholder="Ex.6 " /><br>
    <p>SisiCD :</p><input type="number" name="SisiCD" placeholder="Ex.6 " /><br>
    <p>SisiDA :</p><input type="number" name="SisiDA" placeholder="Ex.6 " /><br>
    <input type="submit" name="proses" value="Hitung Luas & Keliling" />
</form>

<?php
if ( isset($_POST["proses"]) ){
    echo "<hr>";
    $alasA = $_POST["AlasA"];
    $alasB = $_POST["AlasB"];
    $tinggi = $_POST["Tinggi"];
    $AB = $_POST["SisiA"];
    $BC = $_POST["SisiB"];
    $CD = $_POST["SisiC"];
    $DA = $_POST["SisiD"];
    $luas =  1/2 * ($alasA + $alasB) * $tinggi;
    $keliling = $AB + $BC + $CD + $DA;

    echo "AlasA & AlasB : $alasA & $alasB <br>";
    echo "Tinggi : $tinggi <br>";
    echo "SisiA, SisiB, SisiC, SisiD: $AB, $BC, $CD, $DA <br>";
    echo "Luas Trapesium : $luas <br>";
    echo "Keliling Trapesium : $keliling <br>"; 
}
