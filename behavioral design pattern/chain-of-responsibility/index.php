<?php
require_once "StudentRequest.php";
require_once "Handler.php";
require_once "StudentAffairsHandler.php";
require_once "RegistrarHandler.php";
require_once "FinanceHandler.php";
require_once "ICTHandler.php";

$affairs = new StudentAffairsHandler();
$affairs->setNext(new RegistrarHandler())
        ->setNext(new FinanceHandler())
        ->setNext(new ICTHandler());

echo "Student Request Processing System\n";
echo "\n";

$request = new StudentRequest("Clinic Results");
echo "Request: {$request->type}\n";
$affairs->handle($request);




// 1. Student ID Concern
// 2. Certificate of Enrollment
// 3. Transcript of Records
// 4. Tuition Payment
// 5. Good Moral Certificate
// 6. Clinic