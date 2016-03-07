<?php
session_start();
require_once("../config.php");
require_once("../functions.php");

if (count($_POST) > 0) {
    if ($_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD) {
        $_SESSION['admin'] = 1;

        session_write_close();
        header("Location: index.php", true, 301);
        exit();
    }
    else {
        $_ERROR[] = "Wrong username or password.";

        print_errors();
    }
}
require_once("header.php");
print_errors();
?>
    <style>
	@font-face {
    font-family: CaviarDreams;
    src: url(../assets/CaviarDreams.ttf);
	}
	
body{
	font-family: CaviarDreams;
	font-size:14px;
	background: url(../imgs/bg.jpg) repeat top left;
	color:#333;
}
	</style>
    <style>
	  .login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
	</style>
   
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<center><a href="<?php echo SITE_URL ?>" ><img src="../imgs/logo.png" height="125px" width="200"></a></center>
    <div class="wrapper">
<form class="login" id="admin_login"  method="post" action="login.php">
<div class="login-block">
<h1>Administration Login</h1>
<input type="text" value="" placeholder="Username" name="username" id="username" />
    <input type="password" name="password" value="" placeholder="Password" id="password" />
    <button type="submit" value="Login" >Submit</button>
</div>
</form>
<?php
require_once("footer.php");
?>