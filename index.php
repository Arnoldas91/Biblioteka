<?php include "./DB.php" ?>
<?php include "./Book.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Biblioteka</title>
</head>

<body>

    <?php

    $books = [];
    $db = new DB();
    $query = "SELECT * FROM `books`";
    $result = $db->conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $books[] = new Book($row['id'], $row['title'], $row['genre'], $row['author_id']);
    }
    $db->conn->close();

    // print_r($books);

    ?>

    <div class="container py-5">
        <h1 class="mb-5">Biblioteka</h1>
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Author ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book) { ?>
                            <tr>
                                <td> <?= $book->id ?></td>
                                <td> <?= $book->title ?></td>
                                <td> <?= $book->genre ?></td>
                                <td> <?= $book->authorId ?></td>
                                <td>
                                    <a href="#" class="btn btn-primary me-2">Show</a>
                                    <a href="#" class="btn btn-success me-2">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





</body>

</html>