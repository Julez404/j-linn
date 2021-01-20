<?php /* Smarty version Smarty3rc4, created on 2019-08-16 19:51:18
         compiled from "/var/www/j-linn.de/ts3interface/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8748178195d56ed16c43a83-89931065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3c2723ad8b68fb4208df1af9ef34dd67f4e3b9' => 
    array (
      0 => '/var/www/j-linn.de/ts3interface/templates/new/showupdate.tpl',
      1 => 1565860974,
    ),
  ),
  'nocache_hash' => '8748178195d56ed16c43a83-89931065',
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