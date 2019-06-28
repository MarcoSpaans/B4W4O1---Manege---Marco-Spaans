<h1>CREATE RAS</h1>

<form class="" action="<?= URL ?>race/store" method="post">
  <h3>Naam ras</h3><br>
  <input type="text" class="form-control" name="name" value="" required>
  <h3>Hoogte in cm</h3><br>
  <input type="number" class="form-control" name="height" value="" required>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">CREATE</button>
</form>
