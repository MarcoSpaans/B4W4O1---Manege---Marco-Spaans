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

	createCustomer($_POST);

	header('Location: index');
	exit;
}

function edit($id) {

	render("customer/edit", array('customer' => getCustomerbyID($id)));
}

function update($id){

	updateCustomer($_POST, $id);

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
