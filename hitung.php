<?php
$con = mysqli_connect('localhost','root','','mata');
?>
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<div class="row">
  <div class="col-md-2">
    <table >
      <tr>
        <th>Bleferitis</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Jumlah</th>
      </tr>
      <tr>
        <td>Gejala1</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Bleferitis' AND g1='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Bleferitis' AND g1='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala2</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Bleferitis' AND g2='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Bleferitis' AND g2='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala3</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Bleferitis' AND g3='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Bleferitis' AND g3='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala4</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Bleferitis' AND g4='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Bleferitis' AND g4='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala5</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Bleferitis' AND g5='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Bleferitis' AND g5='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala6</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Bleferitis' AND g6='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Bleferitis' AND g6='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala7</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Bleferitis' AND g7='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Bleferitis' AND g7='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala8</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Bleferitis' AND g8='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Bleferitis' AND g8='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala9</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Bleferitis' AND g9='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Bleferitis' AND g9='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala10</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Bleferitis' AND g10='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Bleferitis' AND g10='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala11</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Bleferitis' AND g11='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Bleferitis' AND g11='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala12</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Bleferitis' AND g12='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Bleferitis' AND g12='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala13</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Bleferitis' AND g13='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Bleferitis' AND g13='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala14</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Bleferitis' AND g14='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Bleferitis' AND g14='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala15</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Bleferitis' AND g15='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Bleferitis' AND g15='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala16</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Bleferitis' AND g16='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Bleferitis' AND g16='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala17</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Bleferitis' AND g17='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Bleferitis' AND g17='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala18</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Bleferitis' AND g18='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Bleferitis' AND g18='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Bleferitis' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Bleferitis' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Bleferitis' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Bleferitis' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala20</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Bleferitis' AND g20='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Bleferitis' AND g20='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Bleferitis' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Bleferitis' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Bleferitis' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Bleferitis' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala22</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Bleferitis' AND g22='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Bleferitis' AND g22='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala23</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Bleferitis' AND g23='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Bleferitis' AND g23='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala24</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Bleferitis' AND g24='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Bleferitis' AND g24='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala25</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Bleferitis' AND g25='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Bleferitis' AND g25='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Bleferitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
      </tr>
    </table>
  </div>

  <div class="col-md-2">
    <table >
      <tr>
        <th>Dakriosistitis</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Jumlah</th>
      </tr>
      <tr>
        <td>Gejala1</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Dakriosistitis' AND g1='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Dakriosistitis' AND g1='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala2</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Dakriosistitis' AND g2='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Dakriosistitis' AND g2='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala3</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Dakriosistitis' AND g3='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Dakriosistitis' AND g3='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala4</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Dakriosistitis' AND g4='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Dakriosistitis' AND g4='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala5</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Dakriosistitis' AND g5='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Dakriosistitis' AND g5='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala6</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Dakriosistitis' AND g6='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Dakriosistitis' AND g6='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala7</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Dakriosistitis' AND g7='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Dakriosistitis' AND g7='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala8</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Dakriosistitis' AND g8='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Dakriosistitis' AND g8='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala9</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Dakriosistitis' AND g9='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Dakriosistitis' AND g9='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala10</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Dakriosistitis' AND g10='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Dakriosistitis' AND g10='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala11</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Dakriosistitis' AND g11='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Dakriosistitis' AND g11='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala12</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Dakriosistitis' AND g12='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Dakriosistitis' AND g12='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala13</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Dakriosistitis' AND g13='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Dakriosistitis' AND g13='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala14</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Dakriosistitis' AND g14='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Dakriosistitis' AND g14='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala15</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Dakriosistitis' AND g15='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Dakriosistitis' AND g15='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala16</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Dakriosistitis' AND g16='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Dakriosistitis' AND g16='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala17</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Dakriosistitis' AND g17='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Dakriosistitis' AND g17='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala18</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Dakriosistitis' AND g18='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Dakriosistitis' AND g18='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Dakriosistitis' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Dakriosistitis' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Dakriosistitis' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Dakriosistitis' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala20</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Dakriosistitis' AND g20='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Dakriosistitis' AND g20='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Dakriosistitis' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Dakriosistitis' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Dakriosistitis' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Dakriosistitis' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala22</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Dakriosistitis' AND g22='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Dakriosistitis' AND g22='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala23</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Dakriosistitis' AND g23='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Dakriosistitis' AND g23='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala24</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Dakriosistitis' AND g24='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Dakriosistitis' AND g24='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala25</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Dakriosistitis' AND g25='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Dakriosistitis' AND g25='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Dakriosistitis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
      </tr>
    </table>
  </div>

  <div class="col-md-2">
    <table >
      <tr>
        <th>Episkleritis</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Jumlah</th>
      </tr>
      <tr>
        <td>Gejala1</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Episkleritis' AND g1='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Episkleritis' AND g1='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala2</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Episkleritis' AND g2='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Episkleritis' AND g2='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala3</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Episkleritis' AND g3='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Episkleritis' AND g3='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala4</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Episkleritis' AND g4='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Episkleritis' AND g4='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala5</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Episkleritis' AND g5='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Episkleritis' AND g5='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala6</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Episkleritis' AND g6='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Episkleritis' AND g6='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala7</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Episkleritis' AND g7='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Episkleritis' AND g7='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala8</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Episkleritis' AND g8='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Episkleritis' AND g8='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala9</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Episkleritis' AND g9='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Episkleritis' AND g9='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala10</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Episkleritis' AND g10='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Episkleritis' AND g10='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala11</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Episkleritis' AND g11='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Episkleritis' AND g11='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala12</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Episkleritis' AND g12='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Episkleritis' AND g12='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala13</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Episkleritis' AND g13='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Episkleritis' AND g13='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala14</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Episkleritis' AND g14='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Episkleritis' AND g14='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala15</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Episkleritis' AND g15='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Episkleritis' AND g15='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala16</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Episkleritis' AND g16='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Episkleritis' AND g16='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala17</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Episkleritis' AND g17='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Episkleritis' AND g17='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala18</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Episkleritis' AND g18='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Episkleritis' AND g18='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Episkleritis' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Episkleritis' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Episkleritis' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Episkleritis' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala20</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Episkleritis' AND g20='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Episkleritis' AND g20='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Episkleritis' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Episkleritis' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Episkleritis' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Episkleritis' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala22</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Episkleritis' AND g22='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Episkleritis' AND g22='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala23</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Episkleritis' AND g23='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Episkleritis' AND g23='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala24</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Episkleritis' AND g24='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Episkleritis' AND g24='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala25</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Episkleritis' AND g25='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Episkleritis' AND g25='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Episkleritis'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
      </tr>
    </table>
  </div>

  <div class="col-md-2">
    <table >
      <tr>
        <th>Glaukoma</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Jumlah</th>
      </tr>
      <tr>
        <td>Gejala1</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Glaukoma' AND g1='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Glaukoma' AND g1='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala2</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Glaukoma' AND g2='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Glaukoma' AND g2='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala3</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Glaukoma' AND g3='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Glaukoma' AND g3='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala4</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Glaukoma' AND g4='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Glaukoma' AND g4='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala5</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Glaukoma' AND g5='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Glaukoma' AND g5='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala6</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Glaukoma' AND g6='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Glaukoma' AND g6='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala7</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Glaukoma' AND g7='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Glaukoma' AND g7='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala8</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Glaukoma' AND g8='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Glaukoma' AND g8='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala9</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Glaukoma' AND g9='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Glaukoma' AND g9='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala10</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Glaukoma' AND g10='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Glaukoma' AND g10='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala11</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Glaukoma' AND g11='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Glaukoma' AND g11='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala12</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Glaukoma' AND g12='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Glaukoma' AND g12='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala13</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Glaukoma' AND g13='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Glaukoma' AND g13='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala14</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Glaukoma' AND g14='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Glaukoma' AND g14='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala15</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Glaukoma' AND g15='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Glaukoma' AND g15='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala16</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Glaukoma' AND g16='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Glaukoma' AND g16='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala17</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Glaukoma' AND g17='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Glaukoma' AND g17='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala18</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Glaukoma' AND g18='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Glaukoma' AND g18='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Glaukoma' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Glaukoma' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Glaukoma' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Glaukoma' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala20</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Glaukoma' AND g20='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Glaukoma' AND g20='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Glaukoma' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Glaukoma' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Glaukoma' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Glaukoma' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala22</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Glaukoma' AND g22='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Glaukoma' AND g22='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala23</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Glaukoma' AND g23='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Glaukoma' AND g23='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala24</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Glaukoma' AND g24='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Glaukoma' AND g24='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala25</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Glaukoma' AND g25='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Glaukoma' AND g25='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Glaukoma'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
      </tr>
    </table>
  </div>

  <div class="col-md-2">
    <table >
      <tr>
        <th>Hordeolum</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Jumlah</th>
      </tr>
      <tr>
        <td>Gejala1</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Hordeolum' AND g1='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Hordeolum' AND g1='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g1) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g1)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala2</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Hordeolum' AND g2='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Hordeolum' AND g2='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g2) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g2)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala3</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Hordeolum' AND g3='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Hordeolum' AND g3='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g3) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g3)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala4</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Hordeolum' AND g4='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Hordeolum' AND g4='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g4) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g4)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala5</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Hordeolum' AND g5='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Hordeolum' AND g5='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g5) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g5)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala6</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Hordeolum' AND g6='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Hordeolum' AND g6='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g6) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g6)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala7</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Hordeolum' AND g7='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Hordeolum' AND g7='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g7) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g7)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala8</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Hordeolum' AND g8='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Hordeolum' AND g8='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g8) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g8)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala9</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Hordeolum' AND g9='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Hordeolum' AND g9='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g9) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g9)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala10</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Hordeolum' AND g10='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Hordeolum' AND g10='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g10) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g10)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala11</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Hordeolum' AND g11='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Hordeolum' AND g11='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g11) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g11)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala12</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Hordeolum' AND g12='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Hordeolum' AND g12='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g12) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g12)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala13</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Hordeolum' AND g13='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Hordeolum' AND g13='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g13) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g13)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala14</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Hordeolum' AND g14='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Hordeolum' AND g14='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g14) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g14)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala15</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Hordeolum' AND g15='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Hordeolum' AND g15='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g15) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g15)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala16</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Hordeolum' AND g16='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Hordeolum' AND g16='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g16) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g16)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala17</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Hordeolum' AND g17='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Hordeolum' AND g17='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g17) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g17)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala18</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Hordeolum' AND g18='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Hordeolum' AND g18='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g18) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g18)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Hordeolum' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Hordeolum' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala19</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Hordeolum' AND g19='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Hordeolum' AND g19='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g19) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g19)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala20</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Hordeolum' AND g20='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Hordeolum' AND g20='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g20) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g20)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Hordeolum' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Hordeolum' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr><!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala21</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Hordeolum' AND g21='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Hordeolum' AND g21='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g21) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g21)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala22</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Hordeolum' AND g22='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Hordeolum' AND g22='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g22) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g22)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala23</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Hordeolum' AND g23='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Hordeolum' AND g23='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g23) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g23)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala24</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Hordeolum' AND g24='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Hordeolum' AND g24='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g24) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g24)'];
          ?>
        </td>
      </tr>
      <!---------------------------------------------------------------------------------------------------------------->
      <tr>
        <td>Gejala25</td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Hordeolum' AND g25='1'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Hordeolum' AND g25='0'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
        <td>
          <?php
          $gejala = mysqli_query($con, "SELECT COUNT(g25) FROM casebase WHERE penyakit='Hordeolum'");
          $tampil = mysqli_fetch_array($gejala);
          echo $tampil['COUNT(g25)'];
          ?>
        </td>
      </tr>
    </table>
  </div>
</div>
