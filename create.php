<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="h-100">

	<form action="store.php" method="POST">

		<div class="container h-100">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-10 col-md-8 col-lg-6">
					<!-- Form -->
					<form class="form-example" action="" method="post" data-bitwarden-watching="1">
						<h1 class="text-center">Add your personal data</h1>
						<p class="description text-center">Your data will be stored in a secure place.</p>
						<!-- Input fields -->
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control username" placeholder="Full Name" name="name">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="text" class="form-control" placeholder="name@mail.com" name="email">
						</div>
						<div class="form-group">
							<label for="website">Website:</label>
							<input type="text" class="form-control " placeholder="www.website.com" name="website">
						</div>
						<div class="form-group">
							<label for="age">Age:</label>
							<input type="int" class="form-control " placeholder="22" name="age">
						</div>
						<div class="form-group">
							<label for="comment">Comment:</label>
							<textarea class="form-control" placeholder="I have a cat ....." rows="3" name="comment"></textarea>
						</div><br>

						<button type="submit" class="btn btn-primary">Submit</button>
						<!-- End input fields -->
					</form>
					<!-- Form end -->
				</div>
			</div>
		</div>




</body>

</html>