<?php //-----------------KONEKSI DB-------------------
$con = mysqli_connect('localhost','root','','mata');

//-----------------FUNGSI MEMBUAT ID PASIEN-------------------
function idpasien() {
	$con = mysqli_connect('localhost','root','','mata');
	$query = mysqli_query($con,"SELECT id_pasien FROM diagnosa ORDER BY id_pasien DESC LIMIT 0,1") or die(mysql_error());
	list ($no_temp) = mysqli_fetch_row($query);

	if ($no_temp == '') {
		$no_urut = 'P01';

		} else {
		$jum = substr($no_temp,1,3);
		$jum++;
		if($jum <= 9) {
			$no_urut = 'P0' . $jum;
		}
		elseif ($jum <= 99) {
			$no_urut = 'P' . $jum;
		}
		else {
			die("Nomor urut melebih batas");
		}
	}
		return $no_urut;
}

$idpasien = idpasien();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sistem Pakar Mata</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">\
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
	    <a href="http://www.creative-tim.com">
				<div class="logo-container">
					<div class="logo">
						<img src="assets/img/logo.png" >
					</div>
					<div class="brand">
						Creative Tim
					</div>
				</div>
	    </a>
	   </div>

	   <div class="collapse navbar-collapse" id="navigation-index">
	   	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="components-documentation.html" target="_blank">
						<i class="material-icons">library_books</i> Riwayat
					</a>
				</li>
				<li>
					<a href="" target="_blank">
						<i class="material-icons">power_setting_new</i> Logout
					</a>
				</li>
			</ul>
		</div>

	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/eye2.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<h1>Pakar Mata.</h1>
						<h3>pakar terbaik untuk diagnosa penyakit pada mata anda.</h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="section">
			<div class="container">


				<div class="col-md-6">
					<div class="card card-nav-tabs card-plain">
						<div class="header header-primary">
							<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
							<div class="nav-tabs-navigation">
								<div class="nav-tabs-wrapper">
									<ul class="nav nav-tabs" data-tabs="tabs">
										<li class="active"><a data-toggle="tab">
											<i class="material-icons">face</i>
											Data Diri Pasien</a>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<div class="content">
							<div class="tab-content">
                                <?php
                                    $tampil = mysqli_query($con, "select * from diagnosa");
                                         while($datadiri = mysqli_fetch_array($tampil)){
                                    ?>
                                   
                                        Nama : <?php echo $datadiri['nm_pasien'];?><br>
                                        Jenis Kelamin : <?php echo $datadiri['jk'];?><br>
                                        Alamat : <?php echo $datadiri['alamat_pasien'];?><br>
                                        Umur : <?php echo $datadiri['umur'];?><br>
                                        Pekerjaan : <?php echo $datadiri['pekerjaan'];?><br>
                                   
                                    <?php } ?>
							</div>
						</div>


					</div>
				</div>


				<div class="col-md-6">
					<div class="card card-nav-tabs card-plain">
						<div class="header header-primary">
							<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
							<div class="nav-tabs-navigation">
								<div class="nav-tabs-wrapper">
									<ul class="nav nav-tabs" data-tabs="tabs">
										<li class="active"><a data-toggle="tab">
											<i class="material-icons">healing</i>
											Gejala yang Dirasakan</a>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<div class="content">
							<div class="tab-content">

							</div>
						</div>						

					</div>
				</div>

				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h4>Sebelum anda klik tombol submit, pastikan data yang dicentang sesuai dengan gejala-gejala yang anda alami agar diagnosa yang kami berikan tepat dan benar</h4>
					</div>
					<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
						<button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
					</div>
				</div>
</form>

			</div>
		</div>

	</div>
    <footer class="footer">
	    <div class="container">
	        <div class="copyright pull-right">
	            &copy; 2018, made with <i class="material-icons">favorite</i> by Creative Tim for a better web.
	        </div>
	    </div>
	</footer>
</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>


