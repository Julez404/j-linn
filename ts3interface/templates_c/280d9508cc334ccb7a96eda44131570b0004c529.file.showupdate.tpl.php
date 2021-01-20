<?php /* Smarty version Smarty3rc4, created on 2019-03-18 13:27:33
         compiled from "/volume1/web/ts-interface/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9256178495c8f632e0aca09-96329957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280d9508cc334ccb7a96eda44131570b0004c529' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/showupdate.tpl',
      1 => 1552910855,
    ),
  ),
  'nocache_hash' => '9256178495c8f632e0aca09-96329957',
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