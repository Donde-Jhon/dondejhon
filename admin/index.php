<?php
ob_start();

session_start();
if (isset($_SESSION["role"]) && $_SESSION["id"]) {
    if ($_SESSION["role"] === 2) {
        $id = $_SESSION["id"];
        $role = $_SESSION["role"];
    } else {
        header("Location: ../db/close/close.php");
        exit;
    }
} else {
    header("Location: ../db/close/close.php");
    exit;
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrador - DondeJhon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
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
                            <a class="nav-link active" aria-current="page" href="index.php?p=users">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?p=products">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?p=orders">Pedidos</a>
                        </li>
                        <li class="item-nav-admin item-1">
                            <a href="../db/close/close.php"><img src="../assets/icons/off.png" class="image-nav-admin" alt=""></a>
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
        <?php
        if (isset($_GET['p'])) {
            $page = $_GET['p'];
            switch ($page) {
                case 'users':
                    include('./users.php');
                    break;
                case 'products':
                    include('./products.php');
                    break;
                case 'orders':
                    include('./orders.php');
                    break;

                default:
                    header('Location: index.php?p=users');
                    break;
            }
        } else {
            header('Location: index.php?p=users');
        }
        ?>
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
<?php
ob_end_flush();
?>