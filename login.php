<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Login</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

	<body>

		<section id="login" class="text-center">
			<div class="container">
				<h2>Masuk</h2>
			</div>
			<form role="form" method="POST" action="proses.php">
				<div class="container">
					<div class="row g-4">
						<div class="col-md-6">
						  <label for="username">Username</label>
						  <input type="text" class="form-control" name="username" placeholder="Usrname">
						</div>
						
						<div class="col-md-6">
						  <label for="password">Password</label>
						  <input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						
						<div class="col-md-6">
						   <input type="submit" name="login" class="btn" style="background-color: #334756;width: 100px;color: white;" value="Login">
						</div>
						<div>
							<a href="index.html" class="btn-close fixed-top" aria-label="Close"></a>
						</div>
					</div>
				</div>
			</form>
		</section>
	</body>
</html>