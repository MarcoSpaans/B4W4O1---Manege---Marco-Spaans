<table>
  <tr>
    <th>Name</th>
    <th>Adress</th>
    <th>City</th>
    <th>Postcode</th>
    <th>Email</th>
    <th>Phone-number</th>
  </tr>

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
</table>

<h4><a href="<?= URL ?>customer/create">Toevoegen</a></h4>
