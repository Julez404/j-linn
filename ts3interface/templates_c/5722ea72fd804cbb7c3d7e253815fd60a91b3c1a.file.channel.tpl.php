<?php /* Smarty version Smarty3rc4, created on 2019-12-12 00:32:44
         compiled from "/var/www/j-linn.de/ts3interface/templates/new/channel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14497194585df17c9c440627-76080305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5722ea72fd804cbb7c3d7e253815fd60a91b3c1a' => 
    array (
      0 => '/var/www/j-linn.de/ts3interface/templates/new/channel.tpl',
      1 => 1565860974,
    ),
  ),
  'nocache_hash' => '14497194585df17c9c440627-76080305',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channel_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_channel_list'])){?>

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
<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="4"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['id'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['pid'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
	</tr>
<?php if (!empty($_smarty_tpl->getVariable('channellist')->value)){?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
		<tr>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['pid'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
			<form method="post" action="index.php?site=channelview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
">
			<input type="submit" class="select" name="select" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['select'];?>
" />
			</form>
			<form method="post" action="index.php?site=channeleditperm&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
">
			<input type="submit" class="eperms" name="editperms" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['editperms'];?>
" />
			</form>
			<form method="post" action="index.php?site=channel&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
" />
			<?php if ($_smarty_tpl->tpl_vars['value']->value['total_clients']>0){?>
				<input type="hidden" name="force" value="1" />
			<?php }?>
			<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_permanent'])&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_permanent']==1||$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_permanent']==1&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_permanent']==1){?>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force'])||$_smarty_tpl->tpl_vars['value']->value['total_clients']==0&&$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force']==0||$_smarty_tpl->tpl_vars['value']->value['total_clients']>=0&&$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force']==1){?>
					<input type="submit" class="delete" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('lang')->value['deletemsgchannel'];?>
')" />
				<?php }?>
			<?php }?>
			<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_semi_permanent'])&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_semi_permanent']==1||$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_semi_permanent']==1&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_semi_permanent']==1){?>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force'])||$_smarty_tpl->tpl_vars['value']->value['total_clients']==0&&$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force']==0||$_smarty_tpl->tpl_vars['value']->value['total_clients']>=0&&$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force']==1){?>
					<input type="submit" class="delete" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('lang')->value['deletemsgchannel'];?>
')" />
				<?php }?>
			<?php }?>
			<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_temporary'])&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_permanent']==0&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_semi_permanent']==0||$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_temporary']==1&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_permanent']==0&&$_smarty_tpl->tpl_vars['value']->value['channel_flag_semi_permanent']==0){?>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force'])||$_smarty_tpl->tpl_vars['value']->value['total_clients']==0&&$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force']==0||$_smarty_tpl->tpl_vars['value']->value['total_clients']>=0&&$_smarty_tpl->getVariable('permoverview')->value['b_channel_delete_flag_force']==1){?>
					<input type="submit" class="delete" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('lang')->value['deletemsgchannel'];?>
')" />
				<?php }?>
			<?php }?>
			</form>
			</td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>
	<?php }?>
</table>
<?php }?>