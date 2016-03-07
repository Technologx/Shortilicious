<?php
if( !defined('Shortilicious' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
?>
<style>
html, body {
  font-size: 24px;	
  color: #5858FA;	
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

.form-style-4{
    width: 450px;
    font-size: 16px;
    background: #495C70;
    padding: 30px 30px 15px 30px;
    border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
    font-family: Georgia, "Times New Roman", Times, serif;
    font-size: 16px;
    color: #fff;

}
.form-style-4 label {
    display:block;
    margin-bottom: 10px;
}
.form-style-4 label > span{
    display: inline-block;
    float: left;
    width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=email] 
{
    background: transparent;
    border: none;
    border-bottom: 1px dashed #83A4C5;
    width: 275px;
    outline: none;
    padding: 0px 0px 0px 0px;
    font-style: italic;
}
.form-style-4 textarea{
    font-style: italic;
    padding: 0px 0px 0px 0px;
    background: transparent;
    outline: none;
    border: none;
    border-bottom: 1px dashed #83A4C5;
    width: 275px;
    overflow: hidden;
    resize:none;
    height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=email]:focus,
.form-style-4 input[type=email] :focus
{
    border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
    background-color:#ed8223;
	color:#fff;
	font-family:'Helvetica Neue',sans-serif;
	font-size:18px;
	line-height:30px;
	border-radius:20px;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border:0;
	text-shadow:#C17C3A 0 -1px 0;
	width:120px;
	height:32px;
	cursor: pointer;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}

</style>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
<img alt="full screen background image" src="../imgs/bg.jpg" id="full-screen-background-image" />
<h2>Create a short URL</h2>
<?php print_errors() ?>
<div id="create_form">
<form class="form-style-4" method="get" action="index.php">
<p><label for="url">Enter web address (URL) here:</label><br />
<input id="url" type="text" name="url" value="<?php echo htmlentities(@$_GET['url']) ?>" />
<input class="button" type="submit" value="Shorten" /></p>
<p><label for="alias">Custom alias (optional):</label><br />
<?php echo SITE_URL ?>/<input id="alias" maxlength="40" type="text" name="alias" value="<?php echo htmlentities(@$_GET['alias']) ?>" /><br />
<em>May contain letters, numbers, dashes and underscores.</em></p>
</form>
</div>
<script type="text/javascript">
//<![CDATA[
if (document.getElementById) {
    document.getElementById('url').focus();
}
//]]>
</script>