<html>
<head>

<style>
    .error{
        color:red;
    }
</style>

</head>

<body>

    <div id="dmo">This text colour should change</div>
    <button type="button" onclick="loadDoc()">Change colour using ajax</button>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var element = document.getElementById("dmo");
                    element.classList.add("error");
                }
            };
            xhttp.open("GET", "aja1.php", true);
            xhttp.send();
            
        }

    </script>
</body>
</html>