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

        db_ins_connect();
        ?>
<p style="color:lime;">Success! The script managed to connect to the database you specified! This means we are ready to create the database structures. Click next to do this now.</p>
<form action="3.php" class="style2" method="post">
<input name="server" style="width: 150px" type="hidden" value="<?php echo $_POST['server']; ?>" />
<input name="user" style="width: 150px" type="hidden" value="<?php echo $_POST['user']; ?>" />
<input name="pass" style="width: 150px" type="hidden" value="<?php echo $_POST['pass']; ?>" />
<input name="db" style="width: 150px" type="hidden" value="<?php echo $_POST['db']; ?>" />
<input name="Submit1" type="submit" value="Next -&gt;" />
</form>




</span>