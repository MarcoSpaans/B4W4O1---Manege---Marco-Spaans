<h1>CREATE CUSTOMER</h1>

<form class="" action="<?= URL ?>customer/store" method="post">
  <h3>Name</h3><br>
  <input type="text" name="name" value="" required>
  <h3>Adress</h3><br>
  <input type="text" name="adress" value="" required>
  <h3>Postcode</h3><br>
  <input type="text" name="postcode" value="" required>
  <h3>City</h3><br>
  <input type="text" name="city" value="" required>
  <h3>Phone-number</h3><br>
  <input type="tel" name="phone" placeholder="00-00000000" pattern="[0-9]{2}-[0-9]{8}" required>
  <h3>Email</h3><br>
  <input type="email" name="email" value="" required><br><br>
  <button type="submit" name="button">CREATE</button>
</form>
