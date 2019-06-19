<h1>BEWERK HORSE</h1>

<form class="" action="<?= URL ?>horse/update/<?= $horse['id'] ?>" method="post">
  <h3>Naam</h3><br>
  <input type="text" name="name" class="form-control" value="<?= $horse['name_horse'] ?>" required>
  <h3>Ras</h3><br>
  <select class="form-control" name="race" required>
    <?php

    foreach ($race as $option) {

     ?>

     <option value='<?= $option['id'] ?>' <?php if ($horse['race_id'] === $option['id']){ ?>
       selected
     <?php } ?>><?= $option['name_race'] ?></option>

     <?php
   }
      ?>
  </select>
  <h3>Leeftijd</h3><br>
  <input type="text" class="form-control" name="age" value="<?= $horse['age'] ?>" required>
  <h3>Springen</h3><br>
  <div class="form-check">
    <input type="radio" class="form-check-input" name="jump" value="yes" <?php if ($horse['jump'] === "yes"){ ?>
      checked
    <?php } ?> required>
    <label class="form-check-label" for="exampleRadios1">
    ja
  </label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-check-input" name="jump" value="no" <?php if ($horse['jump'] === "no"){ ?>
      checked
    <?php } ?> required>
    <label class="form-check-label" for="exampleRadios1">
    nee
  </label>
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">EDIT</button>
</form>
