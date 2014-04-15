<!doctype html>
<html>
<head>
    <title>IP Geolocation</title>
</head>
<body>
<?php
function show_ip_info($ip = null)
{
    $url = "http://freegeoip.net/json/" . $ip;
    $content = file_get_contents($url);
    $json_obj = json_decode($content);
    echo "URL : " . $ip . " <br> IP Address : " . $json_obj->ip . " <br> Country : " . $json_obj->country_name . "<br> City : " .  $json_obj->city . "<br>";
}
$url = "www.google.com";
show_ip_info($url);
show_ip_info();
?>
</body>
</html>