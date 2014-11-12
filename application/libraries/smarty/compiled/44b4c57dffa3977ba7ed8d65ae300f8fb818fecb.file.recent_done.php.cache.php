<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\browse\recent_done.php" */ ?>
<?php /*%%SmartyHeaderCode:195625462dce3654112-73104770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b4c57dffa3977ba7ed8d65ae300f8fb818fecb' => 
    array (
      0 => 'application\\views\\browse\\recent_done.php',
      1 => 1409214146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195625462dce3654112-73104770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recent_done' => 0,
    'skill' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce366f2b6_07148572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce366f2b6_07148572')) {function content_5462dce366f2b6_07148572($_smarty_tpl) {?><section id="sec-create" class="panel">
    <header class="panel-heading">
        Recent Done
    	<span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
    	<?php if ($_smarty_tpl->tpl_vars['recent_done']->value) {?>
    		<?php  $_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skill']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_done']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->key => $_smarty_tpl->tpl_vars['skill']->value) {
$_smarty_tpl->tpl_vars['skill']->_loop = true;
?>
		<p>
			<?php echo $_smarty_tpl->tpl_vars['skill']->value['user'];?>
 - <?php echo $_smarty_tpl->tpl_vars['skill']->value['date_done'];?>
<br>
			<strong><?php echo $_smarty_tpl->tpl_vars['skill']->value['name'];?>
</strong><br>
			<strong><?php echo $_smarty_tpl->tpl_vars['skill']->value['description'];?>
</strong>
		</p>
    		<?php } ?>
    	<?php }?>
    </div>
</section><?php }} ?>
