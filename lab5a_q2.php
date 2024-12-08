<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
      </tr>";

foreach ($students as $student) {
    echo "<tr>
            <td>{$student['name']}</td>
	    <td>{$student['program']}</td>
	    <td>{$student['age']}</td>
          </tr>";
}

echo "</table>";
?>
