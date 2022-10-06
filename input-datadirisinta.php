<?php 
      include('./input-configsinta.php');
      echo "<a href='input-siswasinta-tambah.php'>Tambah Data</a>";
      echo "<hr>";
      // READ - Menampilkan data dari database
      $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM nilai ");
      while($row = mysqli_fetch_array($data)){
        $nilai_akhir = (
             $row["nilai_kehadiran"] +
             $row["nilai_tugas"] +
             $row["nilai_UTS"] +
             $row["nilai_UAS"] ) / 4;
            $tabledata .= "
                  <tr>
                        <td>".$row["nis"]."</td>
                        <td>".$row["nama_lengkap"]."</td>
                        <td>".$row["kelas"]."</td>
                        <td>".$row["nilai_kehadiran"]."</td>
                        <td>".$row["nilai_tugas"]."</td>
                        <td>".$row["nilai_UTS"]."</td>
                        <td>".$row["nilai_UAS"]."</td>

                        <td>".$nilai_akhir."</td>

                        <td>
                              <a href='input-datadirisinta-edit.php?nis=".$row["nis"]."'>Edit</a>
                              &nbsp;-&nbsp;
                              <a href='input-datadirisinta-hapus.php?nis=".$row["nis"]."' 
                              onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                        </td>
                  </tr>
            ";
            $no++;
      }

      echo "
            <table cellpadding=5 border=1 cellspacing=0>
                  <tr>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Nilai Kehadiran</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Nilai Akhir</th>
                        <th>Aksi</th>
                  </tr>
                  $tabledata
            </table>
      ";
?>
