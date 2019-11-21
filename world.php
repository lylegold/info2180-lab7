<?php
$host = getenv('IP');
$username = 'lylegold';
$password = '12345678';
$dbname = 'world';

$countrya = filter_var($_GET['country'], FILTER_SANITIZE_STRING);
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$countrya'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<table border="2">

    <tr>
    <th>Name</th>
    <th>Continent</th>
    <th>Independence</th>
    <th>Head of State</th>
    </tr>

<?php foreach ($results as $row): ?>
<tr><td><?= $row['name']?></td>
<td><?= $row['continent']?></td>
<td><?= $row['independence_year']?><td><?= $row['head_of_state']?></td></td></tr>
<?php endforeach; ?>

</table>