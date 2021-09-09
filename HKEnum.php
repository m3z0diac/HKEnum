<?php

$admins = "
admin/ ,xdrx/ ,administrator/,admin1/,admin2/,admin3/,admin4/,admin5/,usuarios/,usuario/,administrator/,moderator/,webadmin/,adminarea/,bb-admin/,adminLogin/,admin_area/,panel-administracion/,instadmin/,memberadmin/,administratorlogin/,adm/,admin/account.php,admin/index.php,admin/login.php,admin/admin.php,admin/account.php,admin_area/admin.php,admin_area/login.php,siteadmin/login.php,siteadmin/index.php,siteadmin/login.html,admin/account.html,admin/index.html,admin/login.html,admin/admin.html,admin_area/index.php,bb-admin/index.php,bb-admin/login.php,bb-admin/admin.php,admin/home.php,admin_area/login.html,admin_area/index.html,admin/controlpanel.php,admin.php,admincp/index.asp,admincp/login.asp,admincp/index.html,admin/account.html,adminpanel.html,webadmin.html,webadmin/index.html,webadmin/admin.html,webadmin/login.html,admin/admin_login.html,admin_login.html,panel-administracion/login.html,admin/cp.php,cp.php,administrator/index.php,administrator/login.php,nsw/admin/login.php,webadmin/login.php,admin/admin_login.php,admin_login.php,administrator/account.php,administrator.php,admin_area/admin.html,pages/admin/admin-login.php,admin/admin-login.php,admin-login.php,bb-admin/index.html,bb-admin/login.html,acceso.php,bb-admin/admin.html,admin/home.html,login.php,modelsearch/login.php,moderator.php,moderator/login.php,moderator/admin.php,account.php,pages/admin/admin-login.html,admin/admin-login.html,admin-login.html,controlpanel.php,admincontrol.php,admin/adminLogin.html,adminLogin.html,admin/adminLogin.html,home.html,rcjakar/admin/login.php,adminarea/index.html,adminarea/admin.html,webadmin.php,webadmin/index.php,webadmin/admin.php,admin/controlpanel.html,admin.html,admin/cp.html,cp.html,adminpanel.php,moderator.html,administrator/index.html,administrator/login.html,user.html,administrator/account.html,administrator.html,login.html,modelsearch/login.html,moderator/login.html,adminarea/login.html,panel-administracion/index.html,panel-administracion/admin.html,modelsearch/index.html,modelsearch/admin.html,admincontrol/login.html,adm/index.html,adm.html,moderator/admin.html,user.php,account.html,controlpanel.html,admincontrol.html,panel-administracion/login.php,wp-login.php,adminLogin.php,admin/adminLogin.php,home.php,admin.php,adminarea/index.php,adminarea/admin.php,adminarea/login.php,panel-administracion/index.php,panel-administracion/admin.php,modelsearch/index.php,modelsearch/admin.php,admincontrol/login.php,adm/admloginuser.php,admloginuser.php,admin2.php,admin2/login.php,admin2/index.php,usuarios/login.php,adm/index.php,adm.php,affiliate.php,adm_auth.php,memberadmin.php,administratorlogin.php,admin/,administrator/,admin1/,admin2/,admin3/,admin4/,admin5/,moderator/,webadmin/,adminarea/,bb-admin/,adminLogin/,admin_area/,panel-administracion/,instadmin/,memberadmin/,administratorlogin/,adm/,account.asp,admin/account.asp,admin/index.asp,admin/login.asp,admin/admin.asp,admin_area/admin.asp,admin_area/login.asp,admin/account.html,admin/index.html,admin/login.html,admin/admin.html,admin_area/admin.html,admin_area/login.html,admin_area/index.html,admin_area/index.asp,bb-admin/index.asp,bb-admin/login.asp,bb-admin/admin.asp,bb-admin/index.html,bb-admin/login.html,bb-admin/admin.html,admin/home.html,admin/controlpanel.html,admin.html,admin/cp.html,cp.html,administrator/index.html,administrator/login.html,administrator/account.html,administrator.html,login.html,modelsearch/login.html,moderator.html,moderator/login.html,moderator/admin.html,account.html,controlpanel.html,admincontrol.html,admin_login.html,panel-administracion/login.html,admin/home.asp,admin/controlpanel.asp,admin.asp,pages/admin/admin-login.asp,admin/admin-login.asp,admin-login.asp,admin/cp.asp,cp.asp,administrator/account.asp,administrator.asp,acceso.asp,login.asp,modelsearch/login.asp,moderator.asp,moderator/login.asp,administrator/login.asp,moderator/admin.asp,controlpanel.asp,admin/account.html,adminpanel.html,webadmin.html,pages/admin/admin-login.html,admin/admin-login.html,webadmin/index.html,webadmin/admin.html,webadmin/login.html,user.asp,user.html,admincp/index.asp,admincp/login.asp,admincp/index.html,admin/adminLogin.html,adminLogin.html,admin/adminLogin.html,home.html,adminarea/index.html,adminarea/admin.html,adminarea/login.html,panel-administracion/index.html,panel-administracion/admin.html,modelsearch/index.html,modelsearch/admin.html,admin/admin_login.html,admincontrol/login.html,adm/index.html,adm.html,admincontrol.asp,admin/account.asp,adminpanel.asp,webadmin.asp,webadmin/index.asp,webadmin/admin.asp,webadmin/login.asp,admin/admin_login.asp,admin_login.asp,panel-administracion/login.asp,adminLogin.asp,admin/adminLogin.asp,home.asp,admin.asp,adminarea/index.asp,adminarea/admin.asp,adminarea/login.asp,admin-login.html,panel-administracion/index.asp,panel-administracion/admin.asp,modelsearch/index.asp,modelsearch/admin.asp,administrator/index.asp,admincontrol/login.asp,adm/admloginuser.asp,admloginuser.asp,admin2.asp,admin2/login.asp,admin2/index.asp,adm/index.asp,adm.asp,affiliate.asp,adm_auth.asp,memberadmin.asp,administratorlogin.asp,siteadmin/login.asp,siteadmin/index.asp,siteadmin/login.html,admin/,administrator/,admin1/,admin2/,admin3/,admin4/,admin5/,usuarios/,usuario/,administrator/,moderator/,webadmin/,adminarea/,bb-admin/,adminLogin/,admin_area/,panel-administracion/,instadmin/,memberadmin/,administratorlogin/,adm/,admin/account.cfm,admin/index.cfm,admin/login.cfm,admin/admin.cfm,admin/account.cfm,admin_area/admin.cfm,admin_area/login.cfm,siteadmin/login.cfm,siteadmin/index.cfm,siteadmin/login.html,admin/account.html,admin/index.html,admin/login.html,admin/admin.html,admin_area/index.cfm,bb-admin/index.cfm,bb-admin/login.cfm,bb-admin/admin.cfm,admin/home.cfm,admin_area/login.html,admin_area/index.html,admin/controlpanel.cfm,admin.cfm,admincp/index.asp,admincp/login.asp,admincp/index.html,admin/account.html,adminpanel.html,webadmin.html,webadmin/index.html,webadmin/admin.html,webadmin/login.html,admin/admin_login.html,admin_login.html,panel-administracion/login.html,admin/cp.cfm,cp.cfm,administrator/index.cfm,administrator/login.cfm,nsw/admin/login.cfm,webadmin/login.cfm,admin/admin_login.cfm,admin_login.cfm,administrator/account.cfm,administrator.cfm,admin_area/admin.html,pages/admin/admin-login.cfm,admin/admin-login.cfm,admin-login.cfm,bb-admin/index.html,bb-admin/login.html,bb-admin/admin.html,admin/home.html,login.cfm,modelsearch/login.cfm,moderator.cfm,moderator/login.cfm,moderator/admin.cfm,account.cfm,pages/admin/admin-login.html,admin/admin-login.html,admin-login.html,controlpanel.cfm,admincontrol.cfm,admin/adminLogin.html,acceso.cfm,adminLogin.html,admin/adminLogin.html,home.html,rcjakar/admin/login.cfm,adminarea/index.html,adminarea/admin.html,webadmin.cfm,webadmin/index.cfm,webadmin/admin.cfm,admin/controlpanel.html,admin.html,admin/cp.html,cp.html,adminpanel.cfm,moderator.html,administrator/index.html,administrator/login.html,user.html,administrator/account.html,administrator.html,login.html,modelsearch/login.html,moderator/login.html,adminarea/login.html,panel-administracion/index.html,panel-administracion/admin.html,modelsearch/index.html,modelsearch/admin.html,admincontrol/login.html,adm/index.html,adm.html,moderator/admin.html,user.cfm,account.html,controlpanel.html,admincontrol.html,panel-administracion/login.cfm,wp-login.cfm,adminLogin.cfm,admin/adminLogin.cfm,home.cfm,admin.cfm,adminarea/index.cfm,adminarea/admin.cfm,adminarea/login.cfm,panel-administracion/index.cfm,panel-administracion/admin.cfm,modelsearch/index.cfm,modelsearch/admin.cfm,admincontrol/login.cfm,adm/admloginuser.cfm,admloginuser.cfm,admin2.cfm,admin2/login.cfm,admin2/index.cfm,usuarios/login.cfm,adm/index.cfm,adm.cfm,affiliate.cfm,adm_auth.cfm,memberadmin.cfm,administratorlogin.cfm,admin/,administrator/,admin1/,admin2/,admin3/,admin4/,admin5/,usuarios/,usuario/,administrator/,moderator/,webadmin/,adminarea/,bb-admin/,adminLogin/,admin_area/,panel-administracion/,instadmin/,memberadmin/,administratorlogin/,adm/,admin/account.js,admin/index.js,admin/login.js,admin/admin.js,admin/account.js,admin_area/admin.js,admin_area/login.js,siteadmin/login.js,siteadmin/index.js,siteadmin/login.html,admin/account.html,admin/index.html,admin/login.html,admin/admin.html,admin_area/index.js,bb-admin/index.js,bb-admin/login.js,bb-admin/admin.js,admin/home.js,admin_area/login.html,admin_area/index.html,admin/controlpanel.js,admin.js,admincp/index.asp,admincp/login.asp,admincp/index.html,admin/account.html,adminpanel.html,webadmin.html,webadmin/index.html,webadmin/admin.html,webadmin/login.html,admin/admin_login.html,admin_login.html,panel-administracion/login.html,admin/cp.js,cp.js,administrator/index.js,administrator/login.js,nsw/admin/login.js,webadmin/login.js,admin/admin_login.js,admin_login.js,administrator/account.js,administrator.js,admin_area/admin.html,pages/admin/admin-login.js,admin/admin-login.js,admin-login.js,bb-admin/index.html,bb-admin/login.html,bb-admin/admin.html,admin/home.html,login.js,modelsearch/login.js,moderator.js,moderator/login.js,moderator/admin.js,account.js,pages/admin/admin-login.html,admin/admin-login.html,admin-login.html,controlpanel.js,admincontrol.js,admin/adminLogin.html,adminLogin.html,admin/adminLogin.html,home.html,rcjakar/admin/login.js,adminarea/index.html,adminarea/admin.html,webadmin.js,webadmin/index.js,acceso.js,webadmin/admin.js,admin/controlpanel.html,admin.html,admin/cp.html,cp.html,adminpanel.js,moderator.html,administrator/index.html,administrator/login.html,user.html,administrator/account.html,administrator.html,login.html,modelsearch/login.html,moderator/login.html,adminarea/login.html,panel-administracion/index.html,panel-administracion/admin.html,modelsearch/index.html,modelsearch/admin.html,admincontrol/login.html,adm/index.html,adm.html,moderator/admin.html,user.js,account.html,controlpanel.html,admincontrol.html,panel-administracion/login.js,wp-login.js,adminLogin.js,admin/adminLogin.js,home.js,admin.js,adminarea/index.js,adminarea/admin.js,adminarea/login.js,panel-administracion/index.js,panel-administracion/admin.js,modelsearch/index.js,modelsearch/admin.js,admincontrol/login.js,adm/admloginuser.js,admloginuser.js,admin2.js,admin2/login.js,admin2/index.js,usuarios/login.js,adm/index.js,adm.js,affiliate.js,adm_auth.js,memberadmin.js,administratorlogin.js,admin/,administrator/,admin1/,admin2/,admin3/,admin4/,admin5/,usuarios/,usuario/,administrator/,moderator/,webadmin/,adminarea/,bb-admin/,adminLogin/,admin_area/,panel-administracion/,instadmin/,memberadmin/,administratorlogin/,adm/,admin/account.cgi,admin/index.cgi,admin/login.cgi,admin/admin.cgi,admin/account.cgi,admin_area/admin.cgi,admin_area/login.cgi,siteadmin/login.cgi,siteadmin/index.cgi,siteadmin/login.html,admin/account.html,admin/index.html,admin/login.html,admin/admin.html,admin_area/index.cgi,bb-admin/index.cgi,bb-admin/login.cgi,bb-admin/admin.cgi,admin/home.cgi,admin_area/login.html,admin_area/index.html,admin/controlpanel.cgi,admin.cgi,admincp/index.asp,admincp/login.asp,admincp/index.html,admin/account.html,adminpanel.html,webadmin.html,webadmin/index.html,webadmin/admin.html,webadmin/login.html,admin/admin_login.html,admin_login.html,panel-administracion/login.html,admin/cp.cgi,cp.cgi,administrator/index.cgi,administrator/login.cgi,nsw/admin/login.cgi,webadmin/login.cgi,admin/admin_login.cgi,admin_login.cgi,administrator/account.cgi,administrator.cgi,admin_area/admin.html,pages/admin/admin-login.cgi,admin/admin-login.cgi,admin-login.cgi,bb-admin/index.html,bb-admin/login.html,bb-admin/admin.html,admin/home.html,login.cgi,modelsearch/login.cgi,moderator.cgi,moderator/login.cgi,moderator/admin.cgi,account.cgi,pages/admin/admin-login.html,admin/admin-login.html,admin-login.html,controlpanel.cgi,admincontrol.cgi,admin/adminLogin.html,adminLogin.html,admin/adminLogin.html,home.html,rcjakar/admin/login.cgi,adminarea/index.html,adminarea/admin.html,webadmin.cgi,webadmin/index.cgi,acceso.cgi,webadmin/admin.cgi,admin/controlpanel.html,admin.html,admin/cp.html,cp.html,adminpanel.cgi,moderator.html,administrator/index.html,administrator/login.html,user.html,administrator/account.html,administrator.html,login.html,modelsearch/login.html,moderator/login.html,adminarea/login.html,panel-administracion/index.html,panel-administracion/admin.html,modelsearch/index.html,modelsearch/admin.html,admincontrol/login.html,adm/index.html,adm.html,moderator/admin.html,user.cgi,account.html,controlpanel.html,admincontrol.html,panel-administracion/login.cgi,wp-login.cgi,adminLogin.cgi,admin/adminLogin.cgi,home.cgi,admin.cgi,adminarea/index.cgi,adminarea/admin.cgi,adminarea/login.cgi,panel-administracion/index.cgi,panel-administracion/admin.cgi,modelsearch/index.cgi,modelsearch/admin.cgi,admincontrol/login.cgi,adm/admloginuser.cgi,admloginuser.cgi,admin2.cgi,admin2/login.cgi,admin2/index.cgi,usuarios/login.cgi,adm/index.cgi,adm.cgi,affiliate.cgi,adm_auth.cgi,memberadmin.cgi,administratorlogin.cgi,admin/,administrator/,admin1/,admin2/,admin3/,admin4/,admin5/,usuarios/,usuario/,administrator/,moderator/,webadmin/,adminarea/,bb-admin/,adminLogin/,admin_area/,panel-administracion/,instadmin/,memberadmin/,administratorlogin/,adm/,siteadmin/login.html,admin/account.html,admin/index.html,admin/login.html,admin/admin.html,admin_area/login.html,admin_area/index.html,admincp/index.asp,admincp/login.asp,admincp/index.html,admin/account.html,adminpanel.html,webadmin.html,webadmin/index.html,webadmin/admin.html,webadmin/login.html,admin/admin_login.html,admin_login.html,panel-administracion/login.html,admin_area/admin.html,bb-admin/index.html,bb-admin/login.html,bb-admin/admin.html,admin/home.html,pages/admin/admin-login.html,admin/admin-login.html,admin-login.html,admin/adminLogin.html,adminLogin.html,admin/adminLogin.html,home.html,adminarea/index.html,adminarea/admin.html,admin/controlpanel.html,admin.html,admin/cp.html,cp.html,moderator.html,administrator/index.html,administrator/login.html,user.html,administrator/account.html,administrator.html,login.html,modelsearch/login.html,moderator/login.html,adminarea/login.html,panel-administracion/index.html,panel-administracion/admin.html,modelsearch/index.html,modelsearch/admin.html,admincontrol/login.html,adm/index.html,adm.html,moderator/admin.html,account.html,controlpanel.html,admincontrol.html";
$admins = explode(",", $admins);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function get_url()
{
	$url = (@test_input($_GET['url'])) or die("<h2>Put the fucking domain</h2>");
	return $url;
}
function get_option()
{
	$option = (@test_input($_GET['option'])) or die("<h2>Choose option</h2>");
	return $option;
}

