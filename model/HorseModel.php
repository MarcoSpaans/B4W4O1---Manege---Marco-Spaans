<?php

function getAllHorses()
{

	$db = openDatabaseConnection();

	$sql = "SELECT horse.id, horse.name_horse, race.name_race, horse.age, horse.jump FROM `horse` INNER JOIN `race` ON horse.race_id = race.id";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();



	$db = null;

	return $result;

}

function getAllRaces()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `race`";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();



	$db = null;

	return $result;

}

function getHorsebyID($id)
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horse WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetch();

	$db = null;

	return $result;

}

function createHorse($data)
{
	$name = $data['name'];
	$race = $data['race'];
	$age = $data['age'];
	$jump = $data['jump'];
	try {

	$db = openDatabaseConnection();

	$sql = "INSERT INTO `horse` (`name_horse`, `race_id`, `age`, `jump`) VALUES (:name, :race, :age, :jump)";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':race', $race);
	$query->bindParam(':age', $age);
	$query->bindParam(':jump', $jump);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function updateHorse($data, $id)
{
	$name = $data['name'];
	$race = $data['race'];
	$age = $data['age'];
	$jump = $data['jump'];
	try {

	$db = openDatabaseConnection();

	$sql = "UPDATE `horse` SET `name_horse` = :name, `race_id` = :race, `age` = :age, `jump` = :jump WHERE `id` = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':race', $race);
	$query->bindParam(':age', $age);
	$query->bindParam(':jump', $jump);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function destroyHorse($id)
{
	try {

	$db = openDatabaseConnection();

	$sql = "DELETE FROM horse WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}
