<h1>VERWIJDER RESEVATION</h1>

<form class="" action="<?= URL ?>resevation/destroy/<?= $resevation['id'] ?>" method="post">
<h3>wilt u de resevering van <?= $resevation['start_time'] ?> verwijderen?</h3>
<button type="submit" class="btn btn-success" name="button">YES</button>
<a href="<?= URL ?>resevation/index"><button type="button" class="btn btn-danger" name="button">NO</button></a>
</form>
