<h1>Tambah Data</h1>
<form action="input-siswasinta-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex.12333122"/><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama_lengkap" placeholder="Ex.Sintha Nur Wulan"/><br>

    <label for="kelas"> Kelas:</label><br>
    <input type="text" name="kelas"/><br>

    <label for="nilai_kehadiran">Nilai Kehadiran:</label><br>
    <input type="number" name="nilai_kehadiran" placeholder="Ex.80.56"/><br>

    <label for="nilai_tugas">Nilai Tugas:</label><br>
    <input type="number" name="nilai_tugas" placeholder="Ex.80.56"/><br>

    <label for="nilai_uts">Nilai UTS:</label><br>
    <input type="number" name="nilai_UTS" placeholder="Ex.80.56"/><br>

    <label for="nilai_uas">Nilai UAS:</label><br>
    <input type="number" name="nilai_UAS" placeholder="Ex.80.56"/><br>

<input type="submit" name="simpan" value="Simpan Data"/>
<a href="input-datadirisinta.php">Kembali</a>
</form>


<?php
        if( isset($_POST["simpan"]) ){
            echo $nis = $_POST["nis"];
            echo $nama = $_POST["nama_lengkap"];
            echo $kelas = $_POST["kelas"];
            echo $nilai_kehadiran = $_POST["nilai_kehadiran"];
            echo $nilai_tugas = $_POST["nilai_tugas"];
            echo $nilai_uts = $_POST["nilai_UTS"];
            echo $nilai_uas = $_POST["nilai_UAS"];

           //CREATE - Menambahakan Data ke Database
           $query ="
                    INSERT INTO nilai VALUES
                    ('$nis','$nama','$kelas','$nilai_kehadiran','$nilai_tugas','$nilai_uts','$nilai_uas');
            ";
            include('./input-configsinta.php');
            $insert = mysqli_query($mysqli, $query);

            if($insert){
                echo"
                    <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-datadirisinta.php';
                    </script>
                ";
            }
        }
?>