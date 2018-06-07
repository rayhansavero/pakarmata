<?php
$con = mysqli_connect('localhost','root','','mata');



//===================PROSES INSERT DATA===================
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$umur = $_POST['umur'];
	$pekerjaan = $_POST['pekerjaan'];
	$alamat = $_POST['alamat'];
	$query = mysqli_query($con,"INSERT INTO diagnosa VALUES ('$id','$nama','$jk','$alamat','$umur','$pekerjaan','','')") or die(mysql_error());
	echo "<script> alert ('Data Baru Berhasil di Tambahkan');
				document.location='../index.php';
				</script>
				";
	//header("location:../index.php");
}
?>
