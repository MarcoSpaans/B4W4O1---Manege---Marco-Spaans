<h1>CREATE HORSE</h1>

<form class="" action="<?= URL ?>horse/store" method="post">
  <h3>Name</h3><br>
  <input type="text" name="name" value="" required>
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
  <input type="text" name="age" value="" required>
  <h3>jump</h3><br>
  <p>yes</p><input type="radio" name="jump" value="yes" required>
  <p>no</p><input type="radio" name="jump" value="no" required>
  <br><br>
  <button type="submit" name="button">CREATE</button>
</form>
