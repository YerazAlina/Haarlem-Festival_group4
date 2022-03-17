<!DOCTYPE html>
<html lang="en">
	<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../css/historystyle.css?<?php echo time(); ?>">

	</head>

<header>

</header>


<body>





<nav class="navbar navbar-expand-lg navbar-light bg-light home-page">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">
                <img src="../../img/logo.png" height="70" alt="Haarlem Festival" style="margin-top: -5px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a type="button" class="nav-link active" aria-current="page"
                                    href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Jazz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Food</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Dance</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">History</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center" style="gap: 20px;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                style="color: black; text-decoration: none;">ENG<span class="caret"></span></a>
        </div>
    </nav>
  
    
<p id="heading"> What day would you like to go on tour? </p> 
<p id="explanation"> *Tour route and price are identical for each day and each time slot. </p>

<form method="POST">
<div class="btn-group">
<button  type="button" name="thursday" value="28/07" class="btn btn-outline-danger btn-lg btn-block" onclick="location.href='historyPriceTime'"> <p id="dates">Thursday 28th of July  >></p></button>
<button type="button" name="friday" value="Thursday 29/07" class="btn btn-outline-danger btn-lg btn-block" onclick="location.href='historyPriceTime'"> <p id="dates">Friday 29th of July   >></p></button>
<button  type="button" name="saturday" value="30/07" class="btn btn-outline-danger btn-lg btn-block" onclick="location.href='historyPriceTime'"><p id="dates"> Saturday 30th of July >></p></button>
<button  type="button" name="sunday" value="31/07" class="btn btn-outline-danger btn-lg btn-block" onclick="location.href='historyPriceTime'"> <p id="dates">Sunday 31st of July   >></p></button>
</div>
</form>
<br>


    <h3 class="redline">__________________________________________________________________________________________________________________________________________________________________</h3>

<br><br>

<div class="row recommended-events">
    <h3 class="rec-title"> Complete the day </h3>
    <div class="col mt-md-4">
        <div class="card h-100 complete-day">
            <img src="../img/history/complete-the-day-food.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">"Event title" </h5>
                <p class="card-subtitle">Short description</p>
                <p> time of event </p>
                <button type="submit" class="btn btn-warning btn-md">tickets >> </button>

            </div>
        </div>
    </div>
    <div class="col mt-md-4">
        <div class="card h-100 complete-day">
            <img src="../img/history/complete-the-day-food2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">"Event title" </h5>
                <p class="card-subtitle">Short description</p>
                <p> time of event </p>
                <button type="submit" class="btn btn-warning btn-md">tickets >> </button>

            </div>
        </div>
    </div>
    <div class="col mt-md-4">
        <div class="card h-100 complete-day">
            <img src="../img/history/complete-the-day-gumbo-kings.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">"Event title" </h5>
                <p class="card-subtitle">Short description</p>
                <p> time of event </p>
                <button type="submit" class="btn btn-warning btn-md">tickets >> </button>

            </div>
        </div>
    </div>
    <div class="col mt-md-4">
        <div class="card h-100 complete-day">
            <img src="../img/history/complete-the-day-hardwell.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">"Event title" </h5>
                <p class="card-subtitle">Short description</p>
                <p> time of event </p>
                <button type="submit" class="btn btn-warning btn-md">tickets >> </button>

            </div>
        </div>
    </div>
</div>





<br><br>
<div class="card explore-more-card col-md-12">
    <div class="card-header explore-more">
        EXPLORE MORE
    </div>

    <div class="card-body-images">
        <div class="row">
            <div class="col-md-4">
                <img src="../img/history/explore-more-dance.png" alt="dance">
                <p class="explore-label"> Dance > </p>
            </div>

            <div class="col-md-4">
                 <img src="../img/history/explore-more-food.png" alt="food">
                <p class="explore-label"> Food > </p>


            </div>

            <div class="col-md-4">
                <img src="../img/history/explore-more-jazz.png" alt="jazz">
                <p class="explore-label"> Jazz > </p>

            </div>

        </div>
    </div>
</div>


<div class="container newsletter-box">
    <div class="container newsletter-inner">
	<h2>SIGN UP </h2>
        <h6> Sign up to our newsletter to get first access to our line-up announcements, limited ticket releases and all our latest news </h6>
        <br><br>
        <div class="row">
            <div class="col">

                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-warning btn-md">SUBSCRIBE</button>
            </div>
        </div>
    </div>
</div>

<?php require __DIR__ . '../../footer.php';?>


</body>
</html>