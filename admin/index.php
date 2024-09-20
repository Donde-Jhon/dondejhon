<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador - DondeJhon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .item-nav-admin {
            position: absolute;
        }

        .item-1 {
            right: 1vh;
        }

        .item-2 {
            right: 5vh;
        }

        .image-nav-admin {
            width: 3vh;
            height: 3vh;
            object-fit: cover;
        }

        /* media screen  */
        @media screen and (max-width: 990px) {
            .item-nav-admin {
                position: static;
            }
        }
    </style>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pedidos</a>
                        </li>
                        <li class="item-nav-admin item-1">
                            <img src="../assets/icons/off.png" class="image-nav-admin" alt="">
                        </li>
                        <li class="item-nav-admin item-2">
                            Jhojan esteban lopez <img src="../assets/icons/person.png" class="image-nav-admin" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid d-flex flex-column align-items-center">

    </main>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 DondeJhon:
            <a class="text-body" href="../contactanos.html">Sitio</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>