<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
          content="Haarlem, festival, jazz, food, history, party, feest, geschiedenis, eten, restaurant">
    <meta name="description" content="Haarlem Festival">
    <meta name="author" content="Haarlem Festival">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/jazzevents.css?<?php echo time(); ?>" />
    <title>Food - Haarlem Festival</title>

</head>

<body class="food-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #A42323">
        <div class="container-fluid">
            <a class="navbar-brand" href="home"> <img src="../../img/logo.png" alt="logo" width="116" height="34"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="food">FOOD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jazzevents">JAZZ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DANCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HISTORY</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Dutch</a></li>
                        </ul>
                    <!-- </li>

                    <li class="nav-item">
                        <img src="">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">HISTORY</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <img class="eventimg" src="../img/food/food1.png">
        <h1 class="bottom-right" style="color:white;  transform: translate(-0%, -100%);">FOOD <br> IS INCREDIBLE</h1>


    </header>

    <h2>Restaurants</h2>
    <section id="">

        <!-- <section class="grid-container" id="">

            <section class="cuisine">
                <p class="filterlabelSubtitle"></p>
                <form method="post">
                    <select name="cuisine" id="" ">
                    
                </select>
            </form>
        </section> -->
        <section class=" searchbar">
                        <p class="filterlabelSubtitle">Search for a restaurant</p>
                        <form method="post">
                            <section id="">
                                <input type="text" placeholder="Search.." id="search" name="searchterm">
                                <button type="submit" class="button1" name="searchbutton">Search</button>
                            </section>
                        </form>
            </section>
        </section>
        

    </section>

    <section id="">
        <section class="foodRestaurantName">
            <h3 class="restaurantNameFood">restaurantName </h3>
        </section>
    </section>

    <br><br>



    <div class="card explore-more-card col-md-12">
        <div class="card-header explore-more">
            EXPLORE MORE
        </div>

        <div class="card-body-images">
            <div class="row">
                <div class="col-md-4">
                    <img src="../../img/jazzevents/dance-image.png" alt="dance">
                    <p class="explore-label"> Dance > </p>
                </div>

                <div class="col-md-4">
                    <img src="../../img/jazzevents/food-image.png" alt="food">
                    <p class="explore-label"> Food > </p>


                </div>

                <div class="col-md-4">
                    <img src="../../img/jazzevents/history-image.png" alt="history">
                    <p class="explore-label"> History > </p>

                </div>

            </div>
        </div>
    </div>


    <div class="container newsletter-box">
        <div class="container newsletter-inner">
            <h2>SIGN UP </h2>
            <h6> Sign up to our newsletter to get first access to our line-up announcements, limited ticket releases and
                all our latest news </h6>
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

    <footer class="text-center text-white" style="background-color: #EFE0E0;">
        <div class="container pt-4">
            <section class="mb-4" style="color: black;">
                &copy; 2022 Copyright Haarlem Festival
            </section>
        </div>
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.06);">
            <a class="text-dark">Privacy Policy / Terms of Use / Cookie Policy / Access Equality</a>
        </div>
    </footer>

</body>

</html>