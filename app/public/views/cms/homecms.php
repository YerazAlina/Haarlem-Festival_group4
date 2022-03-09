<?php session_start();
if (isset($_SESSION['username'])) {
	$name = $_SESSION['username'];
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">
</head>

<body>
	<?php require __DIR__ . '/navigation.php'; ?>

	<br>

	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Home</li>
		</ol>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col">
				<p style="color: #A42323; font-weight: bold; font-size:20px; text-align:center; ">KEEP IN MIND <br>
					THE POLICY FOR ALL THE ATTENDEES</p>
				<p style="font-weight:bold; font-size:18px;">Festival policies</p>

				<p style="font-weight:550;">What to bring with you</p>
				<ul style="list-style-type: square; font-weight:450;">
					<li>Your Ticket</li>
					<li>Photo ID</li>
					<li>QR Code (Negative test / Vaccination)</li>
				</ul>

				<p style="font-weight:550;">Festival policies</p>
				<ul style="list-style-type: square; font-weight:450;">
					<li>No sitting on designated dance floor areas</li>
					<li>No refunds or exchanges</li>
					<li>No unauthorized vendors</li>
					<li>No smoking</li>
				</ul>

				<a href="updateprogram">
					<button type="button" class="btn btn-light" style="background-color:#844242; color:white; height:50px; width: 240px;">Visit the website</button>
				</a>
			</div>

			<div class="col-8 d-flex justify-content-center text-center">
				<!-- <button style="font-size:24px; background-color:#A42323; color:white; height:50px;">Update Program <i class="fa fa-calendar"></i></button> -->
				<a href="updateprogram">
					<button type="button" class="btn btn-light" style="background-color:#A42323; color:white; height:50px;">Update Program</button>
				</a>
				<a href="invoices">
					<button type="button" class="btn btn-light" style="background-color:#A42323; color:white; height:50px;">Invoices</button>
				</a>
			</div>

		</div>
	</div>

	<?php require __DIR__ . '/footer.php'; ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>