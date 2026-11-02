<?php
require_once "Report.php";
require_once "StudentReport.php";
require_once "GradeReport.php";
require_once "EnrollmentReport.php";

echo "Student Report Generation";

$report = new StudentReport();
$report->generateReport();

