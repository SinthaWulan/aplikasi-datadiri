<?php 
      include('./input-configkwu.php');
      echo "<a href='input-kwu-tambah.php'>Transaksi KWU</a>";
      echo "<hr>";
      // READ - Menampilkan data dari database
      $no = 1;
      $tabledata = "";
      $data = mysqli_query($mysqli, " SELECT * FROM transaksi ");
      while($row = mysqli_fetch_array($data)){
        $totalhargabeli = ( $row["qty"] * $row["hargabeli"] ) ;
        $totalhargajual = ( $row["qty"] * $row["hargajual"] ) ;
        $laba = ($totalhargajual - $totalhargabeli);
        $persentase = ($laba / $totalhargabeli) * 100;
            $tabledata .= "
                  <tr>
                        <td>".$row["kode_barang"]."</td>
                        <td>".$row["tanggal"]."</td>
                        <td>".$row["pembeli"]."</td>
                        <td>".$row["namabarang"]."</td>
                        <td>".$row["qty"]."</td>
                        <td>".$row["hargabeli"]."</td>
                        <td>".$row["hargajual"]."</td>
                        <td>".$totalhargabeli."</td>
                        <td>".$totalhargajual."</td>

                        <td>".$laba."</td>
                        <td>$persentase%</td>

                        <td>
                              <a href='input-kwu-edit.php?kode_barang=".$row["kode_barang"]."'>Edit</a>
                              &nbsp;-&nbsp;
                              <a href='input-kwu-hapus.php?kode_barang=".$row["kode_barang"]."' 
                              onclick='return confirm(\"Yakin Dek ?\");'>Hapus</a>
                        </td>
                  </tr>
            ";
            $no++;
      }

      echo "
            <table cellpadding=5 border=1 cellspacing=0>
                  <tr>
                        <th>kode barang</th>
                        <th>tanggal</th>
                        <th>pembeli</th>
                        <th>nama barang</th>
                        <th>qty</th>
                        <th>hargabeli</th>
                        <th>hargajual</th>
                        <th>totalhargabeli</th>
                        <th>totalhargajual</th>
                        <th>laba</th>
                        <th>Persentase Laba</th>
                        <th>Aksi</th>
                  </tr>
                  $tabledata
            </table>
      ";
?>
