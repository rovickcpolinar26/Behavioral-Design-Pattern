<?php
require_once "StudentContext.php";
require_once "Expression.php";
require_once "TerminalExpression.php";
require_once "AndExpression.php";
require_once "OrExpression.php";

$student = new StudentContext(["PROGRAM" => "BSIT", "YEAR" => 4]);

$expression = new AndExpression(
    new TerminalExpression("PROGRAM", "BSIT"),
    new TerminalExpression("YEAR", "4")
);

echo "<h2>Student Search/Query System</h2>";
echo '<pre style="font-family: Arial, sans-serif; font-size: 16px;">';
echo "Expression:\n";
echo 'PROGRAM = "BSIT" AND YEAR = 4' . "\n";
echo "Result: " . ($expression->interpret($student) ? "TRUE" : "FALSE") . "\n";
echo "</pre>";
