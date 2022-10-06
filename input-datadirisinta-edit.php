<?php
      if ( isset($_GET["nis"]) ){
            $nis = $_GET["nis"];
            $check_nis = "SELECT * FROM nilai WHERE nis = '$nis'; ";
            include('./input-configsinta.php');
            $query = mysqli_query($mysqli, $check_nis);
            $row = mysqli_fetch_array($query);
      }
?>
<h1>Edit Data</h1>
<form action="input-datadirisinta-edit.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input value="<?php echo $row["nis"]; ?>"type="number" name="nis" placeholder="Ex.12333122" readonly/><br>

    <label for="nama">Nama Lengkap :</label><br>
    <input value="<?php echo $row["nama_lengkap"]; ?>"type="text" name="nama_lengkap" placeholder="Ex.Sintha Nur Wulan"/><br>

    <label for="kelas"> Kelas:</label><br>
    <input value="<?php echo $row["kelas"]; ?>"type="text" name="kelas"/><br>

    <label for="nilai_kehadiran">Nilai Kehadiran:</label><br>
    <input value="<?php echo $row["nilai_kehadiran"]; ?>"type="number" name="nilai_kehadiran" placeholder="Ex.80.56"/><br>

    <label for="nilai_tugas">Nilai Tugas:</label><br>
    <input value="<?php echo $row["nilai_tugas"]; ?>"type="number" name="nilai_tugas" placeholder="Ex.80.56"/><br>

    <label for="nilai_uts">Nilai UTS:</label><br>
    <input value="<?php echo $row["nilai_UTS"]; ?>"type="number" name="nilai_uts" placeholder="Ex.80.56"/><br>

    <label for="nilai_uas">Nilai UAS:</label><br>
    <input value="<?php echo $row["nilai_UAS"]; ?>"type="number" name="nilai_uas" placeholder="Ex.80.56"/><br>

<input type="submit" name="edit" value="Edit Data"/>
<a href="input-datadirisinta.php">Kembali</a>
</form>

<?php
        if( isset($_POST["simpan"]) ){
            echo $nis = $_POST["nis"];
            echo $nama = $_POST["nama"];
            echo $kelas = $_POST["kelas"];
            echo $nilai_kehadiran = $_POST["nilai_kehadiran"];
            echo $nilai_tugas = $_POST["nilai_tugas"];
            echo $nilai_uts = $_POST["nilai_uts"];
            echo $nilai_uas = $_POST["nilai_uas"];

            //EDIT - Memperbaharui Data
        $query = "
        UPDATE datadiri SET nama_lengkap ='$nama',
       kelas = '$kelas',
       nilai_kehadiran = '$nilai_kehadiran'
       nilai_tugas = '$nilai_tugas'
       nilai_uts = '$nilai_uts'
       nilai_uas = '$nilai_uas'
       WHERE nis = '$nis';
   ";

   include('./input-configsinta.php');
      $update = mysqli_query($mysqli, $query); 

      if($update){
          echo"
          <script>
              alert('Data berhasil ditambahkan');
              window.location='input-datadirisinta.php';
              </script>
          ";
      }else{
          echo"
          <script>
              alert('Data gagal');
              window.location='input-datadirisinta-edit.php?nis-$nis';
              </script>
          ";
      }
}