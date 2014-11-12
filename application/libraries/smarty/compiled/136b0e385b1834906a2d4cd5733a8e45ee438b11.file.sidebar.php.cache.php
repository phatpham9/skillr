<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\layout\sidebar.php" */ ?>
<?php /*%%SmartyHeaderCode:256635462dce35259b0-47080402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136b0e385b1834906a2d4cd5733a8e45ee438b11' => 
    array (
      0 => 'application\\views\\layout\\sidebar.php',
      1 => 1409211724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256635462dce35259b0-47080402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav_active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce3534c78_33712409',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce3534c78_33712409')) {function content_5462dce3534c78_33712409($_smarty_tpl) {?><ul class="sidebar-menu" id="nav-accordion">
    <li>
        <a <?php if ($_smarty_tpl->tpl_vars['nav_active']->value=='browse') {?><?php echo 'class="active"';?>
<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
browse">
            <i class="fa fa-globe"></i>
            <span>Browse</span>
        </a>
    </li>
    <li>
        <a <?php if ($_smarty_tpl->tpl_vars['nav_active']->value=='my_skill') {?><?php echo 'class="active"';?>
<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
skill">
            <i class="fa fa-user"></i>
            <span>My Skills</span>
        </a>
    </li>
</ul><?php }} ?>
