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
<div id="suggestion"></div>
<form action=""> 
  <select id="customers" onchange="showCustomer(this.value)">
    <option value="">Select a customer:</option>
    <option value="12">Ankit Kumar</option>
    <option value="2">Raj Aryan</option>
    <option value="3">Vicky Kumar</option>
  </select>
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
    var name = document.getElementById("customers").value;
  var xhttp;  
  var xhr;
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }
    else if(window.ActiveXobject) {
        xhr = new ActiveXobject("MicrosoftXMLHTTP");

    }
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
    var data = "FirstName=" + name;
    xhr.open("POST","getdtl.php",true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send(data);
    xhr.onreadystatechange = display_data;
    function display_data(){
        if(xhr.readyState == 4){
            if(xhr.status == 200){
                document.getElementById("suggestion").innerHTML = xhr.responseText;
            }
            else{
                alert('problem is there');
            }
        }
    }
}
</script>

</body>
</html>