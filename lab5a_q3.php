<?php
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

$multiplier = 2; // You can change this value as needed
$results = multiplication($multiplier);

echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
      </tr>";

foreach ($results as $result) {
    echo "<tr>
            <td>{$result['no']}</td>
            <td>{$result['multiplier']}</td>
            <td>{$result['answer']}</td>
          </tr>";
}

echo "</table>";
?>