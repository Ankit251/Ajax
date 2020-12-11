<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>

<h2>The XMLHttpRequest Object</h2>

<form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select a customer:</option>
    <option value="12">Ankit Kumar</option>
    <option value="2">Raj Aryan</option>
    <option value="3">Vicky Kumar</option>
  </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<div class="Anki">
<?php
$mysqli = new mysqli("localhost", "root", "", "social");


$sql = "SELECT first_name, last_name, username, email
FROM users WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr);
$stmt->fetch();
$stmt->close();

echo " 'First name is'  . $cid " ;

echo " 'Last name is'  . $cname " ;

echo " 'username is'  . $name " ;

echo " 'email is'  . $adr " ;
?>
</div>
<script>
function showCustomer(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "aja11.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>