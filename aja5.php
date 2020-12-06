<html>
<head>

<style>
    .error{
        color:red;
        
    }

    .smt {
        color:black;
    }
</style>

</head>

<body>

    <div id="dmo" class="smt">color of this text will change for half second</div>
    <button type="button" onclick="loadDoc()">Change color using ajax</button>

    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200)
                    {

                        var setInterval_ID = setInterval(my_alert_func, 500);

                        function my_alert_func()
                        {
                            var element = document.getElementById("dmo");
                            element.classList.add("error");
                            element.classList.remove("smt");
                        }

                        var setInterval_ID2 = setInterval(my_alert_func2, 1000);

                        function my_alert_func2()
                        {
                            var element = document.getElementById("dmo");
                            element.classList.remove("error");
                            element.classList.add("smt");
                            
                        }


                        // Set timeout to call stop_interval function after 12 seconds
                        setTimeout(stop_interval, 1000);

                        function stop_interval()
                        {
                            clearInterval(setInterval_ID);
                        }
                    
                    }
            };
            xhttp.open("GET", "aja5.php", true);
            xhttp.send();
            
        }

    </script>
</body>
</html>


<html>
<body>
<script>

// Get the Interval ID

  </script>
  </body>
  </html>