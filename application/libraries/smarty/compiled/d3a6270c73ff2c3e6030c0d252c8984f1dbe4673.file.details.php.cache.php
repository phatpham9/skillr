<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:54
         compiled from "application\views\skill\details.php" */ ?>
<?php /*%%SmartyHeaderCode:26875462dcde0be0f7-24724949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3a6270c73ff2c3e6030c0d252c8984f1dbe4673' => 
    array (
      0 => 'application\\views\\skill\\details.php',
      1 => 1409211302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26875462dcde0be0f7-24724949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'skill' => 0,
    'base_url' => 0,
    'ava_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcde10d330_45670509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcde10d330_45670509')) {function content_5462dcde10d330_45670509($_smarty_tpl) {?><aside class="profile-nav fade in" data-id="<?php echo $_smarty_tpl->tpl_vars['skill']->value['id'];?>
">
    <section class="panel">
        <header class="panel-heading">
            <strong><?php echo $_smarty_tpl->tpl_vars['skill']->value['start_date'];?>
</strong> - <strong><?php echo $_smarty_tpl->tpl_vars['skill']->value['end_date'];?>
</strong>
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-times btn-show-delete" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['skill']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['skill']->value['name'];?>
"></a>
                <a href="javascript:;" class="fa fa-pencil btn-show-update" data-id="<?php echo $_smarty_tpl->tpl_vars['skill']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
skill/get_skill"></a>
                <?php if (!$_smarty_tpl->tpl_vars['skill']->value['is_done']) {?>
                <a href="javascript:;" class="fa fa-check btn-show-done" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['skill']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['skill']->value['name'];?>
" data-is-done="<?php echo $_smarty_tpl->tpl_vars['skill']->value['is_done'];?>
"></a>
                <?php } elseif ($_smarty_tpl->tpl_vars['skill']->value['is_done']) {?>
                <a href="javascript:;" class="fa fa-undo btn-show-done" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['skill']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['skill']->value['name'];?>
" data-is-done="<?php echo $_smarty_tpl->tpl_vars['skill']->value['is_done'];?>
"></a>
                <?php }?>
            </span>
        </header>
        <div class="user-heading alt gray-bg" style="border-radius:0">
            <a>
                <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['ava_url']->value;?>
">
            </a>
            <h1><?php echo $_smarty_tpl->tpl_vars['skill']->value['name'];?>
</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['skill']->value['description'];?>
</p>
        </div>
        <ul class="nav nav-pills nav-stacked">
            <?php if ($_smarty_tpl->tpl_vars['skill']->value['note']) {?>
            <li> <i class="fa fa-book"></i> <?php ob_start();?><?php echo "both";?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo "TRUE";?>
<?php $_tmp2=ob_get_clean();?><?php echo auto_link(nl2br($_smarty_tpl->tpl_vars['skill']->value['note']),$_tmp1,$_tmp2);?>
</li>
            <?php }?>
            <li class="duration">
                <i class="fa fa-clock-o"></i> Duration: <?php echo $_smarty_tpl->tpl_vars['skill']->value['duration'];?>

                <?php if ($_smarty_tpl->tpl_vars['skill']->value['is_done']) {?>
                <span class="label label-primary pull-right r-activity label-skill-info" style="margin-top:3px;">Done</span>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['skill']->value['time_to_go'])) {?>
                <span class="label label-warning pull-right r-activity label-skill-info" style="margin-top:3px;"><?php echo $_smarty_tpl->tpl_vars['skill']->value['time_to_go'];?>
</span>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['skill']->value['time_delayed'])) {?>
                <span class="label label-danger pull-right r-activity label-skill-info" style="margin-top:3px;"><?php echo $_smarty_tpl->tpl_vars['skill']->value['time_delayed'];?>
</span>
                <?php }?>
            </li>
        </ul>
    </section>
</aside><?php }} ?>
