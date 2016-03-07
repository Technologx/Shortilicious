<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Shortilicious Installation Wizard</title>
</head>

<body>
<img src="../imgs/logo.png" height="52" width="116" />

<span class="style2">Installation<hr />

<?php
error_reporting(0);
$server = $_POST['server'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$db = $_POST['db'];
$siteurl = $_POST['siteurl'];
$sitetitle = $_POST['sitetitle'];
$adminuser = $_POST['adminuser'];
$adminpass = $_POST['adminpass'];
?>


<?php $File = "../config.php"; $Handle = fopen($File, 'w'); $Data = "<?php\n"; fwrite($Handle, $Data); $Data = "define('DB_HOSTNAME', '$server');\n"; fwrite($Handle, $Data); $Data = "define('DB_USERNAME', '$user');\n"; fwrite($Handle, $Data); $Data = "define('DB_PASSWORD', '$pass');\n"; fwrite($Handle, $Data); $Data = "define('DB_NAME', '$db');\n"; fwrite($Handle, $Data); $Data = "define('DB_VERSION', '4');\n"; fwrite($Handle, $Data); $Data = "define('DB_PREFIX', 'shortilicious_');\n"; fwrite($Handle, $Data); $Data = "define('SITE_URL', '$siteurl');\n"; fwrite($Handle, $Data); $Data = "define('SITE_TITLE', '$sitetitle');\n"; fwrite($Handle, $Data); $Data = "define('ADMIN_USERNAME', '$adminuser');\n"; fwrite($Handle, $Data); $Data = "define('ADMIN_PASSWORD', '$adminpass');\n"; fwrite($Handle, $Data); $Data = "define('URL_PROTOCOLS', 'http|https|ftp|ftps|mailto|news|mms|rtmp|rtmpt|e2dk');\n"; fwrite($Handle, $Data); $Data = "define('Shortilicious_VERSION', '1.0.0');\n"; fwrite($Handle, $Data); $Data = "define('Shortilicious_NUMERICVERSION', '100');\n"; fwrite($Handle, $Data); $Data = "error_reporting(E_ALL);\n"; fwrite($Handle, $Data); $Data = "\$_ERROR = array();\n"; fwrite($Handle, $Data); fclose($Handle); ?>

<?php
$config = '../config.php';
if (file_exists($config)) {
echo "<p style=\"color:#FE2E64;\">Success! We've written the config file for you! Now visit <?php echo $siteurl; ?> and your new URL shortener should be ready to go! Your installer has now been locked you or anyone else won't be able to access it unless you rename it this directory no longer exists so please don't refresh! Instead please visit your new site url <a href='../'>here</a></p>";
}
else {
echo "<p style=\"color:red;\">Error. We couldn't write the config file. Please ensure that the directory which your url shortener lies in is writable by the server (chmodded to 777).</p>";
}
rename("../install/", "../.install");
?>