function adminPanel($wordlist)
{
	$target = get_url();
	foreach ($wordlist as $key => $admin) {
		$path = "https://" . $target . "/" . $admin;
		$headers = (@get_headers($path)) or die('<h2 style="color:red;">Check your Internet connetion</h2>');
		$result = substr($headers[0], 9, 3);
		$result = explode("\n", $result);
		if ($result[0] == 200) {
			echo '<h4>[+] admin panel found ==> <a style="color:green;" href="' . $path . '" target="_blank">' . $path . '</a></h4>';
			break;
		}
	}
}

function linksEnum()
{
	$html = (@file_get_contents("https://".get_url())) or die('<h2 style="color:red;">Check your Internet connetion</h2>');
	$myVar = htmlspecialchars($html, ENT_QUOTES);
	$myVar = explode(" ", $myVar);
	$result = array();
	for( $i = 0; $i <= count($myVar); $i++ ) {
		if (@substr($myVar[$i], 0, 4) == "href") {
			$link = explode("/", $myVar[$i]);
			if (count($link) <= 3) {
				@$sub = $link[2];
				$sub = explode(">", $sub);
				array_push($result, $sub[0]);
			}
			elseif(count($link) > 3) {
				if ($link[3][0] != "%") {
					$sub = $link[2] . "/" .$link[3];
					$sub = explode(">", $sub);
					array_push($result,$sub[0]);
				}
			}

		}
	}
	$res_ult = array_unique($result);
	foreach($res_ult as $index => $s ){
		$s = explode('"', $s);
		echo $s[0] . "<br>";
	}
}

