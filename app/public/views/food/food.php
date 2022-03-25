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

    <?php 

    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
    
    require_once ($root . "/views/navbar.php");
    require_once ($root . "/Service/foodactivity_Service.php");
    require_once ($root . "/Service/restaurant_Service.php");
    require_once ($root . "/Service/restaurantTypesLink_Service.php");
    $restaurant_service = new restaurant_Service();
    $restaurantTypesLink_service = new restaurantTypesLink_Service();
    ?>

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

    <?php require __DIR__ . '/../cms/footer.php'; ?>

</body>

</html>