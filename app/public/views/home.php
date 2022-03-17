<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/head.php'; ?>

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
                            <a class="nav-link active" aria-current="page" href="#">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Festival info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">FAQ</a>
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


    <section class="row justify-content-center align-self-center text-center">
        <section class="col-3 h-100" style=" margin-top: 50px;">
            <a href="#" class="col-12" style="">
                <img class="eventimg" src="../img/loginhaarlem.png" width="300" height="600">
                <h2 class="bottom-right" style="color:white;  transform: translate(-0%, -100%);">Jazz</h2>

            </a>
        </section>

        <section class="col-3 h-100" style=" margin-top: 50px;">
            <a href="#" class="col-12" style="">
                <img class="eventimg" src="../img/loginhaarlem.png" width="300" height="600">
                <h2 class="bottom-right" style="color:white; transform: translate(-0%, -100%);">Dance</h2>

            </a>
        </section>

        <section class="col-3 h-100" style=" margin-top: 50px;">
            <a href="food" class="col-12" style="">
                <img class="eventimg" src="../img/loginhaarlem.png" width="300" height="600">
                <h2 class="bottom-right" style="color:white; transform: translate(-0%, -100%);">Food</h2>

            </a>
        </section>

        <section class="col-3 h-100" style=" margin-top: 50px;">
            <a href="#" class="col-12" style="">
                <img class="eventimg" src="../img/loginhaarlem.png" width="300" height="600">
                <h2 class="bottom-right" style="color:white; transform: translate(-0%, -100%);">History</h2>

            </a>
        </section>
    </section>

    <?php require __DIR__ . '/cms/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>