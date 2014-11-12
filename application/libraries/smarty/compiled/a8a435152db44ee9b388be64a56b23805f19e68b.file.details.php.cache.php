<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:59
         compiled from "application\views\browse\details.php" */ ?>
<?php /*%%SmartyHeaderCode:67415462dce35bae24-90330240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a435152db44ee9b388be64a56b23805f19e68b' => 
    array (
      0 => 'application\\views\\browse\\details.php',
      1 => 1409210036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67415462dce35bae24-90330240',
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
  'unifunc' => 'content_5462dce35ed507_66114921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dce35ed507_66114921')) {function content_5462dce35ed507_66114921($_smarty_tpl) {?><aside class="profile-nav fade in" data-id="<?php echo $_smarty_tpl->tpl_vars['skill']->value['id'];?>
">
    <section class="panel">
        <header class="panel-heading">
            <strong><?php echo $_smarty_tpl->tpl_vars['skill']->value['start_date'];?>
</strong> - <strong><?php echo $_smarty_tpl->tpl_vars['skill']->value['end_date'];?>
</strong>
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
                <span class="label label-primary pull-right r-activity" style="margin-top:3px;">Done</span>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['skill']->value['time_to_go'])) {?>
                <span class="label label-warning pull-right r-activity" style="margin-top:3px;"><?php echo $_smarty_tpl->tpl_vars['skill']->value['time_to_go'];?>
</span>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['skill']->value['time_delayed'])) {?>
                <span class="label label-danger pull-right r-activity" style="margin-top:3px;"><?php echo $_smarty_tpl->tpl_vars['skill']->value['time_delayed'];?>
</span>
                <?php }?>
            </li>
        </ul>
    </section>
</aside><?php }} ?>
