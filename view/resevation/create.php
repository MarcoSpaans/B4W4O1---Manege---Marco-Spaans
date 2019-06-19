<h1>CREATE RESEVATION</h1>

<form class="" action="<?= URL ?>resevation/store" method="post">
  <h3>Klant</h3><br>
  <select class="" name="customer" required>

    <?php

    foreach ($customer as $option) {

     ?>

<option value="<?= $option['id'] ?>"><?= $option['name_customer'] ?></option>

     <?php
   }
      ?>

  </select>
  <h3>Paard</h3><br>
  <select class="" name="horse" required>


<?php

  foreach ($horse as $option) {

 ?>

    <option value="<?= $option['id'] ?>"><?= $option['name_horse'] ?></option>

    <?php
  }
     ?>

  </select>
  <h3>Start tijd</h3><br>
  <input type="datetime" placeholder="YYYY-MM-DD 00:00" name="starttime" value="" required>
  <h3>Aantal ritjes</h3><br>
  <input type="number" name="timespan" value="" required>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">CREATE</button>
</form>
