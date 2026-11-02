<?php
require_once "Student.php";
require_once "StudentIterator.php";
require_once "StudentCollection.php";

$students = new StudentCollection();
$students->add(new Student("2026-001", "Juan"));
$students->add(new Student("2026-002", "Maria"));
$students->add(new Student("2026-003", "Pedro"));

echo "<h2>Student Record Collection</h2>";
echo '<pre style="font-family: Arial, sans-serif; font-size: 16px;">';
echo "Student List\n";
foreach ($students as $student) {
    echo $student->getId() . " - " . $student->getName() . "\n";
}
echo "</pre>";
