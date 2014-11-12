<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\layout\header.php" */ ?>
<?php /*%%SmartyHeaderCode:21425462dce34c3ba3-76716005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c26513e9ba60b8caafe0fa1726923939fbbdefb3' => 
    array (
      0 => 'application\\views\\layout\\header.php',
      1 => 1415379994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21425462dce34c3ba3-76716005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'is_logged_in' => 0,
    'ava_url' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce34dd0b1_00725556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce34dd0b1_00725556')) {function content_5462dce34dd0b1_00725556($_smarty_tpl) {?><!--logo start-->
<div class="brand">
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="logo">
        <img src="assets/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value) {?>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ava_url']->value;?>
">
                <span class="username"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile"><i class=" fa fa-suitcase"></i>Profile</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
auth/logout"><i class="fa fa-key"></i> Log Out</a>
                </li>
            </ul>
        </li>
        <?php } else { ?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
auth/login">
                <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ava_url']->value;?>
">
                <span class="username">Login</span>
            </a>
        </li>
        <?php }?>
    </ul>
    <!--search & user info end-->
</div><?php }} ?>
