<h1>EDIT RESEVATION</h1>
<form class="" action="<?= URL ?>resevation/update/<?= $resevation['id'] ?>" method="post">
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

    foreach ($horse as $option2) {

     ?>

    <option value="<?= $option2['id'] ?>"><?= $option2['name_horse'] ?></option>

     <?php
    }
      ?>

  </select>
  <h3>Start time</h3><br>
  <input type="datetime-local" name="starttime" value="<?= $resevation['start_time'] ?>" required>
  <h3>tijdspanne (in minuten)</h3><br>
  <input type="number" name="timespan" value="<?= $resevation['time_span'] ?>" required>
  <br><br>
  <button type="submit" name="button">EDIT</button>
</form>
