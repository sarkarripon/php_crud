<?php
//database connection
include 'connection.php';


//Connetion check
if (!$conn) {
	die("Connecon Failed" . mysqli_connect_error());
}

// Update data
$id = $_GET['editid'];
$sql = "select * from `testtable` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// print_r($row);


$name = $row['name'];
$email = $row['email'];
$website = $row['website'];
$comment = $row['comment'];
$age = $row['age'];

// echo $name;

?>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="h-100">


	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col-10 col-md-8 col-lg-6">
				<!-- Form -->
				<form class="form-example" action="update.php?id=<?php echo $id; ?>" method="post" data-bitwarden-watching="1">
					<h1>Add your personal data</h1>
					<p class="description">Your data will be stored in a secure place.</p>
					<!-- Input fields -->
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control username" placeholder="Full Name" name="name" value="<?php echo $name; ?>">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" placeholder="name@mail.com" name="email" value="<?php echo $email; ?>">
					</div>
					<div class="form-group">
						<label for="website">Website:</label>
						<input type="text" class="form-control " placeholder="www.website.com" name="website" value="<?php echo $website; ?>">
					</div>
					<div class="form-group">
						<label for="age">Age:</label>
						<input type="int" class="form-control " placeholder="22" name="age" value="<?php echo $age; ?>">
					</div>
					<div class="form-group">
						<label for="comment">Comment:</label>
						<textarea class="form-control" placeholder="I have a cat ....." rows="3" name="comment"><?php echo $comment; ?></textarea>
					</div><br>

					<button type="submit" class="btn btn-primary">Update</button>
					<!-- End input fields -->
				</form>
				<!-- Form end -->
			</div>
		</div>
	</div>




</body>

</html>