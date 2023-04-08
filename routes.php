<?php include "./controllers/BookController.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // Issaugosim
    if(isset($_POST['save'])){
        BookController::store();
        header("Location: ./index.php");
        die;
    }
    // atnaijinsim
    if(isset($_POST['update'])){
        BookController::update();
        header("Location: ./index.php");
        die;
    }


    // istrinsim
    if(isset($_POST['destroy'])){
        BookController::destroy();
        header("Location: ./index.php");
        die;
    }
}


if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['edit'])){
        $book = BookController::show();
    }
    // atvaizduosim knyga
}


// visos knygos
$books = BookController::index();
