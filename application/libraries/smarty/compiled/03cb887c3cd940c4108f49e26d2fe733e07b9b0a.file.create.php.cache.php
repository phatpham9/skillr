<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:54
         compiled from "application\views\skill\create.php" */ ?>
<?php /*%%SmartyHeaderCode:231165462dcde197738-02861450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03cb887c3cd940c4108f49e26d2fe733e07b9b0a' => 
    array (
      0 => 'application\\views\\skill\\create.php',
      1 => 1408501517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231165462dcde197738-02861450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_open' => 0,
    'form_name' => 0,
    'form_description' => 0,
    'form_note' => 0,
    'form_start_date' => 0,
    'form_end_date' => 0,
    'form_submit' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcde1aaf35_98751709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcde1aaf35_98751709')) {function content_5462dcde1aaf35_98751709($_smarty_tpl) {?><section id="sec-create" class="panel">
    <header class="panel-heading">
        New Skill
    	<span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
    	<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

        	<div class="form-group">
        		<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>

        	</div>
        	<div class="form-group">
        		<?php echo $_smarty_tpl->tpl_vars['form_description']->value;?>

        	</div>
        	<div class="form-group">
        		<?php echo $_smarty_tpl->tpl_vars['form_note']->value;?>

        	</div>
        	<div class="form-group">
        		<?php echo $_smarty_tpl->tpl_vars['form_start_date']->value;?>

        	</div>
        	<div class="form-group">
        		<?php echo $_smarty_tpl->tpl_vars['form_end_date']->value;?>

        	</div>
        	<div class="form-group">
        		<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>

        	</div>
        <?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

    </div>
</section><?php }} ?>
