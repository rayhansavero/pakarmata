<?php
$con = mysqli_connect('localhost','root','','mata');

//===================PROSES INSERT DATA===================
if (isset($_POST['tambah'])) {
  $idpasien = $_POST['idpasien'];
  $idkeluhan = $_POST['idkeluhan'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$umur = $_POST['umur'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
  $keluhan = $_POST['keluhan'];

  if(!empty($_POST['keluhan'])) {
    $hitung = count($_POST['keluhan']);
    foreach($_POST['keluhan'] as $tampung) {

      $query = mysqli_query($con,"INSERT INTO diagnosa VALUES ('$idpasien','$idkeluhan','$nama','$jk','$alamat','$umur','$pekerjaan','')") or die(mysql_error());

      if($query){
        for($x=0;$x<$hitung;$x++){
          mysqli_query($con,"INSERT INTO keluhan values('$idkeluhan','$keluhan[$x]')");
        }

        echo "<script> alert ('Data Baru Berhasil di Tambahkan');
				document.location='hitung.php';
				</script>";
      }

      else {
        //echo "<script> alert ('Data Baru Berhasil di Tambahkan');
        //document.location='../riwayat.php';
        //</script>";
        echo "<script> alert ('Data Baru Berhasil di Tambahkan');
				document.location='hitung.php';
				</script>";
      }
    }
  }

  if(empty($_POST['keluhan'])){
    echo "<script> alert ('Tidak ada gejala yang dipilih, silahkan ulangi lagi!');
    document.location='../index.php';
    </script>";
  }
}
?>
