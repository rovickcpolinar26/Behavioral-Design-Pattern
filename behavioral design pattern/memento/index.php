<?php
require_once "StudentProfileMemento.php";
require_once "StudentProfile.php";
require_once "ProfileHistory.php";

$profile = new StudentProfile("Antonio Nunez Luna", "BSIT", 3, "Anthony@gmail.com");
$history = new ProfileHistory();

echo "Student Profile Undo System";


$history->push($profile->save());   
$profile->program = "BSCS";
$profile->year = 4;

$profile->show("Current Profile:\n");

echo "\nUndo\n";
$profile->restore($history->pop());
$profile->show("Restored Profile:");

