<html>
<head>
<title>Using Ajax with XML</title>
<script language = "javascript">
var colors;
var calorie;
var XMLHttpRequestObject = false;
if (window.XMLHttpRequest) {
XMLHttpRequestObject = new XMLHttpRequest();
XMLHttpRequestObject.overrideMimeType("text/xml");
} else if (window.ActiveXObject) {
XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
}

function getData(dataSource, divID)
{
    if(XMLHttpRequestObject) {
        XMLHttpRequestObject.open("GET", dataSource);
        var obj = document.getElementById(divID);
        XMLHttpRequestObject.onreadystatechange = function()
        {
            if (XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200)
                {
                    var xmlDocument = XMLHttpRequestObject.responseXML;
                    colors = xmlDocument.getElementsByTagName("name");
                    calorie = xmlDocument.getElementsByTagName("Calories");

                    obj.innerHTML = "Here is the calorie of french toast :<ul>";
                    for (i =0; i < colors.length; i++)
                    {
                        obj.innerHTML += "<li>" +
                        colors[i].firstChild.data + "</li>";
                    }
                    obj.innerHTML += "</ul>";

                    for (i =0; i < calorie.length; i++)
                    {
                        obj.innerHTML += "<li>" +
                        calorie[i].firstChild.data + "</li>";
                    }
                    obj.innerHTML += "</ul>";
                }
        }
        XMLHttpRequestObject.send(null);
    }
}
</script>
</head>
<body>
<h1>Using Ajax with XML</h1>
<form>
<input type = "button" value = "Fetch the Calories of french tost"
onclick = "getData('foodmenu.xml', 'targetDiv')">
</form>
<div id="targetDiv" width =100 height=100>
Calories of french tost will appear here.</div>
</body>
</html>