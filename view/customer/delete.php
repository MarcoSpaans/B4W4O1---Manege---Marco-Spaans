<h1>DELETE CUSTOMER</h1>

<form class="" action="<?= URL ?>customer/destroy/<?= $customer['id'] ?>" method="post">
<h3>wilt u <?= $customer['name_customer'] ?> verwjderen?</h3>
<button type="submit" name="button">YES</button>
<a href="<?= URL ?>customer/index"><button type="button" name="button">NO</button></a>
</form>