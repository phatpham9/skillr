<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:54
         compiled from "application\views\skill\update.php" */ ?>
<?php /*%%SmartyHeaderCode:190935462dcde202ce8-69666358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f24874c269e83c838578ae17ab9e0ff95c52458' => 
    array (
      0 => 'application\\views\\skill\\update.php',
      1 => 1409203299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190935462dcde202ce8-69666358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcde208a43_97010482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcde208a43_97010482')) {function content_5462dcde208a43_97010482($_smarty_tpl) {?><section id="sec-update" class="panel" style="display:none">
    <header class="panel-heading">
        Update skill
        <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
        </span>
    </header>
    <div class="panel-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
skill/update_skill" method="post" accept-charset="utf-8" id="form-update">
            <div class="form-group">
                <input type="hidden" name="id" value="" class="form-control skill-id" placeholder="Skill id">
                <input type="text" name="name" value="" class="form-control skill-name" placeholder="Skill name" maxlength="256">
            </div>
            <div class="form-group">
                <input type="text" name="description" value="" class="form-control skill-description" placeholder="Short description" maxlength="256">
            </div>
            <div class="form-group">
                <textarea name="note" cols="40" rows="3" class="form-control skill-note" placeholder="Note" maxlength="512" style="resize: none; overflow: hidden; word-wrap: break-word; height: 74px;"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="start_date" value="" class="form-control default-date-picker skill-start-date" placeholder="Start date">
            </div>
            <div class="form-group">
                <input type="text" name="end_date" value="" class="form-control default-date-picker skill-end-date" placeholder="End date">
            </div>
            <div class="form-group">
                <select class="form-control skill-is-done" name="is_done">
                    <option value="0">Not done yet</option>
                    <option value="1">100% Done</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update skill" id="btn-update" class="btn btn-danger pull-right" style="margin-bottom:0;">
                <input type="button" value="Cancel" id="btn-cancel-update" class="btn btn-default pull-right" style="margin-bottom:0; margin-right:5px;">
            </div>
        </form>
    </div>
</section><?php }} ?>
