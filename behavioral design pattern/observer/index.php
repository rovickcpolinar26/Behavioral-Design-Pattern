<?php
require_once "Observer.php";
require_once "Subject.php";
require_once "GradeSystem.php";
require_once "StudentPortal.php";
require_once "EmailNotification.php";
require_once "ParentNotification.php";
require_once "SMSNotification.php";

$system = new GradeSystem();
$system->attach(new StudentPortal());
$system->attach(new EmailNotification());
$system->attach(new ParentNotification());

echo "Grade Notification System";

$system->setGrade(1.75);

