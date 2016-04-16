<?php
	require_once('_assets/config/dbc.php');

	$id = $_GET['id'];


	$getImg = mysql_query("SELECT brand_img FROM itl0_brand WHERE brand_id = $id");
	$viewImg = mysql_fetch_array($getImg);

	$currentImg = $viewImg['brand_img'];


	mysql_query("DELETE FROM itl0_brand WHERE brand_id = '$id'");

	$affectedRow = mysql_affected_rows();

	if ($affectedRow)
	{
		unlink('../uploads/' . $currentImg);
		header("Location:view_brand.php");
	}
?>