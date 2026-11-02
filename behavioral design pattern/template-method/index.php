<?php
require_once "Report.php";
require_once "StudentReport.php";
require_once "GradeReport.php";
require_once "EnrollmentReport.php";

echo "<h2>Student Report Generation</h2>";
echo '<pre style="font-family: Arial, sans-serif; font-size: 16px;">';
$report = new StudentReport();
$report->generateReport();
echo "</pre>";
