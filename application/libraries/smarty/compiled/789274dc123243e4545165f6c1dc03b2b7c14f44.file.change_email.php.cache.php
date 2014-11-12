<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:25
         compiled from "application\views\profile\change_email.php" */ ?>
<?php /*%%SmartyHeaderCode:178565462dcc135e3f6-77930670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789274dc123243e4545165f6c1dc03b2b7c14f44' => 
    array (
      0 => 'application\\views\\profile\\change_email.php',
      1 => 1408698771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178565462dcc135e3f6-77930670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_change_email_open' => 0,
    'form_password' => 0,
    'form_errors' => 0,
    'errors' => 0,
    'form_email' => 0,
    'form_change_email_submit' => 0,
    'form_change_email_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcc138ad51_23328341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcc138ad51_23328341')) {function content_5462dcc138ad51_23328341($_smarty_tpl) {?><section id="sec-change-email" class="panel">
    <header class="panel-heading">
        Change Email
        <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['form_change_email_open']->value;?>

            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_password']->value;?>

                <?php if (isset($_smarty_tpl->tpl_vars['form_errors']->value['password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['form_errors']->value['password'];?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>

                <?php }?>
            </div>
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_email']->value;?>

                <?php if (isset($_smarty_tpl->tpl_vars['form_errors']->value['email'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['form_errors']->value['email'];?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['email'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>

                <?php }?>
            </div>
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_change_email_submit']->value;?>

            </div>
        <?php echo $_smarty_tpl->tpl_vars['form_change_email_close']->value;?>

    </div>
</section><?php }} ?>
