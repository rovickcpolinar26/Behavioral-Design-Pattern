<?php
require_once "State.php";
require_once "ApplicantState.php";
require_once "PreAssessedState.php";
require_once "EnrolledState.php";
require_once "DroppedState.php";
require_once "GraduatedState.php";
require_once "Student.php";

$student = new Student();

echo "Student Enrollment Status\n";
$student->enroll();

echo "\nAfter changing the state:\n";
$student->setState(new PreAssessedState());
$student->enroll();
