<?
include("ABAIT_function_file.php");
ob_start()?>
<?session_start();
if($_SESSION['passwordcheck']!='pass'){
	header("Location:logout.php");
	print $_SESSION['passwordcheck'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? print"<link rel='shortcut icon' href='$_SESSION[favicon]' type='image/x-icon'>";?>
<meta http-equiv="Content-Type" content="text/html;
	charset=utf-8" />
<title>
<?
print $_SESSION['SITE']
?>
</title>
<link 	rel = "stylesheet"
		type = "text/css"
		href = "ABAIT_admin.css">
</head>
<body>
<fieldset>
<?
if($_SESSION['cgfirst']!=""){
	$cgfirst=$_SESSION['cgfirst'];
	$cglast=$_SESSION['cglast'];
	}else{
	$cgfirst=$_SESSION['adminfirst'];
	$cglast=$_SESSION['adminlast'];
	}
build_page($_SESSION['privilege'],$cgfirst);
?>

<div id="menu">
	<h3 align='center'>ABAIT Scale Set-Up Options</h3>
	<table class='center'>
			
				<tr><td><table class='center'><tr><td align='center'><a href='ABAIT_Education2.php'>ABAIT Education Module</a></td></tr>
				<tr><td align='center'><a href="ABAIT_Scale_Setup.php">Edit Existing ABAIT Scale</a></td></tr>
				<tr><td align='center'><a href="ABAIT_Scale_Create.php">Create New ABAIT Scales</a></td></tr>
				<tr><td align='center'><a href="ABAIT_trigger.php">Edit ABAIT Scale Triggers</a></td></tr>
				<tr><td align='center'><a href="residentdata.php">Enroll New Resident</a></td></tr></table></td></tr>
	</table>
</div>
</fieldset>
<div id="footer"><p>&nbsp;Copyright &copy; 2010 ABAIT</p></div>
</body>
</html>