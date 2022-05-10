<?php 
session_start();
$_SESSION['login']=false;
?>

<!DOCTYPE html>
<html>
  <head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
  <body>	
		<div class="modal modal-signin d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
			<div class="modal-dialog" role="document">
				<div class="modal-content rounded-5 shadow">
					<div class="modal-header p-5 pb-4 border-bottom-0">
						<h2 class="fw-bold mb-0">Log In Untuk Melanjutkan</h2>
					</div>

					<div class="modal-body p-5 pt-0">
						<form action="setLogin.php"  method="post">
							<div class="form-floating mb-3">
								<input type="text" class="form-control rounded-4" id="floatingInput" placeholder="Username" name="username">
								<label for="floatingInput">Username</label>
							</div>
							<div class="form-floating mb-3">
								<input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="password">
								<label for="floatingPassword">Password</label>
							</div>
							<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="submit">Log In</button>
						</form>
					</div>
				</div>
			</div>
			<footer class="fixed-bottom mt-auto py-3 bg-light">
		<div class="container">	
			<span class="text-muted">© 2022 by Muhammad Taufik</span>
		</div>
	</footer>
		</div>
  </body>
</html>

