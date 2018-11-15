<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center>
	<body>
		<button onclick="get()">GET</button>
		<ol id="fruits"></ol>
		<script type="text/javascript">
			function get(){
				//console.log("clicked");
				var http = new XMLHttpRequest();
				http.open("GET","http://localhost/klass/svr.php",true);
				http.send();
				http.onreadystatechange() = function(){
					//list
					var list = GetElementByID("fruits");
					//response
					console.log(http.responseText);
					//display text
				};
			}
		</script>
	</body>	
</center>
</html>