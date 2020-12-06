<html>
<head>

<style>
    .error{
        font-style:Italic;
        
    }

    .smt {
        font-style:normal;
    }
</style>

</head>

<body>

    <div id="dmo" class="smt">Font should change</div>
    <button type="button" onclick="loadDoc()">Change Font using ajax</button>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var element = document.getElementById("dmo");
                    element.classList.add("error");
                    element.classList.remove("smt")
                    
                }
            };
            xhttp.open("GET", "aja1.php", true);
            xhttp.send();
            
        }

    </script>
</body>
</html>