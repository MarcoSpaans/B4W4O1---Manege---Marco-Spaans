<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Naam ras</th>
      <th scope="col">Hoogte in cm</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php

  foreach ($race as $row) {

   ?>
   <tr>
     <td><?= $row['name_race'] ?></td>
     <td><?= $row['height'] ?>cm</td>
     <td><a href="<?= URL ?>race/edit/<?= $row['id'] ?>">bijwerken</a></td>
     <td><a href="<?= URL ?>race/delete/<?= $row['id'] ?>">verwijderen</a></td>
   </tr>
<?php
  }
 ?>
</tbody>
</table>
</div>

<h4><a href="<?= URL ?>race/create">Toevoegen</a></h4>
