<?php

function getAllRaces()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM race";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();

	$db = null;

	return $result;

}

function getRacebyID($id)
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM race WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetch();

	$db = null;

	return $result;

}

function createRace($data)
{
	$name = $data['name'];
	$height = $data['height'];
	try {

	$db = openDatabaseConnection();

	$sql = "INSERT INTO `race` (`name_race`, `height`) VALUES (:name, :height)";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':height', $height);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function updateRace($data, $id)
{
	$name = $data['name'];
	$height = $data['height'];
	try {

	$db = openDatabaseConnection();

	$sql = "UPDATE `race` SET `name_race` = :name, `height` = :height WHERE `id` = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':height', $height);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function destroyRace($id)
{
	try {

	$db = openDatabaseConnection();

	$sql = "DELETE FROM race WHERE id = :id";
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
