<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A42323;">
    <a class="navbar-brand me-6">
        <img src="../../img/logo.png" height="70" alt="Haarlem Festival" style="margin-top: -5px;" />
    </a>
    <div class="container">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="homecms">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="updateprogram">Update Program</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: white;" href="invoices">Invoices</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex align-items-center">
        <a href="logout">
            <button type="button" class="btn btn-link px-3 me-2">
                Logout
            </button>
        </a>
    </div>

    <div class="d-flex align-items-center" style="gap: 20px;">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: white; text-decoration: none;">ENG<span class="caret"></span></a>
        <a class="nav-link" href="#">
            <i class="fa fa-bell" style="color: white;"></i>
        </a>
        <img src="../../img/avatar.png" alt="Avatar" class="avatar" style="vertical-align: middle; width: 40px; height: 40px; border-radius: 50%;">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" style="color: white; text-decoration: none;">
            <?php echo $name; ?> </a>
    </div>
</nav>