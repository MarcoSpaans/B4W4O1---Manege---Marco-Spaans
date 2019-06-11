<table>
  <tr>
    <th>Name</th>
    <th>race</th>
    <th>age</th>
    <th>jump</th>
  </tr>

  <?php

  foreach ($horse as $row) {

   ?>
   <tr>
     <td><?= $row['name_horse'] ?></td>
     <td><?= $row['name_race'] ?></td>
     <td><?= $row['age'] ?></td>
     <td><?= $row['jump'] ?></td>
     <td><a href="<?= URL ?>horse/edit/<?= $row['id'] ?>">bijwerken</a></td>
     <td><a href="<?= URL ?>horse/delete/<?= $row['id'] ?>">verwijderen</a></td>
   </tr>
<?php
  }
 ?>
</table>

<h4><a href="<?= URL ?>horse/create">Toevoegen</a></h4>
