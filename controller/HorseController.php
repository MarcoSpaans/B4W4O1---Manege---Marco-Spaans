<?php

require(ROOT . "model/HorseModel.php");

function index()
{
	render("horse/index", array('horse' => getAllHorses()));
}

function create() {
	render("horse/create", array('race' => getAllRaces()));
}

function store(){

	createHorse($_POST['name'], $_POST['race'], $_POST['age'], $_POST['jump']);

	header('Location: index');
	exit;

}

function edit($id) {

	render("horse/edit" , array('horse' => getHorsebyID($id), 'race' => getAllRaces()));
}

function update($id) {

	updateHorse($_POST['name'], $_POST['race'], $_POST['age'], $_POST['jump'], $id);

	header('Location: ../index');
	exit;
}

function delete($id) {
	render("horse/delete", array('horse' => getHorsebyID($id)));
}

function destroy($id) {

	destroyHorse($id);

	header('Location: ../index');
	exit;
}
