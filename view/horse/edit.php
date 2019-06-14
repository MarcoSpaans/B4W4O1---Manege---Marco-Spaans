<h1>EDIT HORSE</h1>

<form class="" action="<?= URL ?>horse/update/<?= $horse['id'] ?>" method="post">
  <h3>Name</h3><br>
  <input type="text" name="name" class="form-control" value="<?= $horse['name_horse'] ?>" required>
  <h3>Race</h3><br>
  <select class="form-control" name="race" required>
    <?php

    foreach ($race as $option) {

     ?>

     <option value='<?= $option['id'] ?>'><?= $option['name_race'] ?></option>

     <?php
   }
      ?>
  </select>
  <h3>Age</h3><br>
  <input type="text" class="form-control" name="age" value="<?= $horse['age'] ?>" required>
  <h3>jump</h3><br>
  <div class="form-check">
    <input type="radio" class="form-check-input" name="jump" value="yes" required>
    <label class="form-check-label" for="exampleRadios1">
    yes
  </label>
  </div>
  <div class="form-check">
    <input type="radio" class="form-check-input" name="jump" value="no" required>
    <label class="form-check-label" for="exampleRadios1">
    no
  </label>
  </div>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">EDIT</button>
</form>
