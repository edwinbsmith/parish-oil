<?php

$current_page = $_SERVER['PHP_SELF'];

if ( $current_page !== '/' ) {
	include 'content' . $current_page; 
} else {
	$heading = 'Index';
	$content = 'Welcome!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Parish Oil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		ul li .active {
			background: red;
		}
	</style>
</head>
<body>
	<header>
		<h1>Parish Oil</h1>
	</header>