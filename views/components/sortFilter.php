<form action="" class="row g-3" method="get">
  <div class="col-md-5">
    <label for="sort-select" class="form-label">Rūšiavimas</label>
    <select class="form-select" id="sort-select" name="sort">
      <option value="1" <?= (isset($_GET['sort']) && $_GET['sort'] == 1) ? "selected" : "" ?>>Pavadinimas a-z</option>
      <option value="2" <?= (isset($_GET['sort']) && $_GET['sort'] == 2) ? "selected" : "" ?>>Pavadinimas z-a</option>
      <option value="3" <?= (isset($_GET['sort']) && $_GET['sort'] == 3) ? "selected" : "" ?>>Žanras a-z</option>
      <option value="4" <?= (isset($_GET['sort']) && $_GET['sort'] == 4) ? "selected" : "" ?>>Žanras z-a</option>
      <option value="5" <?= (isset($_GET['sort']) && $_GET['sort'] == 5) ? "selected" : "" ?>>Autorius a-z</option>
      <option value="6" <?= (isset($_GET['sort']) && $_GET['sort'] == 6) ? "selected" : "" ?>>Autorius z-a</option>
    </select>
  </div>
  <div class="col-md-5">
    <label for="filter-select" class="form-label">Filtravimas</label>
    <select class="form-select" id="filter-select" name="filter">
      <option value="0">Visi autoriai</option>
      <?php
      foreach ($authors as $author) {
          echo  '<option value="' . $author->id . '" '. ((isset($_GET['filter']) && $_GET['filter'] ==$author->id ) ? "selected" : "" ) .    '>' . $author->surname . " " . $author->name . '</option>';
      }
      ?>
    </select>
  </div>
  <div class="col-md-2 d-flex align-items-end">
    <button class="btn btn-success w-100" type="submit">Filtruoti</button>
  </div>
</form>
