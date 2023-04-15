<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<canvas id="C"></canvas>
<script src="script.js"></script>
<div>
<?php
$dir = 'myDir';
if (isset($_GET['submit']))
    $num = isset($_GET['number']) ? $_GET['number'] : '';
    $Prob = isset($_GET['Problem']) ? $_GET['Problem'] : '';
    if ( !file_exists($dir) ) {
    mkdir ($dir, 0722);
}
$file = fopen($dir.'/dict.csv','a');
fwrite($file,$num.",".$Prob."\n");
echo("You typed : <br><br> <p>");
echo($Prob);
echo("</p>");
fclose($file);
chmod($dir,222)
?>
<br><br>
<button onclick="history.back()">Back</button>
</div>
</body>
</html>