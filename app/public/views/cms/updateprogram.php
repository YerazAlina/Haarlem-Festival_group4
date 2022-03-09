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
            <li class="breadcrumb-item active">Update Program</li>
        </ol>
    </nav>

    <div style="padding: 10px;">
        <p>show events<a>
                <button type="button" class="btn btn-light" onclick="checkButtonFunction()">Jazz</button>
                <button type="button" class="btn btn-light" onclick="checkButtonFunction()">Food</button>
                <button type="button" class="btn btn-light" onclick="checkButtonFunction()">Dance</button>
                <button type="button" class="btn btn-light" onclick="checkButtonFunction()">History</button>
            </a></p>
    </div>

    <script>
        function checkButtonFunction() {
            document.getElementById("field2").value = document.getElementById("field1").value;
        }
    </script>

    <div class="input-group rounded" style="width: 240px; padding: 10px;">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>