<?php 
$error = "";
include ('koneksi.php');
if (isset($_POST['regis'])) {
	$nama = htmlspecialchars($_POST['nama']);
    $hp = htmlspecialchars($_POST['hp']);
    $email = htmlspecialchars($_POST['email']);
    $pw1 = htmlspecialchars($_POST['pw1']);
    $pw2 = htmlspecialchars($_POST['pw2']);

	$a = mysqli_query($conn, "SELECT * FROM user WHERE nama = '$nama'");
	$b = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

	// die;

	if(mysqli_num_rows($a) == 0) {
		if (mysqli_num_rows($b) == 0) {
			if ($pw1 == $pw2) {
				$password = password_hash($pw1, PASSWORD_DEFAULT);
				$query = mysqli_query($conn, "INSERT INTO user (nama,email,hp,password) VALUES ('$nama','$email','$hp','$password')");
					if ($query) {
						return $conn->affected_rows;
					}else {
						mysqli_error($conn);
					}
					return $conn->affected_rows;
			} else {
				$error = "Password Tidak Sama";
			}
		} else {
			$error = "Email Telah Terdaftar";
		}
	} else {
		$error = "Username Telah Terdaftar";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SmartStation</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<?php if ($error != "") { ?>
				<div class="alert alert-danger" role="alert">
					<?=$error?>
				</div>
			<?php } ?>
			<br>
			<h3 class="text-center">Login SmartStation</h3>
			<div class="login-form">
				<form action="" method="post">
				<div class="form-group form-floating-label">
					<input id="username" name="username" type="text" class="form-control input-border-bottom" required>
					<label for="username" class="placeholder">Username</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
					<label for="password" class="placeholder">Password</label>
					<div class="show-password">
						<i class="icon-eye"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="rememberme">
						<label class="custom-control-label" for="rememberme" require>Remember Me</label>
					</div>
					
					<a href="#" class="link float-right">Lupa Password ?</a>
				</div>
				<div class="form-action mb-3">
					<button name="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
				</div>
			</form>
				<div class="login-account">
					<span class="msg">Tidak punya akun ?</span>
					<a href="#" id="show-signup" class="link">Daftar</a>
				</div>
			</div>
		</div>
		<form action="" method="post">
		<div class="container container-signup animated fadeIn">
			<h3 class="text-center">Register SmartStation</h3>
			<div class="login-form">
				<div class="form-group form-floating-label">
					<input  id="fullname" name="nama" type="text" class="form-control input-border-bottom" required>
					<label for="fullname" class="placeholder">Nama Lengkap</label>
				</div>
				<div class="form-group form-floating-label">
					<input id="email" name="hp" type="number" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">No Hp</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
					<label for="email" class="placeholder">Email</label>
				</div>
				<div class="form-group form-floating-label">
					<input  id="passwordsignin" name="pw1" type="password" class="form-control input-border-bottom" required>
					<label for="passwordsignin" class="placeholder">Password</label>
					<div class="show-password">
						<i class="icon-eye"></i>
					</div>
				</div>
				<div class="form-group form-floating-label">
					<input  id="confirmpassword" name="pw2" type="password" class="form-control input-border-bottom" required>
					<label for="confirmpassword" class="placeholder">Ulangi Password</label>
					<div class="show-password">
						<i class="icon-eye"></i>
					</div>
				</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
					</div>
				</div>
				<div class="form-action">
					<a href="#" id="show-signin" class="btn btn-danger btn-link btn-login mr-3">Cancel</a>
					<button name="regis" class="btn btn-primary btn-rounded btn-login">Daftar</button>
				</div>
				</form>
			</div>
		</div>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/atlantis.min.js"></script>
</body>
</html>