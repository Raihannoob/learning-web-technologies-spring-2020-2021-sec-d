<?php

function insertProduct($productDetails)
{
	$conn = getConnection();
	$sql = "insert into product values('', '{$productDetails['name']}', '{$productDetails['bPrice']}', '{$productDetails['sPrice']}', '{$productDetails['display']}')";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function getAllProduct()
{
	$conn = getConnection();
	$sql = "select * from product";
	$result = mysqli_query($conn, $sql);
	$users = [];

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}

	return $users;
}

function getProductById($id)
{

	$conn = getConnection();
	$sql = "select * from product where id='{$id}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function updateProduct($id, $productDetails)
{

	$conn = getConnection();
	$sql = "update product set Name = '{$productDetails['name']}', BuyingPrice='{$productDetails['bPrice']}', sellingPrice='{$productDetails['sPrice']}', Display='{$productDetails['displayable']}' where id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}

function deleteProduct($id)
{
	$conn = getConnection();
	$sql = "delete from product where id='{$id}'";

	if (mysqli_query($conn, $sql)) {
		return true;
	} else {
		return false;
	}
}
