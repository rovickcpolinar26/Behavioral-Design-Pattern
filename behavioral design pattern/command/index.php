<?php
require_once "StudentSystem.php";
require_once "Command.php";
require_once "EnrollCommand.php";
require_once "DropSubjectCommand.php";
require_once "PrintRegistrationCommand.php";
require_once "LogoutCommand.php";
require_once "CommandInvoker.php";

$system  = new StudentSystem();
$invoker = new CommandInvoker();

echo "Student Action/Command System";

$invoker->run(new EnrollCommand($system));
$invoker->run(new DropSubjectCommand($system));

