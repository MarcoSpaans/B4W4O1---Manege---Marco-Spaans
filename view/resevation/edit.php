<h1>BEWERK RESEVATION</h1>
<form class="" action="<?= URL ?>resevation/update/<?= $resevation['id'] ?>" method="post">
  <h3>Klant</h3><br>
  <select class="form-control" name="customer" required>

    <?php

    foreach ($customer as $option) {

     ?>

<option value="<?= $option['id'] ?>" <?php if ($resevation['customer_id'] === $option['id']){?>
  selected
<?php } ?>><?= $option['name_customer'] ?></option>

     <?php
   }
      ?>

  </select>
  <h3>Paard</h3><br>
  <select class="form-control" name="horse" required>

    <?php

    foreach ($horse as $option2) {

     ?>

    <option value="<?= $option2['id'] ?>" <?php if ($resevation['horse_id'] === $option2['id']){?>
      selected
    <?php } ?>><?= $option2['name_horse'] ?></option>

     <?php
    }
      ?>

  </select>
  <h3>Start tijd</h3><br>
  <input type="datetime" class="form-control" placeholder="YYYY-MM-DD 00:00" name="starttime" value="<?= $resevation['start_time'] ?>" required>
  <h3>Aantal ritjes</h3><br>
  <input type="number" class="form-control" name="timespan" value="<?= $resevation['time_span'] ?>" required>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">EDIT</button>
</form>
