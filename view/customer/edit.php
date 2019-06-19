<h1>BEWERK CUSTOMER</h1>
<form class="" action="<?= URL ?>customer/update/<?= $customer['id'] ?>" method="post">
  <h3>Naam</h3><br>
  <input type="text" class="form-control" name="name" value="<?= $customer['name_customer'] ?>" required>
  <h3>Adres</h3><br>
  <input type="text" class="form-control" name="adress" value="<?= $customer['adress'] ?>" required>
  <h3>Postcode</h3><br>
  <input type="text" class="form-control" name="postcode" value="<?= $customer['postcode'] ?>" required>
  <h3>Stad/dorp</h3><br>
  <input type="text" class="form-control" name="city" value="<?= $customer['city'] ?>" required>
  <h3>Telefoon nummer</h3><br>
  <input type="tel" class="form-control" name="phone" value="<?= $customer['phone'] ?>" placeholder="00-00000000" pattern="[0-9]{2}-[0-9]{8}" required>
  <h3>Email</h3><br>
  <input type="email" class="form-control" name="email" value="<?= $customer['email'] ?>" required><br><br>
  <button type="submit" class="btn btn-primary" name="button">EDIT</button>
</form>
