<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Highlight Current Page With Javascript Example</title>
<style type="text/css">

/* * {
	margin:0;
	padding:0;
}
body {
	background:#CCC;
	font:140% "Times New Roman", Times, serif, Arial;
	line-height:1.5;
	font-weight:bold;
}
/* ---------------- #nav --------------- */
/* #nav {
	width:100px;
	list-style:none;
	margin:100px auto;
}
#nav a {
	color:black;
	text-decoration:none;
	outline:0;
}*/
nav a:active, #nav a:focus, #nav a:hover {
	color:red; 
}
/* nav a.highlite {
	color:red;
} */

</style> 
</head>

<body>
  
<ul id="nav">
  <li><a id="default" class="highlite" onclick="highlite(this);" href="#">Link1</a></li>
  <li><a onclick="highlite(this);" href="#">Link2</a></li>
  <li><a onclick="highlite(this);" href="#">Link3</a></li>
  <li><a onclick="highlite(this);" href="#">Link4</a></li>
  <li><a onclick="highlite(this);" href="#">Link5</a></li>
</ul>

<script type="text/javascript">
var current = document.getElementById('default');

  function highlite(el)
  {
     if (current != null)
     {
         current.className = "";
     }
     el.className = "highlite";
     current = el;
  }
</script> 

</body>
</html>