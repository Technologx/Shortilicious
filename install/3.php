<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Shortilicious Installation Wizard</title>
<link rel="stylesheet" type="text/css" href="install.css">
</head>

<body>
<img alt="full screen background image" src="../imgs/installbg.jpg" id="full-screen-background-image" />
<img src="../imgs/logo.png" height="52" width="116" />

<span class="style2">Installation<hr />

<?php
require("../functions.php");
error_reporting(0);
define("DB_HOSTNAME", $_POST['server']);
define("DB_USERNAME", $_POST['user']);
define("DB_PASSWORD", $_POST['pass']);
define("DB_NAME",     $_POST['db']);
define("DB_VERSION",  4);

        db_connect();
        mysql_query("CREATE TABLE IF NOT EXISTS `shortilicious_settings` ( last_number bigint(20) unsigned NOT NULL default '0', KEY last_number (last_number) ) ENGINE=MyISAM") or die(mysql_error());
        mysql_query("INSERT INTO shortilicious_settings VALUES (1)");
        mysql_query("CREATE TABLE IF NOT EXISTS `shortilicious_urls` ( id int(10) unsigned NOT NULL auto_increment, url text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL, code varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL default '', alias varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL default '', date_added datetime NOT NULL default '00:00:00 00:00:00', PRIMARY KEY  (id), UNIQUE KEY code (code), KEY alias (alias) ) ENGINE=MyISAM") or die(mysql_error());
	mysql_query("INSERT INTO shortilicious_urls VALUES (1,'http://technologx.96.lt/','tech','shortilicious','03-04-16 11:00:00')");
        ?>
       
<p style="color:lime;">The database has been set up successfully! We now need to write the config file. In order to do this we need a little more information about the site we're setting up, so go ahead and click next to continue.</p>
<form action="4.php" class="style2" method="post">
<input name="server" style="width: 150px" type="hidden" value="<?php echo $_POST['server']; ?>" />
<input name="user" style="width: 150px" type="hidden" value="<?php echo $_POST['user']; ?>" />
<input name="pass" style="width: 150px" type="hidden" value="<?php echo $_POST['pass']; ?>" />
<input name="db" style="width: 150px" type="hidden" value="<?php echo $_POST['db']; ?>" />
<input name="Submit1" type="submit" value="Next -&gt;" />
</form>