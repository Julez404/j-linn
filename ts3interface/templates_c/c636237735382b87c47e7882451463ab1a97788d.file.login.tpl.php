<?php /* Smarty version Smarty3rc4, created on 2019-08-16 19:51:18
         compiled from "/var/www/j-linn.de/ts3interface/templates/new/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11578771425d56ed16c915a0-41598454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c636237735382b87c47e7882451463ab1a97788d' => 
    array (
      0 => '/var/www/j-linn.de/ts3interface/templates/new/login.tpl',
      1 => 1565860974,
    ),
  ),
  'nocache_hash' => '11578771425d56ed16c915a0-41598454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
<table>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
</table>
<?php }?>
<?php if (!empty($_smarty_tpl->getVariable('motd')->value)){?>
<table class="login" style="width:300px" cellpadding="0" cellspacing="0">
	<tr>
		<td class="loginhead"><?php echo $_smarty_tpl->getVariable('lang')->value['motd'];?>
</td>
	</tr>
	<tr>
		<td align="center">
		<?php echo $_smarty_tpl->getVariable('motd')->value;?>

		</td>
	</tr>
	<tr>
		<td class="loginbottom">&nbsp;</td>
	</tr>
</table>
<?php }?>
<?php if (!isset($_POST['sendlogin'])&&$_smarty_tpl->getVariable('loginstatus')->value!==true||$_smarty_tpl->getVariable('loginstatus')->value!==true){?>
<br />
<form method="post" action="index.php?site=login">
<table class="login" style="width:300px" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr>
		<td class="loginhead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['login'];?>
</td>
	</tr>
	<tr>
		<td align="center">
		<table style="padding:10px;" cellpadding="1" cellspacing="0">
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
:</td>
				<td>
				<?php if (count($_smarty_tpl->getVariable('instances')->value)==1){?>
					<?php  $_smarty_tpl->tpl_vars['sdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('instances')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sdata']->key => $_smarty_tpl->tpl_vars['sdata']->value){
 $_smarty_tpl->tpl_vars['skey']->value = $_smarty_tpl->tpl_vars['sdata']->key;
?>
					<input type="hidden" name="skey" value="<?php echo $_smarty_tpl->tpl_vars['skey']->value;?>
" />	<?php echo $_smarty_tpl->tpl_vars['sdata']->value['alias'];?>
 
					<?php }} ?>
				<?php }else{ ?>
				<select name="skey">
				<?php  $_smarty_tpl->tpl_vars['sdata'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['skey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('instances')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['sdata']->key => $_smarty_tpl->tpl_vars['sdata']->value){
 $_smarty_tpl->tpl_vars['skey']->value = $_smarty_tpl->tpl_vars['sdata']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['skey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['sdata']->value['alias'];?>
</option>	
				<?php }} ?>
				</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['username'];?>
:</td>
				<td><input type="text" name="loginUser" value="serveradmin" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['password'];?>
:</td>
				<td><input type="password" name="loginPw" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td><input class="button" type="submit" name="sendlogin" value="<?php echo $_smarty_tpl->getVariable('lang')->value['login'];?>
"/></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</form>
<br />
<?php }?>