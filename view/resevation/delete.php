<h1>DELETE RESEVATION</h1>

<form class="" action="<?= URL ?>resevation/destroy/<?= $resevation['id'] ?>" method="post">
<h3>wilt u de resevering van <?= $resevation['start_time'] ?> verwjderen?</h3>
<button type="submit" name="button">YES</button>
<a href="<?= URL ?>resevation/index"><button type="button" name="button">NO</button></a>
</form>
