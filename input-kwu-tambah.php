<h1>Transaksi KWU</h1>
<form action="input-kwu-tambah.php" method="POST">
    <label for="kodebarang">Kode Barang:</label>
    <input type="number" name="kode_barang" placeholder="Ex.12333122"/><br>

    <label for="tanggal">tanggal :</label>
    <input type="date" name="tanggal" placeholder="Ex.Sintha Nur Wulan"/><br>

    <label for="pembeli"> Pembeli:</label><br>
    <input type="text" name="pembeli"/><br>

    <label for="namabarang">Nama Barang:</label><br>
    <input type="text" name="namabarang" placeholder=""/><br>

    <label for="qty">QTY:</label><br>
    <input type="number" name="qty" placeholder="Ex.80.56"/><br>

    <label for="hargabeli">Harga Beli:</label><br>
    <input type="number" name="hargabeli" placeholder="Ex.80.56"/><br>

    <label for="hargajual">Harga Jual:</label><br>
    <input type="number" name="hargajual" placeholder="Ex.80.56"/><br>

<input type="submit" name="simpan" value="Simpan Transaksi"/>
<a href="input-datakwu.php">Kembali</a>
</form>


<?php
        if( isset($_POST["simpan"]) ){
            echo $kode_barang = $_POST["kode_barang"];
            echo $tanggal = $_POST["tanggal"];
            echo $pembeli = $_POST["pembeli"];
            echo $namabarang = $_POST["namabarang"];
            echo $qty = $_POST["qty"];
            echo $hargabeli = $_POST["hargabeli"];
            echo $hargajual = $_POST["hargajual"];

           //CREATE - Menambahakan Data ke Database
           $query ="
                    INSERT INTO transaksi VALUES
                    ('$kode_barang','$tanggal','$pembeli','$namabarang','$qty','$hargabeli','$hargajual');
            ";
            include('./input-configkwu.php');
            $insert = mysqli_query($mysqli, $query);

            if($insert){
                echo"
                    <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-datakwu.php';
                    </script>
                ";
            }
        }
?>