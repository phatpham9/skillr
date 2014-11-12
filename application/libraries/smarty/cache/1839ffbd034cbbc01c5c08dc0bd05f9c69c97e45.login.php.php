<?php /*%%SmartyHeaderCode:303695462dcabbe41c4-81347030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1839ffbd034cbbc01c5c08dc0bd05f9c69c97e45' => 
    array (
      0 => 'application\\views\\auth\\login.php',
      1 => 1408847461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303695462dcabbe41c4-81347030',
  'variables' => 
  array (
    'base_url' => 0,
    'form_open' => 0,
    'form_login' => 0,
    'error_form_login' => 0,
    'errors' => 0,
    'form_password' => 0,
    'error_form_password' => 0,
    'show_captcha' => 0,
    'use_recaptcha' => 0,
    'captcha_html' => 0,
    'form_captcha' => 0,
    'error_form_captcha' => 0,
    'form_remember' => 0,
    'anchor_forgot_password' => 0,
    'form_submit' => 0,
    'anchor_register' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcabd2cc26_31808453',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcabd2cc26_31808453')) {function content_5462dcabd2cc26_31808453($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="http://skillr.local/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Skill-Set Development</title>

    <!--Core CSS -->
    <link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">
    <div class="container">
      <form action="http://skillr.local/auth/login" method="post" accept-charset="utf-8" class="form-signin">
        <h2 class="form-signin-heading">log in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" name="login" value="" id="login" maxlength="80" size="30" class="form-control" autofocus="" placeholder="Email or Username"  />
                
                <input type="password" name="password" value="" id="password" size="30" placeholder="Password" class="form-control"  />
                
                            </div>
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1" id="remember"  /> <label for="remember">Remember me</label>
                <span class="pull-right">
                    <a href="http://skillr.local/auth/forgot_password">Forgot password</a>
                </span>
            </label>
            <input type="submit" name="" value="Log in" class="btn btn-lg btn-login btn-block"  />
            <div class="registration">
                            </div>
        </div>
      </form>
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->
    <!--Core js-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bs3/js/bootstrap.min.js"></script>

  </body>
</html>
<?php }} ?>
