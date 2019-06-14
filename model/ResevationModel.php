<?php

function getAllRevesations()
{

	$db = openDatabaseConnection();

	$sql = "SELECT resevation.id, customer.name_customer, horse.name_horse, resevation.start_time, resevation.time_span FROM ((`resevation` INNER JOIN customer ON resevation.customer_id = customer.id) INNER JOIN horse on resevation.horse_id = horse.id)";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();



	$db = null;

	return $result;

}

function getAllCustomers()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `customer`";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();



	$db = null;

	return $result;

}

function getAllHorses()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `horse`";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();



	$db = null;

	return $result;

}

function getResevationbyID($id)
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM resevation WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetch();

	$db = null;

	return $result;

}

function createResevation($data)
{
	$customer = $data['customer'];
	$horse = $data['horse'];
	$starttime = $data['starttime'];
	$timespan = $data['timespan'];
	try {

	$db = openDatabaseConnection();

	$sql = "INSERT INTO `resevation` (`customer_id`, `horse_id`, `start_time`, `time_span`) VALUES (:customer, :horse, :starttime, :timespan)";
	$query = $db->prepare($sql);
	$query->bindParam(':customer', $customer);
	$query->bindParam(':horse', $horse);
	$query->bindParam(':starttime', $starttime);
	$query->bindParam(':timespan', $timespan);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function updateResevation($data, $id)
{
	$customer = $data['customer'];
	$horse = $data['horse'];
	$starttime = $data['starttime'];
	$timespan = $data['timespan'];
	try {

	$db = openDatabaseConnection();

	$sql = "UPDATE `resevation` SET `customer_id` = :customer, `horse_id` = :horse, `start_time` = :starttime, `time_span` = :timespan WHERE `id` = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':customer', $customer);
	$query->bindParam(':horse', $horse);
	$query->bindParam(':starttime', $starttime);
	$query->bindParam(':timespan', $timespan);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function destroyResevation($id)
{
	try {

	$db = openDatabaseConnection();

	$sql = "DELETE FROM resevation WHERE id = :id";
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
