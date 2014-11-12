<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\browse\index.php" */ ?>
<?php /*%%SmartyHeaderCode:43645462dce357c1c9-81006385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4a7d1c638842fe3809148d31537be13a1f70ec5' => 
    array (
      0 => 'application\\views\\browse\\index.php',
      1 => 1409213276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43645462dce357c1c9-81006385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'skills_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dce358b3b8_43873913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce358b3b8_43873913')) {function content_5462dce358b3b8_43873913($_smarty_tpl) {?><div class="col-lg-8">
    <div id="div-skills-list">
		<?php if ($_smarty_tpl->tpl_vars['skills_list']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skill']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skills_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->key => $_smarty_tpl->tpl_vars['skill']->value) {
$_smarty_tpl->tpl_vars['skill']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("browse/details.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		    <?php } ?>
	    <?php }?>
	</div>
</div>

<div class="col-lg-4">
	<?php echo $_smarty_tpl->getSubTemplate ("browse/recent_done.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div><?php }} ?>
