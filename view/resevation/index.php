<table class="table table-striped table-hover">
  <thead class="thead-dark">
    <tr>
      <th>Name_customer</th>
      <th>name_horse</th>
      <th>start time</th>
      <th>tijdspanne (in minuten)</th>
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

<h4><a href="<?= URL ?>resevation/create">Toevoegen</a></h4>
