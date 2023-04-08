<?php
include "./routes.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./views/components/head.php" ?>
</head>

<body>
    <?php include "./views/components/navbar.php" ?>

    <div class="container py-5">
        <h1 class="mb-5">Biblioteka</h1>

        <?php include "./views/components/form.php" ?>
        <div class="row">
            <div class="col-sm-12">
                <?php include "./views/components/table.php" ?>
            </div>
        </div>
    </div>





</body>

</html>