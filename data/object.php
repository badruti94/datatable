<?php

$pegawai = [
    [
        'id' => 1,
        'name' => 'Tiger Nixona',
        'position' => 'Systssem Architect',
        'salary' => '$320,800',
        'start_date' => '2011/04/25',
        'office' => 'Edinburgh',
        'extn' => 5421,
    ],
    [
        'id' => 2,
        'name' => 'Tiger Nixon',
        'position' => 'System Architect',
        'salary' => '$320,800',
        'start_date' => '2011/04/25',
        'office' => 'Edinburgh',
        'extn' => 5421,
    ],
    [
        'id' => 3,
        'name' => 'Tiger Nixon',
        'position' => 'System Architect',
        'salary' => '$320,800',
        'start_date' => '2011/04/25',
        'office' => 'Edinburgh',
        'extn' => 5421,
    ],
    [
        'id' => 4,
        'name' => 'Tiger Nixon',
        'position' => 'System Architect',
        'salary' => '$320,800',
        'start_date' => '2011/04/25',
        'office' => 'Edinburgh',
        'extn' => 5421,
    ],
];


header('Content-Type: application/json');
echo json_encode([
    'data' => $pegawai
]);