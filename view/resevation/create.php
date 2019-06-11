<h1>CREATE RESEVATION</h1>

<form class="" action="<?= URL ?>resevation/store" method="post">
  <h3>Customer</h3><br>
  <select class="" name="customer" required>

    <?php

    foreach ($customer as $option) {

     ?>

<option value="<?= $option['id'] ?>"><?= $option['name_customer'] ?></option>

     <?php
   }
      ?>

  </select>
  <h3>Horse</h3><br>
  <select class="" name="horse" required>


<?php

  foreach ($horse as $option) {

 ?>

    <option value="<?= $option['id'] ?>"><?= $option['name_horse'] ?></option>

    <?php
  }
     ?>

  </select>
  <h3>Start time</h3><br>
  <input type="datetime-local" name="starttime" value="" required>
  <h3>tijdspanne (in minuten)</h3><br>
  <input type="number" name="timespan" value="" required>
  <br><br>
  <button type="submit" name="button">CREATE</button>
</form>
