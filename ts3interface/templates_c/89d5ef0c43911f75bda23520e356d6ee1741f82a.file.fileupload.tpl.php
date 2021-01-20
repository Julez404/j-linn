<?php /* Smarty version Smarty3rc4, created on 2019-03-18 11:19:59
         compiled from "/volume1/web/ts-interface/templates/new/fileupload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10958557255c8f70cfb9b0f6-32079732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d5ef0c43911f75bda23520e356d6ee1741f82a' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/fileupload.tpl',
      1 => 1552899929,
    ),
  ),
  'nocache_hash' => '10958557255c8f70cfb9b0f6-32079732',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
<form enctype="multipart/form-data" action="index.php?site=fileupload&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" method="post">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['iconupload'];?>
</td>
	</tr>
	<tr>
		<td class="green1" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['iconupinfo'];?>
</td>
	</tr>
	<tr>
		<td class="green2" colspan="2">
		<input type="hidden" name="max_file_size" value="81920" />
		<?php echo $_smarty_tpl->getVariable('lang')->value['iconupload'];?>
: <input name="thefile" type="file" />
		
		</td>
	</tr>
	<tr>
		<td class="green1"  style="width:75px"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green1"  align="left"><input type="submit" name="upload" value="<?php echo $_smarty_tpl->getVariable('lang')->value['iconupload'];?>
" /></td>
	</tr>
</table>
</form>
<br />
<form method="post" action="index.php?site=fileupload&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['icon'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['id'];?>
</td>
		<td class="thead">Ma&szlig;e</td>
		<td class="thead">Type</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['selectall'];?>
<input type="checkbox" name="checkall" value="0" onclick="check(2)" /></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('allicons')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	<tr>
		<td><img style="border:0"src="site/showfile.php?name=icon_<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
&amp;port=<?php echo $_smarty_tpl->getVariable('port')->value;?>
" alt="" /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['info'][0];?>
*<?php echo $_smarty_tpl->tpl_vars['value']->value['info'][1];?>
</td>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['value']->value['info'][2]==1){?>
		.gif
		<?php }elseif($_smarty_tpl->tpl_vars['value']->value['info'][2]==2){?>
		.jpg
		<?php }elseif($_smarty_tpl->tpl_vars['value']->value['info'][2]==3){?>
		.png
		<?php }?>
		</td>
		<td><input type="checkbox" id="list<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
" name="delicons[]" value="/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" /></td>
	</tr>
	<?php }} ?>
	<tr>
		<td colspan="6"><input type="submit" name="delaction" value="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" /></td>
	</tr>
</table>
</form>