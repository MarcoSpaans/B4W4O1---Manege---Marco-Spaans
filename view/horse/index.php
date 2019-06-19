<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th>Naam</th>
      <th>ras</th>
      <th>leeftijd</th>
      <th>springen</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

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
</tbody>
</table>
</div>

<h4><a href="<?= URL ?>horse/create">Toevoegen</a></h4>
