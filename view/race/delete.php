<h1>VERWIJDER RAS</h1>

<form class="" action="<?= URL ?>race/destroy/<?= $race['id'] ?>" method="post">
<h3>wilt u de ras '<?= $race['name_race'] ?>' verwjderen?</h3>
<button type="submit" class="btn btn-success" name="button">JA</button>
<a href="<?= URL ?>race/index"><button type="button" class="btn btn-danger" name="button">NEE</button></a>
</form>
