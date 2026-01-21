<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	// validate session and sign in
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leftmove</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./index.css">
	<style>
		body::before {
			content: "";
			position: absolute;
			inset: 0;
			background-position: center;
			background-image: url("/house_wallpaper.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			
			opacity: 0.4;
			filter: blur(8px);
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/Logo.png" alt="Leftmove" width="140">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Example</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Example 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-circle"></i> Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<main class="form-signin text-center w-25 rounded-4 m-auto px-4 py-4 justify-content-center position-absolute top-50 start-50 translate-middle" style="background-color: aliceblue; outline: 1px solid #006B7D;">
		  <form action="Login.php" method="post" novalidate>
			<h1 class="h3 mb-4 fw-normal">Sign In</h1>
			<div class="mb-3 form-floating">
			  <input type="email" class="form-control" name="email" placeholder="name@example.com">
			  <label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
			  <input type="password" class="form-control" name="password" placeholder="Password">
			  <label for="floatingPassword">Password</label>
			</div>
			<div class="form-check text-start my-3">
			  <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
			  <label class="form-check-label" for="checkDefault"> Remember me </label>
			</div>
			<button class="btn btn-leftmove w-100 py-2" type="submit">Sign in</button>
	  </form>
	</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>