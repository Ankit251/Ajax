<?php

$id = $_POST['FirstName'];


$mysqli = new mysqli("localhost", "root", "", "social");


$sql = "SELECT first_name, last_name, username, email
FROM users WHERE id = $id";

$stmt = $mysqli->prepare($sql);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr);
$stmt->fetch();
$stmt->close();


?>
<body>

<div class="ankitk">
<?php
 echo " 'Using Post method first name is: '.$cid ";  ?>

</div>

</body>
