<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<title>Names game</title>
<link href="../styles.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
 <div class="coin">
 <p>
  <?php

$family = array();

array_push($family, 'lyds');
array_push($family, 'lc');
array_push($family, 'gm');
array_push($family, 'paul');
array_push($family, 'vincent');
array_push($family, 'graham');
array_push($family, 'gary');
array_push($family, 'ken');
array_push($family, 'nichola');





sort($family);

$winner = $family[rand(0, count($family)-1)];

print strtoupper ($winner);
?>
 </p>
 </div>
 
 
<div id = "comment">
<?php

if($winner == 'graham'){
 echo "<p>Your so hot right now</p>";
}


?>
</div>
</body>

</html>
