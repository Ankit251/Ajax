<body>
<?php

$id = $_POST['FirstName'];


$mysqli = new mysqli("localhost", "root", "", "social");


$sql = "SELECT first_name, last_name, username, email
FROM users WHERE first_name = '$id'";

$stmt = $mysqli->prepare($sql);

$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr);
$stmt->fetch();
$stmt->close();


if($id == $cid) {
    echo "Username already exist";
}else {
    echo "Username doesn't exist";
}

?>

<body>



</body>