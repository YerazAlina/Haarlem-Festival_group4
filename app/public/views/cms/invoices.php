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
			<li class="breadcrumb-item">Home</li>
			<li class="breadcrumb-item active">Invoices</li>
		</ol>
	</nav>

	<p style="text-align:center;">COMMING SOON</p>

	<?php require __DIR__ . '/footer.php'; ?>
</body>

</html>