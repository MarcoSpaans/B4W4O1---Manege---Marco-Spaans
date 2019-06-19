<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Naam</th>
      <th scope="col">Adres</th>
      <th scope="col">Stad/dorp</th>
      <th scope="col">Postcode</th>
      <th scope="col">Email</th>
      <th scope="col">Telefoon nummer</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php

  foreach ($customer as $row) {

   ?>
   <tr>
     <td><?= $row['name_customer'] ?></td>
     <td><?= $row['adress'] ?></td>
     <td><?= $row['city'] ?></td>
     <td><?= $row['postcode'] ?></td>
     <td><?= $row['email'] ?></td>
     <td><?= $row['phone'] ?></td>
     <td><a href="<?= URL ?>customer/edit/<?= $row['id'] ?>">bijwerken</a></td>
     <td><a href="<?= URL ?>customer/delete/<?= $row['id'] ?>">verwijderen</a></td>
   </tr>
<?php
  }
 ?>
</tbody>
</table>
</div>

<h4><a href="<?= URL ?>customer/create">Toevoegen</a></h4>
