<?php
// Define variables and initialize with empty values
$email = $firstname = $lastname = $password = $confirm_password = "";
$email_err = $firstname_err = $lastname_err = $password_err = $confirm_password_err = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/cms.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js?render=6LfpAYkeAAAAAMUniOkL8Ekj7yrLZC84tnhWlT0N"></script>
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

    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form method="POST">

            <label>Email address</label>
            <input type="text" name="email" id="form-email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
            <span class="invalid-feedback"><?php echo $email_err; ?></span>

            <label>First name</label>
            <input type="text" name="firstname" id="form-firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $firstname; ?>">
            <span class="invalid-feedback"><?php echo $firstname_err; ?></span>

            <label>Last name</label>
            <input type="text" name="lastname" id="form-lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $lastname; ?>">
            <span class="invalid-feedback"><?php echo $lastname_err; ?></span>

            <label>Password</label>
            <input type="password" name="password" id="form-password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" id="form-passwordCheck" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>

            <!-- <div class="g-recaptcha" data-sitekey="6LfpAYkeAAAAAMUniOkL8Ekj7yrLZC84tnhWlT0N"> </div> !-->

            <input type="submit" class="btn btn-primary" onclick="createUser()" value="Submit">
            <input type="reset" class="btn btn-secondary ml-2" value="Reset">

            <p>Already have an account? <a href="login">Login here</a>.</p>
        </form>
    </div>

    <?php require __DIR__ . '/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>