<?php
$con = mysqli_connect('localhost','root','','mata');

$dataakhir = mysqli_query($con,"SELECT id_keluhan FROM keluhan ORDER BY id_keluhan DESC LIMIT 1");
$simpan = mysqli_fetch_array($dataakhir);
//echo $simpan['id_keluhan'];

$ambildata = $simpan['id_keluhan'];
//echo $ambildata;

function np_bleferitis()
{
  $Gejala1 = SELECT EXIST (SELECT * FROM keluhan WHERE );

}
