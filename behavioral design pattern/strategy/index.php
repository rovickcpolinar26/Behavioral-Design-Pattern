<?php
require_once "GradeStrategy.php";
require_once "SimpleAverageStrategy.php";
require_once "WeightedAverageStrategy.php";
require_once "TransmutedGradeStrategy.php";
require_once "GradeCalculator.php";

$grades = [83, 94];

echo "Grade Calculation System";
         
$calc = new GradeCalculator(new SimpleAverageStrategy());
$calc->show($grades);

$calc->setStrategy(new WeightedAverageStrategy());
$calc->show($grades);

$calc->setStrategy(new TransmutedGradeStrategy());
$calc->show($grades);
  
