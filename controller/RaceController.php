<?php

require(ROOT . "model/RaceModel.php");

function index()
{
	render("race/index", array('race' => getAllRaces()));
}

function create() {
	render("race/create");
}

function store() {

	createRace($_POST);

	header('Location: index');
	exit;
}

function edit($id) {

	render("race/edit", array('race' => getRacebyID($id)));
}

function update($id){

	updateRace($_POST, $id);

	header('Location: ../index');
	exit;
}

function delete($id) {
	render("race/delete", array('race' => getRacebyID($id)));
}

function destroy($id) {

	destroyRace($id);

	header('Location: ../index');
	exit;
}
