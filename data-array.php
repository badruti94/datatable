<?php
$array = [
    [
    "Ram",
    "21",
    "Male",
    "Doctor"
    ],
    [
    "Mohan",
    "32",
    "Male",
    "Teacher"
    ],
    [
    "Rani",
    "42",
    "Female",
    "Nurse"
    ],
    [
    "Johan",
    "23",
    "Female",
    "Software Engineer"
    ],
    [
    "Shajia",
    "39",
    "Female",
    "Farmer"
    ]
    ];

    header('Content-Type: application/json');
    echo json_encode($array);