<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:54
         compiled from "application\views\skill\index.php" */ ?>
<?php /*%%SmartyHeaderCode:244785462dcde006140-58493332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa3792d49dca8753e9490c25060039ff4bc8b25' => 
    array (
      0 => 'application\\views\\skill\\index.php',
      1 => 1409211027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244785462dcde006140-58493332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'alert_messages' => 0,
    'message' => 0,
    'skills_list' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcde04f959_97613461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcde04f959_97613461')) {function content_5462dcde04f959_97613461($_smarty_tpl) {?><div class="col-lg-8">
    <?php if (isset($_smarty_tpl->tpl_vars['alert_messages']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['alert_messages']->value['time_delayed']) {?>
        <div class="alert alert-danger fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>Are you doing good !?</h4>
            <p>
                Your 
                <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_messages']->value['time_delayed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <strong><a href="javascript:;" data-target="<?php echo $_smarty_tpl->tpl_vars['message']->value['skill_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['skill_name'];?>
</a></strong> skill is delayed <strong><?php echo $_smarty_tpl->tpl_vars['message']->value['time_delayed'];?>
</strong>. 
                <?php } ?>
                Please take time get it done.
            </p>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert_messages']->value['deadline_today']) {?>
        <div class="alert alert-warning fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>How is it going !?</h4>
            <p>
                Today is <strong>deadline</strong> of your 
                <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_messages']->value['deadline_today']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <strong><a href="javascript:;" data-target="<?php echo $_smarty_tpl->tpl_vars['message']->value['skill_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['skill_name'];?>
</a></strong> skill. 
                <?php } ?>
            </p>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['alert_messages']->value['time_to_go']) {?>
        <div class="alert alert-warning fade in">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4>Yay!</h4>
            <p>
                You have only 
                <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alert_messages']->value['time_to_go']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <strong><?php echo $_smarty_tpl->tpl_vars['message']->value['time_to_go'];?>
</strong> to complete <strong><a href="javascript:;" data-target="<?php echo $_smarty_tpl->tpl_vars['message']->value['skill_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value['skill_name'];?>
</a></strong> skill. 
                <?php } ?>
            </p>
        </div>
        <?php }?>
    <?php }?>

	<div id="div-skills-list">
		<?php if ($_smarty_tpl->tpl_vars['skills_list']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['skill'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skill']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['skills_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skill']->key => $_smarty_tpl->tpl_vars['skill']->value) {
$_smarty_tpl->tpl_vars['skill']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("skill/details.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		    <?php } ?>
	    <?php }?>
	</div>
</div>

<div class="col-lg-4">
	<?php echo $_smarty_tpl->getSubTemplate ("skill/create.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("skill/update.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete Skill</h4>
            </div>
            <div class="modal-body">
            	Would you really want to delete skill named "<strong class="skill-name"></strong>" ? Click <strong>Confirm</strong> button to perform skill deletion.
            </div>
            <div class="modal-footer" style="margin-top:0;">
            	<form id="form-delete" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
skill/delete_skill" method="post">
            		<input type="hidden" name="id" value>
	                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                <button id="btn-delete" class="btn btn-warning" type="submit"> Confirm</button>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="doneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Done Skill Training</h4>
            </div>
            <div class="modal-body">
            	Are you totally sure that you have done "<strong class="skill-name"></strong>" skill training ? Click <strong>Confirm</strong> button to done skill training.
            </div>
            <div class="modal-footer" style="margin-top:0;">
            	<form id="form-done" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
skill/done_skill" method="post">
            		<input type="hidden" name="id" value>
	                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                <button id="btn-done" class="btn btn-warning" type="submit"> Confirm</button>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="undoneModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Undone Skill Training</h4>
            </div>
            <div class="modal-body">
            	Well! You always are encouraged to improve your skill more. </br>Do you want to undone this "<strong class="skill-name"></strong>" skill training ? Click <strong>Confirm</strong> button to undone skill training.
            </div>
            <div class="modal-footer" style="margin-top:0;">
            	<form id="form-undone" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
skill/undone_skill" method="post">
            		<input type="hidden" name="id" value>
	                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
	                <button id="btn-undone" class="btn btn-warning" type="submit"> Confirm</button>
	            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="notifyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer" style="margin-top:0;">
                <button class="btn btn-danger" type="button" data-dismiss="modal"> Ok got it</button>
            </div>
        </div>
    </div>
</div><?php }} ?>
