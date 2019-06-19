<h1>VERWIJDER CUSTOMER</h1>

<form class="" action="<?= URL ?>customer/destroy/<?= $customer['id'] ?>" method="post">
<h3>wilt u <?= $customer['name_customer'] ?> verwjderen?</h3>
<button type="submit" class="btn btn-success" name="button">JA</button>
<a href="<?= URL ?>customer/index"><button type="button" class="btn btn-danger" name="button">NEE</button></a>
</form>
