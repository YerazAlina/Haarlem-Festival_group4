<!DOCTYPE html>
<html lang="en">

<?php 
require_once("head.php");
?>

<body>
    <?php
require_once("navbar.php");
?>

    <header>
        <img class="eventimg" src="../img/food/food1.png">
        <h1 class="bottom-right" style="color:white;  transform: translate(-0%, -100%);">FOOD <br> IS INCREDIBLE</h1>


    </header>

    <h2>Restaurants</h2>
    <section id="">

        <section class="grid-container" id="">

            <section class="cuisine">
                <p class="filterlabelSubtitle"></p>
                <form method="post">
                    <select name="cuisine" id="" ">
                    <?php
                    
                    ?>
                </select>
            </form>
        </section>
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

    <?php require_once "cms/footer.php"; ?>

</body>

</html>