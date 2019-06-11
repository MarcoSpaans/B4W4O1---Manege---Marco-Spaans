<?php

require(ROOT . "model/CustomerModel.php");

function index()
{
	render("customer/index", array('customer' => getAllCustomers()));
}

function create() {
	render("customer/create");
}

function store() {
	createCustomer($_POST['name'], $_POST['adress'], $_POST['postcode'], $_POST['city'], $_POST['phone'], $_POST['email']);

	header('Location: index');
	exit;
}

function edit($id) {

	render("customer/edit", array('customer' => getCustomerbyID($id)));
}

function update($id){

	updateCustomer($_POST['name'], $_POST['adress'], $_POST['postcode'], $_POST['city'], $_POST['phone'], $_POST['email'], $id);

	header('Location: ../index');
	exit;
}

function delete($id) {
	render("customer/delete", array('customer' => getCustomerbyID($id)));
}

function destroy($id) {

	destroyCustomer($id);

	header('Location: ../index');
	exit;
}
