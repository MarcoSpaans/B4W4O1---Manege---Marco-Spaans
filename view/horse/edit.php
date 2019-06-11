<h1>EDIT HORSE</h1>

<form class="" action="<?= URL ?>horse/update/<?= $horse['id'] ?>" method="post">
  <h3>Name</h3><br>
  <input type="text" name="name" value="<?= $horse['name_horse'] ?>" required>
  <h3>Race</h3><br>
  <select class="" name="race" required>
    <?php

    foreach ($race as $option) {

     ?>

     <option value='<?= $option['id'] ?>'><?= $option['name_race'] ?></option>

     <?php
   }
      ?>
  </select>
  <h3>Age</h3><br>
  <input type="text" name="age" value="<?= $horse['age'] ?>" required>
  <h3>jump</h3><br>
  <p>yes</p><input type="radio" name="jump" value="yes" required>
  <p>no</p><input type="radio" name="jump" value="no" required>
  <br><br>
  <button type="submit" name="button">EDIT</button>
</form>
