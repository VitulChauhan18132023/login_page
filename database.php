<?php
$server = 'localhost';
$username = 'id13271946_vitul';
$password = 'Bhai@17147714';
$database = 'id13271946_auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}