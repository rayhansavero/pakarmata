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
      //$query = "INSERT INTO diagnosa ('id_pasien','id_keluhan','nm_pasien','jk','alamat_pasien','umur','pekerjaan') VALUES ('$idpasien','$idkeluhan','$nama','$jk','$alamat','$umur','$pekerjaan')";
      //$simpan = mysqli_query($con,$query) or die(mysqli_error($simpan));

      //if($simpan){
      if($query){
        for($x=0;$x<$hitung;$x++){
          mysqli_query($con,"INSERT INTO keluhan values('$idkeluhan','$keluhan[$x]')");
        }

        echo "<script> alert ('Data Baru Berhasil di Tambahkan');
				document.location='../riwayat.php';
				</script>";
      }

      else {
        echo "<script> alert ('Data Baru Berhasil di Tambahkan');
        document.location='../riwayat.php';
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
