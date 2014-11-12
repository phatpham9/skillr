<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\layout\default.php" */ ?>
<?php /*%%SmartyHeaderCode:157695462dce341f6b9-23095231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '514ef1d13e157d4ed2366cc40adbe32ac1f68e6a' => 
    array (
      0 => 'application\\views\\layout\\default.php',
      1 => 1415764790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157695462dce341f6b9-23095231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'css_arr' => 0,
    'stylesheet' => 0,
    'js_arr' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce347ac62_31617222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce347ac62_31617222')) {function content_5462dce347ac62_31617222($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
	<base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Skill-set Development Tool">
    <meta name="author" content="http://phatpham.com">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>Skill-Set Development</title>

    <!--Core CSS -->
    <link href="assets/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <?php if (isset($_smarty_tpl->tpl_vars['css_arr']->value)&&$_smarty_tpl->tpl_vars['css_arr']->value) {?>
    <!--external css-->
    <?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['stylesheet']->value;?>
" rel="stylesheet">
    <?php } ?>
    <?php }?>

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
        	<?php echo $_smarty_tpl->getSubTemplate ("layout/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <?php echo $_smarty_tpl->getSubTemplate ("layout/sidebar.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
        	       <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

               </div>
            </section>
        </section>
        <!--main content end-->
    </section>
    <!-- Placed js at the end of the document so the pages load faster -->
    <!--Core js-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
    <script src="assets/bs3/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>

    <?php if (isset($_smarty_tpl->tpl_vars['js_arr']->value)&&$_smarty_tpl->tpl_vars['js_arr']->value) {?>
    <!--external script-->
    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
    <script src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
    <?php } ?>
    <?php }?>

    <!--common script init for all pages-->
    <script src="assets/js/scripts.js"></script>
    <!--script for this page-->
</body>

</html><?php }} ?>
