<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\error\error_404.php" */ ?>
<?php /*%%SmartyHeaderCode:157695462dce3f17737-50934143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af775e7d719a904baa23551d73fa527712ffd900' => 
    array (
      0 => 'application\\views\\error\\error_404.php',
      1 => 1408841811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157695462dce3f17737-50934143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce4017e42_26150771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce4017e42_26150771')) {function content_5462dce4017e42_26150771($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>




  <body class="body-404">

    <div class="error-head"> </div>

    <div class="container ">

      <section class="error-wrapper text-center">
          <h1><img src="assets/images/404.png" alt=""></h1>
          <div class="error-desk">
              <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
              <p class="nrml-txt"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
          </div>
          <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="back-btn"><i class="fa fa-home"></i> Back To Home</a>
      </section>

    </div>


  </body>
</html>
<?php }} ?>
