<h1>EDIT CUSTOMER</h1>
<form class="" action="<?= URL ?>customer/update/<?= $customer['id'] ?>" method="post">
  <h3>Name</h3><br>
  <input type="text" name="name" value="<?= $customer['name_customer'] ?>" required>
  <h3>Adress</h3><br>
  <input type="text" name="adress" value="<?= $customer['adress'] ?>" required>
  <h3>Postcode</h3><br>
  <input type="text" name="postcode" value="<?= $customer['postcode'] ?>" required>
  <h3>City</h3><br>
  <input type="text" name="city" value="<?= $customer['city'] ?>" required>
  <h3>Phone-number</h3><br>
  <input type="tel" name="phone" value="<?= $customer['phone'] ?>" placeholder="00-00000000" pattern="[0-9]{2}-[0-9]{8}" required>
  <h3>Email</h3><br>
  <input type="email" name="email" value="<?= $customer['email'] ?>" required><br><br>
  <button type="submit" name="button">EDIT</button>
</form>
