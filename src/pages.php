<HTML>
<HEAD>
<TITLE> writing a file </TITLE>
</HEAD>

<BODY>


<?php
$wfile = fopen("/var/www/html/easyauthor/test.html", "w") or die("Unable to open file!");
$rfile1 = fopen("/var/www/html/src/stitch-1.txt", "r") or die("Unable to open file!");
$rfile2 = fopen("/var/www/html/src/stitch-2.txt", "r") or die("Unable to open file!");
$rfile3 = fopen("/var/www/html/src/stitch-3.txt", "r") or die("Unable to open file!");
$rfile4 = fopen("/var/www/html/src/stitch-4.txt", "r") or die("Unable to open file!");
$rfile5 = fopen("/var/www/html/src/stitch-5.txt", "r") or die("Unable to open file!");


$txt1 = fread($rfile1,filesize("/var/www/html/src/stitch-1.txt"));
$txt2 = fread($rfile2,filesize("/var/www/html/src/stitch-2.txt"));
$txt3 = fread($rfile3,filesize("/var/www/html/src/stitch-3.txt"));
$txt4 = fread($rfile4,filesize("/var/www/html/src/stitch-4.txt"));
$txt5 = fread($rfile5,filesize("/var/www/html/src/stitch-5.txt"));

fwrite($wfile, $txt1);
for ($x = 0; $x <= 10; $x++) {
    fwrite($wfile, $txt2);
} 

fwrite($wfile, $txt3);

for ($x = 0; $x <= 10; $x++) {
    fwrite($wfile, $txt4);
} 
fwrite($wfile, $txt5);

fclose($wfile);
fclose($rfile1);
fclose($rfile2);
fclose($rfile3);
fclose($rfile4);
fclose($rfile5);
?>



</BODY>
</HTML>
