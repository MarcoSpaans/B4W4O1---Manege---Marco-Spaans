<?php

require(ROOT . "model/resevationModel.php");

function index()
{
	render("resevation/index", array('resevation' => getAllRevesations(),));
}

function create() {
	$message = null;
	if (isset($_GET['error']) && $_GET['error'] == 99) {
		$message = "resevering is op dit tijdstip niet mogelijk";
	}
	render("resevation/create", array('customer' => getAllCustomers(), 'horse' => getAllHorses(), 'message' => $message));
}

function store() {
		$error_code = null;
		if (isResevationPossible($_POST['starttime'], $_POST['horse'])) {
			createResevation($_POST);

			header('Location: index');
			exit;
		} else {
			$error_code = 99;
			header('Location: create?error='.$error_code);
			exit;
		}


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
