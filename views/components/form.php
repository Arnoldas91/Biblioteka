<form class="pb-5" action="" method="post">
  <div class="form-group">
    <label for="title">Knygos pavadinimas:</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Įveskite knygos pavadinimą" value="<?= (isset($_GET['edit'])) ? $book->title : "" ?>">
  </div>
  <div class="form-group">
    <label for="genre">Knygos žanras:</label>
    <input type="text" class="form-control" name="genre" id="genre" placeholder="Įveskite knygos žanrą" value="<?= (isset($_GET['edit'])) ? $book->genre : "" ?>">
  </div>
  <div class="form-group">
    <label for="author">Autorius:</label>
    <select class="form-select" name="authorId" id="author">
      <option value="">Pasirinkite autorių</option>
      <?php foreach ($authors as $author) {
          $selected = "";
          if (isset($book) && $book->authorId == $author->id) {
              $selected = "selected";
          }
          echo '<option value="' . $author->id . '" ' . $selected . '>' . $author->name . ' ' . $author->surname . '</option>';
      } ?>
    </select>
  </div>
  <?php if (isset($_GET['edit'])) { ?>
    <input type="hidden" name="id" value="<?= $book->id ?>">
    <button class="btn btn-success" type="submit" name="update">Atnaujinti</button>
  <?php } else { ?>
    <button class="btn btn-primary" type="submit" name="save">Išsaugoti</button>
  <?php } ?>
</form>
