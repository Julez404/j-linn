<?php /* Smarty version Smarty3rc4, created on 2019-07-12 10:03:19
         compiled from "/volume1/web/ts3interface/templates/new/banlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5633274055d283ec78d8029-40430547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c66ab0d7ba4e2374ac05af5c84bbfa470b2bdf' => 
    array (
      0 => '/volume1/web/ts3interface/templates/new/banlist.tpl',
      1 => 1552910854,
    ),
  ),
  'nocache_hash' => '5633274055d283ec78d8029-40430547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/volume1/web/ts3interface/libs/Smarty/libs/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_client_ban_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_client_ban_list'])){?>
	<table class="border" style="width:50%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
		</tr>
	</table>
<?php }else{ ?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
<table>
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
	<?php }?>
	<?php if (!empty($_smarty_tpl->getVariable('noerror')->value)){?>
	<tr>
		<td class="noerror"><?php echo $_smarty_tpl->getVariable('noerror')->value;?>
</td>
	</tr>
	<?php }?>
</table>
<?php }?>
<table class="border" style="width:100%" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="9"><?php echo $_smarty_tpl->getVariable('lang')->value['banlist'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['banid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['ip'];?>
/<?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
/<?php echo $_smarty_tpl->getVariable('lang')->value['uniqueid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['invokername'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['invokeruid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['reason'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['length'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['enforcement'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
	</tr>
<?php if (!empty($_smarty_tpl->getVariable('banlist')->value)){?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>	
		<tr>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['banid'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['ip'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['created'],"%d.%m.%Y - %H:%M:%S");?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo secure($_smarty_tpl->tpl_vars['value']->value['invokername']);?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['invokeruid'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['reason'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php if (isset($_smarty_tpl->tpl_vars['value']->value['duration'])){?> <?php echo $_smarty_tpl->tpl_vars['value']->value['duration'];?>
<?php }else{ ?>0<?php }?></td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['enforcement'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
			<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_client_ban_delete'])||$_smarty_tpl->getVariable('permoverview')->value['b_client_ban_delete']==1){?>
			<form method="post" action="index.php?site=banlist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<input type="hidden" name="banid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['banid'];?>
" />
			<input class="button" type="submit" name="unban" value="Unban" />
			</form>
			<?php }?>
			</td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
	<?php }} ?>
<?php }?>
</table>
<?php }?>