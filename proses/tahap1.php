<?php
$con = mysqli_connect('localhost','root','','mata');

$keluhan = $_POST['keluhan'];

function ambil_data() {
  $query1 = mysqli_query($con,"SELECT * FROM diagnosa WHERE id_keluhan=$_POST['keluhan']")
  while ($data = mysqli_fetch_row($query1))
  {
    $query2 = mysqli_query($con,"SELECT * FROM keluhan WHERE id_keluhan='$data[1]'");
    while ($data = mysqli_fetch_row($query2))
    {
      //echo $data[1];
      $query3 = mysqli_query($con,"SELECT * FROM gejala WHERE id_gejala='$data[1]'");
      while ($data = mysqli_fetch_row($query3))
      {
        //echo $data[1];
      }
    }
  }
}
?>
