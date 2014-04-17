<!doctype html>
<html>
<head>
    <title>IP Geolocation</title>
</head>
<body>
<?php
function show_ip_info($ip = null)
{
    $url = "http://freegeoip.net/csv/" . $ip;
    $file = fopen($url, 'r');
    $content = fgetcsv($file);
    fclose($file);
    echo "URL : " . $ip . " <br> IP Address : " .$content[0] . " <br> Country : " . $content[2] . "<br> City : " .  $content[4] . "<br>";
}
$url = "www.google.com";
show_ip_info($url);
show_ip_info();
?>
</body>
</html>