<html>

<head>

</head>

<body>
    <div id="demo"></div>
    <h1>Fetch data from pink.txt</h1>
    <button type="button" onclick="loadDoc()">Fetch data</button>
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
</script>
</body>

</html>