<?php
require_once("db_connection.php"); 
$query = $dbh->prepare("UPDATE users SET MONEY = MONEY + :amount WHERE TICKET = :ticket");
$query->bindParam('amount', $_POST['amount']);
$query->bindParam('ticket', $_POST['ticket']);
$query->execute();
?>