function dirsEnum()
{
	$html = (@file_get_contents("https://".get_url())) or die('<h2 style="color:red;">Check your Internet connetion</h2>');
	$myVar = htmlspecialchars($html, ENT_QUOTES);
	$myVar = explode(" ", $myVar);
	$result = array();
	for( $i = 0; $i <= count($myVar); $i++ ) {
		if (@substr($myVar[$i], 0, 4) == "href") {
			$link = explode("/", $myVar[$i]);
			if (count($link) <= 3) {
				@$sub = $link[2];
				$sub = explode(">", $sub);
				array_push($result, $sub[0]);
			}
			elseif(count($link) > 3) {
				if ($link[3][0] != "%") {
					$sub = $link[2] . "/" .$link[3];
					$sub = explode(">", $sub);
					array_push($result,$sub[0]);
				}
			}

		}
	}
	$res_ult = array_unique($result);
	foreach($res_ult as $index => $s ){
		$s = explode("/", $s);
		if (count($s) >= 2) {
			echo $s[0] . "/" . $s[1] . "<br>";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HK-GANG Enumetor</title>
	<meta name = "author" content = "Hamza Elansari" />
	<link rel = "icon" href = "hkgicon.png" type = "image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<h3 style="text-align: center;">HK-GANG ENUMATOR :</h3>
		<center><img src="hkgicon.png"></center>
		<form action="HKEnum.php">
			<label><input type="text" name="url" placeholder="EX: example.com">
			<label><input type="radio" name="option" value="admin">Admin Panel Founder</label><br>
			<label><input type="radio" name="option" value="links">Get All Page Links</label><br>
			<label><input type="radio" name="option" value="directories">Directories BruteForce Attack</label><br>
			<label><input type="submit" value="START"></label>
		</form>
	<?php
		if (get_option() == "admin") {
			adminPanel($admins);
		}
		elseif (get_option() == "links") {
			linksEnum();
		}
		elseif (get_option() == "directories") {
		 	dirsEnum();
		}
		else {
			return;
		}
	?>
	</div>
</body>
</html>
