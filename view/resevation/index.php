<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th>Naam klant</th>
      <th>Naam paard</th>
      <th>Start tijd</th>
      <th>Aantal ritjes</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>

  <?php

  foreach ($resevation as $row) {

   ?>
   <tr>
     <td><?= $row['name_customer'] ?></td>
     <td><?= $row['name_horse'] ?></td>
     <td><?= $row['start_time'] ?></td>
     <td><?= $row['time_span'] ?></td>
     <td><a href="<?= URL ?>resevation/edit/<?= $row['id'] ?>">bijwerken</a></td>
     <td><a href="<?= URL ?>resevation/delete/<?= $row['id'] ?>">verwijderen</a></td>
     <td><a href="<?= URL ?>resevation/price/<?= $row['id'] ?>">prijs resevering</a></td>
   </tr>
<?php
  }
 ?>
</tbody>
</table>
</div>

<h4><a href="<?= URL ?>resevation/create">Toevoegen</a></h4>
