<h1>DELETE HORSE</h1>

<form class="" action="<?= URL ?>horse/destroy/<?= $horse['id']?>" method="post">
<h3>wilt u <?= $horse['name_horse'] ?> verwjderen?</h3>
<button type="submit" name="button" class="btn btn-success">YES</button>
<a href="<?= URL ?>horse/index"><button type="button" name="button" class="btn btn-danger">NO</button></a>
</form>
