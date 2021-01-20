<?php /* Smarty version Smarty3rc4, created on 2019-03-18 10:11:16
         compiled from "/volume1/web/ts3web/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:564407975c8f60b4792a25-85427106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb42c5bb207007bc879fe664452bb5cca0d8551' => 
    array (
      0 => '/volume1/web/ts3web/templates/new/showupdate.tpl',
      1 => 1552899929,
    ),
  ),
  'nocache_hash' => '564407975c8f60b4792a25-85427106',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('newwiversion')->value)){?>
<tr>
	<td class="green1 warning center" colspan="2">
	<?php echo $_smarty_tpl->getVariable('newwiversion')->value;?>

	</td>
<tr>
<?php }?>