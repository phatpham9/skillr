<?php /* Smarty version Smarty-3.1.18, created on 2014-11-12 05:06:25
         compiled from "application\views\profile\index.php" */ ?>
<?php /*%%SmartyHeaderCode:309625462dcc1263117-26033149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f0190cfa323e305d525d5cc19db83ad963906c' => 
    array (
      0 => 'application\\views\\profile\\index.php',
      1 => 1408979669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309625462dcc1263117-26033149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'profile' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5462dcc127b342_94558865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5462dcc127b342_94558865')) {function content_5462dcc127b342_94558865($_smarty_tpl) {?><div class="col-lg-8">
	<div id="div-profile">
		<div id="notification" class="alert fade in" style="display:none">
            <button data-dismiss="alert" class="close close-sm" type="button">
                <i class="fa fa-times"></i>
            </button>
            <h4></h4>
            <p></p>
        </div>
	</div>

    <section class="panel">
        <header class="panel-heading">
            User Account
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
             </span>
        </header>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <img id="img-ava" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profile']->value['ava_url'];?>
" style="width:112px;">
                </div>
                <div class="col-lg-6">
                    <p><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</p>
                    <p><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
                    <p><strong>Last IP:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_ip'];?>
</p>
                    <p><strong>Last login:</strong> <?php echo $_smarty_tpl->tpl_vars['user']->value['last_login'];?>
</p>
                </div>
            </div>
        </div>
    </section>

    <section class="panel">
        <header class="panel-heading">
            Profile
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
            </span>
        </header>
        <div class="panel-body">
            Coming soon.
        </div>
    </section>
</div>

<div class="col-lg-4">
    <?php echo $_smarty_tpl->getSubTemplate ("profile/change_password.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("profile/change_email.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>

<form id="form-ava" class="hidden" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
profile/change_ava" method="post" enctype="multipart/form-data">
    <input id="file-ava" type="file" name="ava">
</form><?php }} ?>
