<?php include "./routes.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./views/components/head.php" ?>
</head>

<body>
    <?php include "./views/components/navbar.php" ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <a href="./index.php">
                    <h1 class="text-center">Biblioteka</h1>
                </a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <?php if (isset($_SESSION['success'])) {
                    echo
                    '<div class="alert alert-success" role="alert">
                     '. $_SESSION['success'] .'
                    </div>';
                    unset($_SESSION['success']);
                }

                if (isset($_SESSION['errors'])) {
                    foreach ($_SESSION['errors'] as  $errorMsg) {
                        echo
                    '<div class="alert alert-danger" role="alert">
                     '. $errorMsg .'
                    </div>';
                    }
                    unset($_SESSION['errors']);
                }
                ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <?php include "./views/components/form.php" ?>
            </div>
            <div class="col-md-6">
                <?php include "./views/components/sortFilter.php" ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <?php include "./views/components/table.php" ?>
            </div>
        </div>
    </div>
</body>


</html>