<?php //-----------------KONEKSI DB-------------------
$con = mysqli_connect('localhost','root','','mata');
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
					<a href="index.php">
						<i class="material-icons">home</i> Home
					</a>
				</li>
				<li>
					<a href="">
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


				<div class="col-md-12">
					<div class="card card-nav-tabs card-plain">
						<div class="header header-primary">
							<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
							<div class="nav-tabs-navigation">
								<div class="nav-tabs-wrapper">
									<ul class="nav nav-tabs" data-tabs="tabs">
										<li class="active"><a data-toggle="tab">
											<i class="material-icons">library_books</i>
											Riwayat Diagnosa Penyakit Mata</a>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<div class="content">
							<div class="tab-content">

								<table class="table">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th>Nama Pasien</th>
											<th>Jenis Kelamin</th>
											<th>Alamat Pasien</th>
											<th>Umur</th>
											<th>Pekerjaan</th>
											<th>Gejala yang dirasakan</th>
											<th>Hasil Diagnosa</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$query = mysqli_query($con,"SELECT * FROM diagnosa");
										while ($data = mysqli_fetch_row($query))
										{
										?>
										<tr>
											<td class="text-center"><?php echo $no++; ?></td>
											<td><?php echo $data[2]; ?></td>
											<td><?php echo $data[3]; ?></td>
											<td><?php echo $data[4]; ?></td>
											<td><?php echo $data[5]; ?></td>
											<td><?php echo $data[6]; ?></td>
											<td>
												<?php
												//echo $data[1];
												$query2 = mysqli_query($con,"SELECT * FROM keluhan WHERE id_keluhan='$data[1]'");
												while ($data = mysqli_fetch_row($query2))
												{
													//echo $data[1];
													$query3 = mysqli_query($con,"SELECT * FROM gejala WHERE id_gejala='$data[1]'");
													while ($data = mysqli_fetch_row($query3))
													{
														echo $data[1];
														?>
														<br>
														<?php
													}
												}
												?>
											</td>
											<td><?php echo $data[7]; ?></td>											
										</tr>
										<?php } ?>
									</tbody>
								</table>

							</div>
						</div>

					</div>
				</div>
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
