<html>

<head>

</head>

<body>
    <div id="demo"></div>
    <h1>Fetch data from txt file using get and post method</h1>
    <button type="button" onclick="loadDoc()">Fetch data using get</button>
    <button type="button" onclick="loadDocc()">Fetch data using post</button>
<script>
    function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "pink.txt", true);
            xhttp.send();
    }

    function loadDocc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "pink2.txt", true);
            xhttp.send();
    }
</script>
</body>

</html>