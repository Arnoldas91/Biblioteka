<form class="pb-5" action="" method="post">
  <div class="form-group">
    <label for="title">Knygos pavadinimas:</label>
    <input type="text" class="form-control" name="title" value="<?= (isset($_GET['edit'])) ? $book->title : "" ?>">
  </div>
  <div class="form-group">
    <label for="genre">Knygos žanras:</label>
    <input type="text" class="form-control" id="genre" name="genre" value="<?= (isset($_GET['edit'])) ? $book->genre : "" ?>">
  </div>
  <div class="form-group">
    <label for="author_id">Autoriaus ID:</label>
    <input type="number" class="form-control" id="author_id" name="author_id" value="<?= (isset($_GET['edit'])) ? $book->authorId : "" ?>">
  </div>
  <?php if (isset($_GET['edit'])) {   ?>
    <input type="hidden" name="id" value="<?= $book->id ?>">

    <button type="submit" class="btn btn-success" name="update">Update it!</button>
  <?php } else { ?>
    <button type="submit" class="btn btn-primary" name="save">Do it!</button>
  <?php } ?>
</form>