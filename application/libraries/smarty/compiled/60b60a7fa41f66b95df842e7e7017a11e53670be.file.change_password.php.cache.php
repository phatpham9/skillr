<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:25
         compiled from "application\views\profile\change_password.php" */ ?>
<?php /*%%SmartyHeaderCode:274595462dcc12bd850-69471049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b60a7fa41f66b95df842e7e7017a11e53670be' => 
    array (
      0 => 'application\\views\\profile\\change_password.php',
      1 => 1408698731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274595462dcc12bd850-69471049',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_change_password_open' => 0,
    'form_old_password' => 0,
    'form_errors' => 0,
    'errors' => 0,
    'form_new_password' => 0,
    'form_confirm_new_password' => 0,
    'form_change_password_submit' => 0,
    'form_change_password_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcc12fcf48_88479488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcc12fcf48_88479488')) {function content_5462dcc12fcf48_88479488($_smarty_tpl) {?><section id="sec-change-password" class="panel">
    <header class="panel-heading">
        Change Password
        <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['form_change_password_open']->value;?>

            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_old_password']->value;?>

                <?php if (isset($_smarty_tpl->tpl_vars['form_errors']->value['old_password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['form_errors']->value['old_password'];?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['old_password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value['old_password'];?>

                <?php }?>
            </div>
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_new_password']->value;?>

                <?php if (isset($_smarty_tpl->tpl_vars['form_errors']->value['new_password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['form_errors']->value['new_password'];?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['new_password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value['new_password'];?>

                <?php }?>
            </div>
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_confirm_new_password']->value;?>

                <?php if (isset($_smarty_tpl->tpl_vars['form_errors']->value['confirm_new_password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['form_errors']->value['confirm_new_password'];?>

                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['confirm_new_password'])) {?>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value['confirm_new_password'];?>

                <?php }?>
            </div>
            <div class="form-group">
                <?php echo $_smarty_tpl->tpl_vars['form_change_password_submit']->value;?>

            </div>
        <?php echo $_smarty_tpl->tpl_vars['form_change_password_close']->value;?>

    </div>
</section><?php }} ?>
