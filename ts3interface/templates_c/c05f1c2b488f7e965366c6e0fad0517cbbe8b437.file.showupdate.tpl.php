<?php /* Smarty version Smarty3rc4, created on 2019-03-22 09:42:38
         compiled from "/volume1/web/ts3interface/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17010833645c949ffeba6c90-83581197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c05f1c2b488f7e965366c6e0fad0517cbbe8b437' => 
    array (
      0 => '/volume1/web/ts3interface/templates/new/showupdate.tpl',
      1 => 1552910855,
    ),
  ),
  'nocache_hash' => '17010833645c949ffeba6c90-83581197',
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