<?php

require(ROOT . "model/resevationModel.php");

function index()
{
	render("resevation/index", array('resevation' => getAllRevesations()));
}

function create() {
	render("resevation/create", array('customer' => getAllCustomers(), 'horse' => getAllHorses()));
}

function store() {

		createResevation($_POST);

		header('Location: index');
		exit;
}

function edit($id) {
	render("resevation/edit", array('customer' => getAllCustomers(), 'horse' => getAllHorses(), 'resevation' => getResevationbyID($id)));
}

function update($id) {

	updateResevation($_POST, $id);

	header('Location: ../index');
	exit;
}

function delete($id) {
	render("resevation/delete", array('resevation' => getResevationbyID($id)));
}

function destroy($id) {

	destroyResevation($id);

	header('Location: ../index');
	exit;
}

function price($id){
	render("resevation/price", array('resevation' => getResevationbyID($id)));
}
