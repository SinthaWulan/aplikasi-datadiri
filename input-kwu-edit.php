<?php
if(isset($_GET["kode_barang"])){
    $kode_barang = $_GET["kode_barang"];
    $check_kode_barang = "SELECT * FROM transaksi WHERE kode_barang = '$kode_barang';";
    include('./input-configkwu.php');
    $query = mysqli_query($mysqli, $check_kode_barang);
    $row = mysqli_fetch_array($query);
}
?>

<h1>Edit Data</h1>
<form action="input-kwu-edit.php" method="POST">
<label for="kode_barang">Kode Barang :</label>
<input value="<?php echo $row["kode_barang"]; ?>" type="number" name="kode_barang" placeholder="Ex. 003102" readonly /><br>

<label for="tanggal">Tanggal :</label>
<input value="<?php echo $row["tanggal"]; ?>" type="date" name="tanggal" placeholder="Ex. " /><br>

<label for="pembeli">Pembeli :</label>
<input value="<?php echo $row["pembeli"]; ?>" type="text" name="pembeli" /><br>

<label for="namabarang">Nama Barang : </label>
<input value="<?php echo $row["namabarang"]; ?>" type="text" name="namabarang" placeholer="Ex. " /><br>

<label for="qty">QTY : </label>
<input value="<?php echo $row["qty"]; ?>" type="number" name="qty" placeholer="Ex. " /><br>

<label for="hargabeli">Harga Beli  : </label>
<input value="<?php echo $row["hargabeli"]; ?>" type="number" name="hargabeli" placeholer="Ex. " /><br>

<label for="hargajual">Harga Jual : </label><br>
<input value="<?php echo $row["hargajual"]; ?>" type="number" name="hargajual" placeholer="Ex. " />

<input type="submit" name="edit" value="Edit Data" />
<a href="input-datakwu.php">Kembali</a>
</form>

<?php

if(isset($_POST["edit"])){
     $kode_barang = $_POST["kode_barang"];
     $tanggal = $_POST["tanggal"];
     $pembeli = $_POST["pembeli"];
     $namabarang = $_POST["namabarang"];
     $qty = $_POST["qty"];
     $hargabeli = $_POST["hargabeli"];
     $hargajual = $_POST["hargajual"];

    // EDIT - Memperbaharui Data
    $query = "
        UPDATE transaksi SET tanggal = '$tanggal',
        pembeli = '$pembeli',
        namabarang = '$namabarang',
        qty = '$qty',
        hargabeli = '$hargabeli',
        hargajual = '$hargajual'
        WHERE kode_barang = '$kode_barang';
    ";
     include ('./input-configkwu.php');
     $update = mysqli_query($mysqli, $query);

     if($update){
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='input-datakwu.php';
        </script>
        
        ";
     }else{
        echo "
        <script>
        alert('Data berhasil diperbaharui');
        window.location='input-kwu-edit.php?kode_barang=$kode_barang';
        </script>
        ";  
     }
}