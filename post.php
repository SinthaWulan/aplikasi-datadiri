<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Satrio" /><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 2" /><br>
    <input type="number" name="NIS" placeholder="Ex. 123321" /><br>
    
    <input type="submit" name="simpan" value="Simpan Data" />
</form>

<?php
if( isset ($_POST["simpan"]) ){
    echo "<hr>";
    $nama = $_POST["namalengkap"];
    $kelas = $_POST["kelas"];
    $NIS = $_POST["NIS"];

    echo "Nama Lengkap : $nama <br>";
    echo "kelas : $kelas <br>";
    echo "NIS : $NIS <br>";
}
?>

    
