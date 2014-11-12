<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{$base_url}">
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
      {$form_open}
        <h2 class="form-signin-heading">log in now</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                {$form_login}
                {if isset($error_form_login)}
                    {$error_form_login}
                {else if isset($errors.login)}
                    {$errors.login}
                {/if}

                {$form_password}
                {if isset($error_form_password)}
                    {$error_form_password}
                {else if isset($errors.password)}
                    {$errors.password}
                {/if}

                {if $show_captcha}
                    {if $use_recaptcha}

                    {else}
                        {$captcha_html}
                        {$form_captcha}
                        {if isset($error_form_captcha)}
                            {$error_form_captcha}
                        {/if}
                    {/if}
                {/if}
            </div>
            <label class="checkbox">
                {$form_remember} <label for="remember">Remember me</label>
                <span class="pull-right">
                    {$anchor_forgot_password}
                </span>
            </label>
            {$form_submit}
            <div class="registration">
                {if isset($anchor_register)}
                    {$anchor_register}
                {/if}
            </div>
        </div>
      {$form_close}
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->
    <!--Core js-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bs3/js/bootstrap.min.js"></script>

  </body>
</html>
