<?php require_once __DIR__ . '/check.php';?>

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
    <a class="navbar-brand me-6">
        <img src="../../img/logo.png" height="70" alt="Haarlem Festival" style="margin: auto;" />
    </a>
    <div class="container" style="float:right;">
        <div class="row">
            <div class="maintxt">
                Management Haarlem Festival
            </div>
        </div>
    </div>

    <hr width="100%;" color="#FAFAFA" size="40">

    <div class="wrapper" style="background-color:#FAFAFA;">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <form action="login" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn" value="Login" name="login" style="background-color:#844242; color: white; width: 120px;">
            </div>
            <p>Don't have an account? <a href="register">Sign up now</a>.</p>
        </form>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>