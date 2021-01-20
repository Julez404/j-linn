<?php /* Smarty version Smarty3rc4, created on 2019-03-18 14:07:24
         compiled from "/volume1/web/ts-interface/templates/new/complainlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7783375695c8f980c109333-28364638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cd0ccc7289722c445b0a7f76e4bb8cbc41c1c91' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/complainlist.tpl',
      1 => 1552910854,
    ),
  ),
  'nocache_hash' => '7783375695c8f980c109333-28364638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_client_complain_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_client_complain_list'])){?>
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
<table style="width:892px" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="4"><?php echo $_smarty_tpl->getVariable('lang')->value['complainlist'];?>
</td>
	</tr>
	<tr>
		<td class="thead" style="width:223px"><?php echo $_smarty_tpl->getVariable('lang')->value['targetnick'];?>
</td>
		<td class="thead" style="width:223px"><?php echo $_smarty_tpl->getVariable('lang')->value['sourcenick'];?>
</td>
		<td class="thead" style="width:223px"><?php echo $_smarty_tpl->getVariable('lang')->value['reason'];?>
</td>
		<td class="thead" style="width:223px"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
	</tr>
		<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable("1", null, null);?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('newcomplainlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
				<tr>
					<td class="green1"><a href="javascript:Klappen('<?php echo $_smarty_tpl->getVariable('i')->value;?>
')"><img src="gfx/images/plus.png" id="Pic<?php echo $_smarty_tpl->getVariable('i')->value;?>
" border="0" alt="aus/ein-klappen" /></a> <?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
</td>
					<td class="green1">&nbsp;</td>
					<td class="green1"><?php echo sprintf($_smarty_tpl->getVariable('lang')->value['countcomplain'],count($_smarty_tpl->tpl_vars['value2']->value));?>
</td>
					<td class="green1">
					<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_client_complain_delete'])||$_smarty_tpl->getVariable('permoverview')->value['b_client_complain_delete']==1){?>
						<form method="post" action="index.php?site=complainlist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
						<input type="hidden" name="tcldbid" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
						<input class="delete" type="submit" name="delall" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delall'];?>
" />
						</form>
					<?php }?>
					</td>
				</tr>
				<tr>
					<td class="green1" colspan="4">
				<table id="Lay<?php echo $_smarty_tpl->getVariable('i')->value;?>
" style="width:892px;display:none;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
					<?php  $_smarty_tpl->tpl_vars['value3'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value3']->key => $_smarty_tpl->tpl_vars['value3']->value){
 $_smarty_tpl->tpl_vars['key3']->value = $_smarty_tpl->tpl_vars['value3']->key;
?>
							<tr>
								<td class="green1" style="width:223px;border:0">&nbsp;<?php echo date("d.m.Y - H:i",$_smarty_tpl->tpl_vars['value3']->value['timestamp']);?>
</td>
								<td class="green1" style="width:223px;border:0"><?php echo secure($_smarty_tpl->tpl_vars['value3']->value['fname']);?>
</td>
								<td class="green1" style="width:223px;border:0"><?php echo secure($_smarty_tpl->tpl_vars['value3']->value['message']);?>
</td>
								<td class="green1" style="width:223px;border:0">
								<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_client_complain_delete'])||$_smarty_tpl->getVariable('permoverview')->value['b_client_complain_delete']==1){?>
									<form method="post" action="index.php?site=complainlist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
									<input type="hidden" name="tcldbid" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
									<input type="hidden" name="fcldbid" value="<?php echo $_smarty_tpl->tpl_vars['key3']->value;?>
" />
									<input class="delete" type="submit" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" />
									</form>
								<?php }?>
								</td>
							</tr>
					<?php }} ?>
				</table>
					</td>
				</tr>
			<?php }} ?>
			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(($_smarty_tpl->getVariable('i')->value+1), null, null);?>
		<?php }} ?>
</table>
<?php }?>