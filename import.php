<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


//insert query for a student 
//duplicate it so it 
//runs 5 times


$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) 
VALUES ('01010101', '56e dc5y6rghtfdecv bfghrtvy56cd fgrt45debhvc x', '2021-06-03', 'Will', 'Drakeman', 'hjhjh', 'hjhjhjhjhjh', 'bb', 'vv', 'hp157hg');";
$result = mysqli_query($conn,$sql);

$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) 
VALUES ('7070707', 'ygtrf76r67r8f567c75', '2021-06-03', 'Jon', 'Williams', 'nn', 'mm', 'bb', 'vv', 'hp67oh');";
$result = mysqli_query($conn,$sql);


$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) 
VALUES ('606060', 'ygtrf76r67r8f567c75', '2021-06-03', 'Jenna', 'White', 'nn', 'mm', 'bb', 'vv', 'hp67oh');";
$result = mysqli_query($conn,$sql);

$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) 
VALUES ('9909090', 'ygtrf76r67r8f567c75', '2021-06-03', 'Julia', 'Phillips', 'nn', 'mm', 'bb', 'vv', 'hp67oh');";
$result = mysqli_query($conn,$sql);

$sql = "INSERT INTO `student` (`studentid`, `password`, `dob`, `firstname`, `lastname`, `house`, `town`, `county`, `country`, `postcode`) 
VALUES ('888888', 'ygtrf76r67r8f567c75', '2021-06-03', 'Adam', 'Sandler', 'nn', 'mm', 'bb', 'vv', 'hp67oh');";
$result = mysqli_query($conn,$sql);

//all 5 duplicates should have different values

?>