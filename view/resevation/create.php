<?php if (!empty($message)): ?>
  <div class="alert alert-warning" role="alert">
  <?php echo $message; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<h1>CREATE RESEVATION</h1>

<form class="" action="<?= URL ?>resevation/store" method="post">
  <h3>Klant</h3><br>
  <select class="form-control" name="customer" required>

    <?php

    foreach ($customer as $option) {

     ?>

<option value="<?= $option['id'] ?>"><?= $option['name_customer'] ?></option>

     <?php
   }
      ?>

  </select>
  <h3>Paard</h3><br>
  <select class="form-control" name="horse" required>


<?php

  foreach ($horse as $option) {

 ?>

    <option value="<?= $option['id'] ?>"><?= $option['name_horse'] ?></option>

    <?php
  }
     ?>

  </select>
  <h3>Start tijd</h3><br>
  <input type="datetime" class="form-control" placeholder="YYYY-MM-DD 00:00" name="starttime" value="" required>
  <h3>Aantal ritjes</h3><br>
  <input type="number" class="form-control" name="timespan" value="" required>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">CREATE</button>
</form>
