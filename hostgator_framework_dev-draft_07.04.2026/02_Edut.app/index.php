<?php

date_default_timezone_set('America/Los_Angeles');

$domain = $_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'];
$timestamp = time();
$formatted_time = date('m/d/Y h:i:s A');
$php_version = PHP_VERSION;
$timezone_developer = "America/Los_Angeles";
$timezone_Yisrael_State_of = "UTC+02:00 (Israel/Jerusalem)";
$timezone_server = "America/New_York";
echo "<br><br>";
echo "Domain: " . "$domain" . "<br><br>";
echo "Server TimeZone: " . "$timezone_server" . "<br><br>"; 
echo "Developer TimeZone: " . "$timezone_developer" . " (Seattle, WA)" . "<br><br>";
echo "Yisrael (State, Of) TimeZone: " . "$timezone_Yisrael_State_of" . "<br><br>";
echo "Timestamp: " . "$formatted_time" . "<br><br>";
echo "PHP Version: " . "$php_version" . "<br><br>";

?>

<html>
<head>
</head>
<body>
</body>
<footer>
<h1>GodsWrath Productions</h1>
<br>
<h3>1960-DATE, 1983-DATE, 2015-2016, 2016-2018, 2019-2025, 2025-DATE</h3>
<br>
<br>
<h2>Second Chance Computing - Seattle, WA</h2>
<br>
<h3>2025-DATE, 1960-DATE, 1999-DATE, 2000-DATE, 2001-DATE</h3>
<br>
<br>
<h3>Live Developer: Brandon Roger Kastning</h3>
</footer>

</html>