<?php
require_once "Student.php";
require_once "StudentIterator.php";
require_once "StudentCollection.php";

$students = new StudentCollection();
$students->add(new Student("2026-001", "Juan"));
$students->add(new Student("2026-002", "Maria"));
$students->add(new Student("2026-003", "Pedro"));

echo "Student Record Collection";

echo "Student List\n";
foreach ($students as $student) {
    echo $student->getId() . " - " . $student->getName() . "\n";
}

