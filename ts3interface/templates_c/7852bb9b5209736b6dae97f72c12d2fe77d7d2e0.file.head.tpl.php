<?php /* Smarty version Smarty3rc4, created on 2019-03-18 13:27:33
         compiled from "/volume1/web/ts-interface/templates/new/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21396586735c8f632df010c5-63919525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7852bb9b5209736b6dae97f72c12d2fe77d7d2e0' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/head.tpl',
      1 => 1552910855,
    ),
  ),
  'nocache_hash' => '21396586735c8f632df010c5-63919525',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table border="0" style="width:1000px; height:150px" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td class="header">
		<table style="width:100%; height:150px;" cellpadding="0" cellspacing="0">
			<tr valign="top">
				<td style="width:500px"></td>
				<td>
				<table align="right" style="width:100%; height:150px;" cellpadding="0" cellspacing="0">
					<tr valign="top">
						<td style="text-align:right; height:120px">
						<?php if ($_smarty_tpl->getVariable('loginstatus')->value===true){?>
							<?php echo $_SESSION['loginuser'];?>
 <a href="index.php?site=logout"><?php echo $_smarty_tpl->getVariable('lang')->value['logout'];?>
</a>
						<?php }?>
						</td>
					</tr>
					<tr>
						<td style="text-align:right; height:30px">
						<?php if ($_smarty_tpl->getVariable('fastswitch')->value==true&&$_smarty_tpl->getVariable('hoststatus')->value===true){?>
							<form method="get" action="index.php?site=serverview">
							<?php if (strpos($_smarty_tpl->getVariable('site')->value,'edit')==false||$_smarty_tpl->getVariable('site')->value=='serveredit'){?>
							<input type="hidden" name="site" value="<?php echo $_smarty_tpl->getVariable('site')->value;?>
" />
							<?php }else{ ?>
							<input type="hidden" name="site" value="serverview" />
							<?php }?>
							<select name="sid" onchange="submit()">
							<?php  $_smarty_tpl->tpl_vars['server'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['server']->key => $_smarty_tpl->tpl_vars['server']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['server']->key;
?>
								<?php if ($_smarty_tpl->getVariable('sid')->value==$_smarty_tpl->tpl_vars['server']->value['virtualserver_id']){?>
								<option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_port'];?>
</option>
								<?php }else{ ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['server']->value['virtualserver_port'];?>
</option>
								<?php }?>
							<?php }} ?>
							</select>
							</form>
						<?php }?>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
</table>