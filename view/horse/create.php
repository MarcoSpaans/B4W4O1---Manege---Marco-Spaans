<h1>CREATE HORSE</h1>

<form class="" action="<?= URL ?>horse/store" method="post">
  <h3>Naam</h3><br>
  <input type="text" class="form-control" name="name" value="" required>
  <h3>Ras</h3><br>
  <select class="form-control" name="race" required>
    <?php

    foreach ($race as $option) {

     ?>

     <option value='<?= $option['id'] ?>'><?= $option['name_race'] ?></option>

     <?php
   }
      ?>
  </select>
  <h3>Leeftijd</h3><br>
  <input type="text" class="form-control" name="age" value="" required>
  <h3>Springen</h3><br>
  <div class="form-check">
    <input type="radio" class="form-check-input" name="jump" value="yes" required>
    <label class="form-check-label" for="exampleRadios1">
    ja
  </label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-check-input" name="jump" value="no" required>
    <label class="form-check-label" for="exampleRadios1">
    nee
  </label>
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">CREATE</button>
</form>
