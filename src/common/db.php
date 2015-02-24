<?php
namespace common\db
	$dsn = 'mysql:dbname=calendar;host=127.0.0.1';
	$user = 'root';
	$password = 'dHtFkIg';
	function link
	try {
		$dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_PERSISTENT => true));
		$dbh->query('set names utf8;');
		
	} catch (PDOException $e) {
		$log.addError($e->getMessage());
	}