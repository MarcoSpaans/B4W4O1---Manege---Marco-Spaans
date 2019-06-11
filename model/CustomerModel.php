<?php

function getAllCustomers()
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM customer";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();

	$db = null;

	return $result;

}

function getCustomerbyID($id)
{

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM customer WHERE id = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':id', $id);
	$query->execute();
	$result = $query->fetch();

	$db = null;

	return $result;

}

function createCustomer($name, $adress, $postcode, $city, $phone, $email)
{
	try {

	$db = openDatabaseConnection();

	$sql = "INSERT INTO `customer` (`name_customer`, `adress`, `postcode`, `city`, `phone`, `email`) VALUES ('".$name."', '".$adress."', '".$postcode."', '".$city."', '".$phone."', '".$email."')";
	$query = $db->prepare($sql);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function updateCustomer($name, $adress, $postcode, $city, $phone, $email, $id)
{
	try {

	$db = openDatabaseConnection();

	$sql = "UPDATE `customer`
	SET `name_customer` = '".$name."', `adress` = '".$adress."', `postcode` = '".$postcode."', `city` = '".$city."', `phone` = '".$phone."', `email` =  '".$email."' WHERE `id` = :id";
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

function destroyCustomer($id)
{
	try {

	$db = openDatabaseConnection();

	$sql = "DELETE FROM customer WHERE id = :id";
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
