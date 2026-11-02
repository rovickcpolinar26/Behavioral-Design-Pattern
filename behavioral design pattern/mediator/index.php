<?php
require_once "Mediator.php";
require_once "ChatMediator.php";
require_once "Student.php";

$chat  = new ChatMediator();
$juan  = new Student("Juan", $chat);
$maria = new Student("Maria", $chat);
$pedro = new Student("Pedro", $chat);

echo "<h2>Student Communication System</h2>";
echo '<pre style="font-family: Arial, sans-serif; font-size: 16px;">';
$juan->send("Hello everyone!");
echo "</pre>";
