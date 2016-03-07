<?php
if( !defined('Shortilicious' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
?>
<style>
	body {
		background: none;
		color: #CC2EFA;
	}
	a{
	outline: none;
  -moz-outline: 0;
  text-decoration: none;
	}
	a:link {
		color: #FA5858;
	}
	a:active{
		color: #00FFE4;
	}
	a:hover {
	color: #FC9100;
	}
	a:visited {
		color: #FF006D;
	}
</style>
<h2>Browser Bookmarklets</h2>
<p>Drag these links to your browser toolbar.</p>
<p><a href="javascript:(function(){var%20ali=prompt('Enter%20a%20custom%20alias:');if(ali){location.href='<?php echo SITE_URL ?>/index.php?url='%20+%20escape(location.href)%20+%20'&alias='+ali;}})();" title="Shorten with a custom alias">Shorten with a custom alias</a><br />
<a href="javascript:void(location.href='<?php echo SITE_URL ?>/index.php?alias=&url='+escape(location.href))">Shorten without a custom alias</a></p>
</div>
</div>
<div id="footer">
<center><p>&copy; <?php echo date("Y"); ?> <?php echo SITE_TITLE ?> - Powered by <a href="http://technologx.co.nf/tech91" target="_blank">Shortilicious</a></p></center>
</div>
</body>
</html>