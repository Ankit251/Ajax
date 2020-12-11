<html>
<body>
<form>
<div>
<label>Enter Id for First Name</label>
<div>
<input  type="text" id="name" placeholder="Enter id to fetch data from database">
<button type="button" onclick="name_suggestion()">Get first name of user</button>
<!-- <div id="suggestion"></div> -->
</div>
</div>
<div>
<div>

</div>
</div>

<div id="suggestion"></div>
</form>
<script>
function name_suggestion() {
    var name = document.getElementById("name").value;
    var xhr;
    if(window.XMLHttpRequest){
        xhr = new XMLHttpRequest();
    }
    else if(window.ActiveXobject) {
        xhr = new ActiveXobject("MicrosoftXMLHTTP");

    }
    var data = "FirstName=" + name;
    xhr.open("POST","getdetail.php",true);
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