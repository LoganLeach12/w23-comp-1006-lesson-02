<?php

$student_info_keys = [
    'name',
    'age',
    'dob'
];

$students = [
    ['Logan', 19, '2003-10-01'],
    ['1997-02-01','Gagandeep', 26]
];

$aa_students = [
    [
      "name" => "Logan Leach",
      "age" => 19,
      "dob" => "2003-10-01"  
    ],
    [
      "age" => 22,
      "name" => "Amrit",
      "dob" => "2001-01-18"  
    ]
];

foreach ($aa_students as $student) {
    echo $student["age"];
}