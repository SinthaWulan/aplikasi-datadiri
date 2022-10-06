<?php

// Percabangan (IF ELSE)
$nilai = 75;
echo "Nilai Kamu = $nilai <br>";
echo "Maka Status Kamu = ";

if ($nilai > 75) {
    echo "Lulus Beneran";
} else if ($nilai == 75) {
    echo "Lulus KKM";
}else {
    echo "Tidak Lulus";
}

echo "<hr>";

$nilai_web = 75;
$nilai_pbo = 88;
echo "Nilai Web Kamu = $nilai_web <br>";
echo "Nilai PBO Kamu = $nilai_pbo <br>";
echo "Hasil Kelulusan Kamu = ";
if ($nilai_web >= 80 AND $nilai_pbo >= 80) {
    echo "Lulus Nilai Produktif 2 Mapel";
}else if ($nilai_web >= 80 OR $nilai_pbo >= 80) {
    echo "Lulus Nilai Produktif Salah Satu Mapel";
}else{
    echo "Tidak Lulus Nilai Produktif";
}

echo "<hr>";

// Perulangan (While, Do While, For)
$i = 1;
while ($i < 5) {
    echo "Hello Word ! ke - $i <br>";
    $i++; //Assigment +1
}

echo "<hr>";

$no = 1;
do {
    echo "Halo Dunia ! <br>";
    $no++;
} while ($no < 5);

echo "<hr>";

$nomor = 1;
for ($nomor; $nomor < 5; $nomor++) {
    echo "kamsamidha ! <br>";
}

    echo "<hr>";

    // Pratikum IF Didalam FOR
    echo "case 1 = Menentukan Angka Ganjil & Genap <br>";
    $angka = 1;
    for ($angka; $angka <= 10; $angka++){
        if ($angka % 2 == 0) {
            echo "$angka = Bilangan Genap <br>";
        }else{
            echo "$angka = Bilangan Ganjil <br>";
        }
    }
    echo "<hr>";
    // Pratikum FOR Didalam FOR
    echo "Case 2 = Angka berulang <br>";
    $x = 1;
    $y = 1;
    for ($x; $x <= 9; $x++){
        for ($y = $x; $y <= 9; $y++){
            echo $x;

        }
        echo "<br>";
    }
    echo "<hr>";
// Pola Bintang Segitiga
        $star=10;
         for( $a=$star;$a>0;$a--){
            for($i=1; $i<=$a; $i++){
               echo "&nbsp";
        }
        for($a1=$star;$a1>=$a;$a1--){
          echo"*";
        }
          echo"<br>";
     }
     echo "<hr>";
     #jumlah deret
    $h = 9;
    $a = 0;
    for($i=0;$i<$h;$i++){
    for($j=$h;$j>$a;$j--){
        echo "&nbsp;";
    }
    for($k=0;$k<=$a;$k++){
        if($i==(int)($h/2)){
            echo "+&nbsp;";
        }else{
            if($k==0 || $k==$a || $k==(int)($a/2)){
                echo "+&nbsp;";
            }else{
                echo "&nbsp;&nbsp;";
            }
        }
    }
    if($i<4){
        $a+=2;
    }else{
        $a-=2;
    }
    echo "<br/>";
}
?>