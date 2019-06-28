<h1>BEWERK RAS</h1>
<form class="" action="<?= URL ?>race/update/<?= $race['id'] ?>" method="post">
  <h3>Naam ras</h3><br>
  <input type="text" class="form-control" name="name" value="<?= $race['name_race'] ?>" required>
  <h3>Hoogte in cm</h3><br>
  <input type="text" class="form-control" name="height" value="<?= $race['height'] ?>" required>
  <br><br>
  <button type="submit" class="btn btn-primary" name="button">EDIT</button>
</form>
