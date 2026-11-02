<?php
require_once "Mediator.php";
require_once "ChatMediator.php";
require_once "Student.php";

$chat  = new ChatMediator();
$juan  = new Student("Juan", $chat);
$maria = new Student("Maria", $chat);
$pedro = new Student("Pedro", $chat);

echo "Student Communication System";

$juan->send("Hello everyone!");

