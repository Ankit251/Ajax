<?php


$mysqli = new mysqli("localhost", "root", "", "social");


$id = $_POST['FirstName'];

$sql = "SELECT first_name, last_name, username, email
FROM users WHERE id = '$id'";

$stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td>";
echo "<th>City</th>";
echo "<td>" . "Some" . "</td>";
echo "<th>PostalCode</th>";
echo "<td>" . "Tjing" . "</td>";
echo "<th>Country</th>";
echo "<td>" . "ok" . "</td>";
echo "</tr>";
echo "</table>";


?>