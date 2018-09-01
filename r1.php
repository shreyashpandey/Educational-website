<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Shreyash Pandey">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>attemp2</title>
</head>
<body>
<form name="r1.php"  method="post">
<input id="a" type="text" name="image">
<input type="submit" onclick="a()" name="s">
</form>
<script>
function a()
{
	document.getElementById("a").style.display="none";
}
</script>
</body>
</html>