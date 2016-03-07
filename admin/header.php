<?php
ini_set('display_errors', 0);
?>
<html>
<head>
<title>Shortilicious Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="../assets/admin.css" />
<script type="text/javascript" src="../assets/admin.js"></script>
<style type="text/css">
html, body {
  color: #FE642E;	
  height: 100%;
  width: 100%;
  padding: 0;
  margin: 0;
}

#full-screen-background-image {
  z-index: -999;
  min-height: 100%;
  min-width: 1024px;
  width: 100%;
  height: auto;
  position: fixed;
  top: 0;
  left: 0;
}

#wrapper {
  position: relative;
  width: 800px;
  min-height: 400px;
  margin: 100px auto;
  color: #333;
}
.style2 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
	color: #FE642E;
}
.button{
	height:2em;
	padding:15px 50px;
	margin:20px 40px;
	cursor:pointer;
	display:inline-block;
	color:#FFF;
	font-size:1em;
	border:1px solid #eee;
	background:#eee;
	border-radius:4px;
	line-height:2em;
	border:1px solid #aaa;
	text-decoration:none;
		
	-webkit-transition: all 0.3s linear;
     -khtml-transition: all 0.3s linear;
       -moz-transition: all 0.3s linear;
         -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
}
.red{
	background: #ff3019; /* Old browsers */
	background: -moz-linear-gradient(top, #ff3019 0%, #cf0404 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff3019), color-stop(100%,#cf0404)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #ff3019 0%,#cf0404 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #ff3019 0%,#cf0404 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #ff3019 0%,#cf0404 100%); /* IE10+ */
	background: linear-gradient(top, #ff3019 0%,#cf0404 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3019', endColorstr='#cf0404',GradientType=0 ); /* IE6-9 */
}
.button:hover{
	-webkit-box-shadow:rgba(0,0,0,0.7) 0px 5px 15px, inset rgba(0,0,0,0.15) 0px -10px 20px;
     -khtml-box-shadow:rgba(0,0,0,0.7) 0px 5px 15px, inset rgba(0,0,0,0.15) 0px -10px 20px;
       -moz-box-shadow:rgba(0,0,0,0.7) 0px 5px 15px, inset rgba(0,0,0,0.15) 0px -10px 20px;
         -o-box-shadow:rgba(0,0,0,0.7) 0px 5px 15px, inset rgba(0,0,0,0.15) 0px -10px 20px;
            box-shadow:rgba(0,0,0,0.7) 0px 5px 15px, inset rgba(0,0,0,0.15) 0px -10px 20px;
}
.button:active {
    -webkit-box-shadow: rgba(255,255,255,0.25) 0px 1px 0px, inset rgba(255,255,255,0.03) 0px 20px 0px, inset rgba(0,0,0,0.15) 0px -20px 20px, inset rgba(255,255,255,0.05) 0px 20px 20px;
     -khtml-box-shadow: rgba(255,255,255,0.25) 0px 1px 0px, inset rgba(255,255,255,0.03) 0px 20px 0px, inset rgba(0,0,0,0.15) 0px -20px 20px, inset rgba(255,255,255,0.05) 0px 20px 20px;
       -moz-box-shadow: rgba(255,255,255,0.25) 0px 1px 0px, inset rgba(255,255,255,0.03) 0px 20px 0px, inset rgba(0,0,0,0.15) 0px -20px 20px, inset rgba(255,255,255,0.05) 0px 20px 20px;
         -o-box-shadow: rgba(255,255,255,0.25) 0px 1px 0px, inset rgba(255,255,255,0.03) 0px 20px 0px, inset rgba(0,0,0,0.15) 0px -20px 20px, inset rgba(255,255,255,0.05) 0px 20px 20px;
            box-shadow: rgba(255,255,255,0.25) 0px 1px 0px, inset rgba(255,255,255,0.03) 0px 20px 0px, inset rgba(0,0,0,0.15) 0px -20px 20px, inset rgba(255,255,255,0.05) 0px 20px 20px;
    text-shadow:1px 1px 1px #eee;
}
.light {
    display: block;
    position: relative;
    background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,0.9) 50%, rgba(255,255,255,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(255,255,255,0)), color-stop(50%,rgba(255,255,255,0.9)), color-stop(100%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.9) 50%,rgba(255,255,255,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.9) 50%,rgba(255,255,255,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.9) 50%,rgba(255,255,255,0) 100%); /* IE10+ */
	background: linear-gradient(left, rgba(255,255,255,0) 0%,rgba(255,255,255,0.9) 50%,rgba(255,255,255,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 */
    padding: 1px 9px;
    top: -16px;
    left: -53px;
    height: 0px;
}
.button:hover .light{
	
	padding:1px 5px;
  
    -webkit-animation-name: shine;
    -webkit-animation-duration: 0.6s;
    -webkit-animation-timing-function: linear;
    -khtml-animation-name: shine;
    -khtml-animation-duration: 0.6s;
    -khtml-animation-timing-function: linear;
    -moz-animation-name: shine;
    -moz-animation-duration: 0.6s;
    -moz-animation-timing-function: linear;
    -o-animation-name: shine;
    -o-animation-duration: 0.6s;
    -o-animation-timing-function: linear;
    -webkit-animation-name: shine;
    -webkit-animation-duration: 0.6s;
    -webkit-animation-timing-function: linear;
    left:45px;
}

@-webkit-keyframes shine {
    0% { top: -15px; left: -48px; }
    10% { top: -5px; }
    20% { top: 5px; }
    30% { top: 15px; }
    40% { top: 25px; }
    50% { top: 35px; }
    60% { top: 25px; }
    70% { top: 15px; }
    80% { top: 5px; }
    90% { top: -5px; }
    100% { top:-15px; left:45px; -webkit-transform: rotate(-360deg); }
}

@-khtml-keyframes shine {
    0% { top: -15px; left: -48px; }
    10% { top: -5px; }
    20% { top: 5px; }
    30% { top: 15px; }
    40% { top: 25px; }
    50% { top: 35px; }
    60% { top: 25px; }
    70% { top: 15px; }
    80% { top: 5px; }
    90% { top: -5px; }
    100% { top:-15px; left:45px; -khtml-transform: rotate(-360deg); }
}

@-moz-keyframes shine {
    0% { top: -15px; left: -48px; }
    10% { top: -5px; }
    20% { top: 5px; }
    30% { top: 15px; }
    40% { top: 25px; }
    50% { top: 35px; }
    60% { top: 25px; }
    70% { top: 15px; }
    80% { top: 5px; }
    90% { top: -5px; }
    100% { top:-15px; left:45px; -moz-transform: rotate(-360deg); }
}

@-o-keyframes shine {
    0% { top: -15px; left: -48px; }
    10% { top: -5px; }
    20% { top: 5px; }
    30% { top: 15px; }
    40% { top: 25px; }
    50% { top: 35px; }
    60% { top: 25px; }
    70% { top: 15px; }
    80% { top: 5px; }
    90% { top: -5px; }
    100% { top:-15px; left:45px; -o-transform: rotate(-360deg); }
}

@-keyframes shine {
    0% { top: -15px; left: -48px; }
    10% { top: -5px; }
    20% { top: 5px; }
    30% { top: 15px; }
    40% { top: 25px; }
    50% { top: 35px; }
    60% { top: 25px; }
    70% { top: 15px; }
    80% { top: 5px; }
    90% { top: -5px; }
    100% { top:-15px; left:45px; transform: rotate(-360deg); }
}

.logout {
	position: fixed;
	right: 0px;
}

.search {
	position: fixed;
	top: 155px;
	left: 445px;	
}

</style>
</head>
<body>
<?php if (is_admin_login()): ?>
<img alt="full screen background image" src="../imgs/bg.jpg" id="full-screen-background-image" />
<img src="../imgs/logo.png" height="52" width="116" />

<span class="style2">Administration<hr />
<?php
$updateurl = "http://technologx.96.lt";
$fh = fopen($updateurl, 'r');
$version = fread($fh, 3);
fclose($fh);
$current = Shortilicious_NUMERICVERSION;
if ($version > $current && $version !== $current) {
echo "<center><p style=\"color:green;\">A new version of Shortilicious is available! Download it at <a href=\"http://technologx.96.lt">http://technologx.96.lt</a></p></center><hr/>";
} 
elseif ($version < $current && $version !== $current) {
echo "<center><p style=\"color:blue;\">It seems you are running a prerelease version of Shortilicious. Expect Bugs!</p></center><hr/>";
}
?>
<div class="logout"><a href="logout.php" class="button red"><div class="light"></div>LogOut</a></div><br />
<div class="search"><h2>Search</h2>
<form method="get" action="index.php">
<table id="admin_search">
<tr>
<td><strong>By code or custom alias:</strong></td>
<td><input type="text" name="search_alias" size="30" value="<?php echo @htmlentities($_GET['search_alias']) ?>" /></td>
</tr>
<tr>
<td><strong>By part of URL string:</strong></td>
<td><input type="text" name="search_url" size="30" value="<?php echo @htmlentities($_GET['search_url']) ?>" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" value="Search" /></td>
</tr>
</table>
</form>
<hr /></div>
<?php endif; ?>