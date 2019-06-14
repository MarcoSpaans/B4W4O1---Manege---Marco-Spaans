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

function createCustomer($data)
{
	$name = $data['name'];
	$adress = $data['adress'];
	$postcode = $data['postcode'];
	$city = $data['city'];
	$phone = $data['phone'];
	$email = $data['email'];
	try {

	$db = openDatabaseConnection();

	$sql = "INSERT INTO `customer` (`name_customer`, `adress`, `postcode`, `city`, `phone`, `email`) VALUES (:name, :adress, :postcode, :city, :phone, :email)";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':adress', $adress);
	$query->bindParam(':postcode', $postcode);
	$query->bindParam(':city', $city);
	$query->bindParam(':phone', $phone);
	$query->bindParam(':email', $email);
	$query->execute();
	$result = $query->fetchAll();
} catch (Exception $e) {
echo "Connection failed: " . $e->getMessage();
}
	$db = null;

	return $result;

}

function updateCustomer($data, $id)
{
	$name = $data['name'];
	$adress = $data['adress'];
	$postcode = $data['postcode'];
	$city = $data['city'];
	$phone = $data['phone'];
	$email = $data['email'];
	try {

	$db = openDatabaseConnection();

	$sql = "UPDATE `customer` SET `name_customer` = :name, `adress` = :adress, `postcode` = :postcode, `city` = :city, `phone` = :phone, `email` = :email WHERE `id` = :id";
	$query = $db->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':adress', $adress);
	$query->bindParam(':postcode', $postcode);
	$query->bindParam(':city', $city);
	$query->bindParam(':phone', $phone);
	$query->bindParam(':email', $email);
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
