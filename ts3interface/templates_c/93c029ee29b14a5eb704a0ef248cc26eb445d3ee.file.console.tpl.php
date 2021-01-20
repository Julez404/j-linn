<?php /* Smarty version Smarty3rc4, created on 2019-12-12 00:32:55
         compiled from "/var/www/j-linn.de/ts3interface/templates/new/console.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13868066815df17ca7dca394-91949381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93c029ee29b14a5eb704a0ef248cc26eb445d3ee' => 
    array (
      0 => '/var/www/j-linn.de/ts3interface/templates/new/console.tpl',
      1 => 1565860974,
    ),
  ),
  'nocache_hash' => '13868066815df17ca7dca394-91949381',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form method="post" action="index.php?site=console&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
<table class="border" cellpadding="0" cellspacing="0">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['queryconsole'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['inputbox'];?>
</td>
	</tr>
	<tr>
		<td>
			<textarea name="command" cols="50" rows="10"></textarea>	
		</td>
	</tr>
	<tr>
		<td><input class="button" type="submit" name="execute" value="<?php echo $_smarty_tpl->getVariable('lang')->value['execute'];?>
" /><br /><br /></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('lang')->value['outputbox'];?>
</td>
	</tr>
	<tr>
		<td>
			<textarea name="output" cols="80" rows="20" readonly="readonly"><?php echo $_smarty_tpl->getVariable('showOutput')->value;?>
</textarea>	
		</td>
	</tr>
</table>
</form>