<?php
if (isset($_GET['pesan'])) {
	if ($_GET['pesan'] == "gagal") {
		echo '<script type = "text/JavaScript">';
		echo 'alert("Silahkan Masukkan Username dan Password dengan Benar")';
		echo '</script>';
	}
}
?>


<html>
<head>
	<!-- ======= CSS ======= -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!-- ===== BOX ICON ONLINE ===== -->
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
	
	<!-- ===== JAVASCRIPT ANIMASI ===== -->
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	
	<title>Login</title>
</head>

<body>
	<div class="l-form">
		<div class="shape1"></div>
		<div class="shape2"></div>
		<div class="form">
		<lottie-player class="form__img" src="https://assets5.lottiefiles.com/packages/lf20_mrmg8x7w.json" background="transparent" speed="1" style="width: 500px; height: 500px;" loop autoplay></lottie-player>

		<form id="login" method="post" name="login" action="login_proses.php" class="form__content">
			<h1 class="form__title">Welcome!</h1>

			<div class="form__div form__div-one">
				<div class="form__icon">
					<i class='bx bx-user-circle'></i>
				</div>

				<div class="form__div-input">
					<label for="" class="form__label">Username</label>
					<input type="text" name="username" class="form__input" id="username">
				</div>
			</div>

			<div class="form__div">
				<div class="form__icon">
					<i class='bx bx-lock'></i>
				</div>

				<div class="form__div-input">
					<label for="" class="form__label">Password</label>
					<input type="password" name="pwd" class="form__input" id="pwd">
				</div>
			</div>
			<br><br>
			<input name="login" type="submit" class="form__button" id="login" value="Login">
		
			
		</form>

	</div>

	<!-- ===== MAIN JS ===== -->
	<script src="assets/js/main.js"></script>
</body>
</html>