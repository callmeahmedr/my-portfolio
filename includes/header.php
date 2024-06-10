<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title><?=$title;?> | Muhammad Ahmed (@callmeahmedr)</title>
    <link rel="icon" sizes="any" href="https://etarbiyat.com/cdn/framework/v2/team/1658846520356.jpg">

    <!-- Boostrap / CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <header>
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand mt-1 fw-bold fs-5" href="index.php">Muhammad Ahmed</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                    <ion-icon name="menu-outline" style="color:#000;font-size:30px;"></ion-icon>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item justify-content-center"><a class="nav-link" href="personalities.php"> Favorite Personalities </a></li>
                        <li class="nav-item justify-content-center"><a class="nav-link" href="cities.php"> Favorite Cities </a></li>
                        <li class="nav-item justify-content-center"><a class="nav-link" href="tourist-spots.php"> Favorite Tourist Spots </a></li>
                        <li class="nav-item justify-content-center"><a class="nav-link" href="contact.php"> Contact</a></li>
                    </ul>
                    <div class="form-inline text-dark d-none d-xl-block">
                        <a href="contact.php"><button class="btn btn-success">
                                <ion-icon name="mail"></ion-icon> Request a Meeting
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>