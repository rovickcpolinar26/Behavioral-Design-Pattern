<?php
require_once "Visitor.php";
require_once "Element.php";
require_once "Student.php";
require_once "Faculty.php";
require_once "Alumni.php";
require_once "CSVExportVisitor.php";
require_once "ReportVisitor.php";
require_once "StatisticsVisitor.php";
require_once "PDFReportVisitor.php";

$records = [
    new Student("Juan Dela Cruz", "BSIT"),
    new Faculty("Dr. Santos", "IT Department"),
    new Alumni("Mark Cruz", 2022),
];

echo "<h2>Student Record Operations</h2>";
echo '<pre style="font-family: Arial, sans-serif; font-size: 16px;">';
echo "CSV Export Visitor\n";
$visitor = new CSVExportVisitor();
foreach ($records as $record) {
    $record->accept($visitor);
}
echo "</pre>";
