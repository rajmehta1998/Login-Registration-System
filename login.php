<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login</h2>
					<form method="post" action="validation.php">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Enter Username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
				<div class="col-md-6 login-right">
					<h2>Register</h2>
					<form method="post" action="registration.php">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Enter Username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" name="cpassword" class="form-control" placeholder="Re-Enter Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>
		<div id="footer">
					Copyright &copy; 2019 Raj Mehta.
			</div>
		</div>
	</body>
</html>