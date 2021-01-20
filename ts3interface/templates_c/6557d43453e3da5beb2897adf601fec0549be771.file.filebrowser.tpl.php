<?php /* Smarty version Smarty3rc4, created on 2019-03-18 12:57:10
         compiled from "../templates/new/filebrowser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14344376415c8f8796412482-37008644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6557d43453e3da5beb2897adf601fec0549be771' => 
    array (
      0 => '../templates/new/filebrowser.tpl',
      1 => 1552899929,
    ),
  ),
  'nocache_hash' => '14344376415c8f8796412482-37008644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '../libs/Smarty/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
*Copyright (C) 2012-2013  Psychokiller
*
*This program is free software; you can redistribute it and/or modify it under the terms of 
*the GNU General Public License as published by the Free Software Foundation; either 
*version 3 of the License, or any later version.
*
*This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
*without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
*See the GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License along with this program; if not, see http://www.gnu.org/licenses/. 
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/style.css" type="text/css" media="screen" />
<title>Webinterface - Filebrowser</title>
</head>
<body onload="window.resizeTo(500,600)">
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
	<table align="center">
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
	<table class="border" style="width:100%">
		<tr>
			<td colspan="4" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
 (<?php echo $_GET['cid'];?>
 <?php echo $_smarty_tpl->getVariable('chaninfo')->value['channel_name'];?>
)</td>
		</tr>
		<tr>
			<td style="width:25%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
			<td style="width:10%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['size'];?>
</td>
			<td style="width:25%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['date'];?>
</td>
			<td style="width:10%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</td>
		</tr>
	<?php if (!empty($_smarty_tpl->getVariable('flist')->value)){?>
		<?php if ($_GET['path']!="/"&&!empty($_GET['path'])){?>

			<tr>
				<td class="green1" colspan="4"><a href="filebrowser.php?sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_GET['cid'];?>
&amp;path=<?php echo $_smarty_tpl->getVariable('newpath')->value;?>
">..</a></td>
			</tr>
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('flist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr>
				<td class="green1"><?php if ($_smarty_tpl->tpl_vars['value']->value['type']==0){?> <img src='../gfx/images/folder.png' alt="" /> <a href="filebrowser.php?&amp;sid=<?php echo $_GET['sid'];?>
&amp;path=<?php if ($_GET['path']!="/"){?><?php echo $_GET['path'];?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
&amp;cid=<?php if (isset($_smarty_tpl->tpl_vars['value']->value['cid'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
<?php }else{ ?><?php echo $_GET['cid'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a><?php }else{ ?><img src='../gfx/images/file.png' alt="" /> <a href="filetransfer.php?sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php if (isset($_smarty_tpl->tpl_vars['value']->value['cid'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
<?php }else{ ?><?php echo $_GET['cid'];?>
<?php }?>&amp;path=<?php if ($_GET['path']!="/"){?><?php echo $_GET['path'];?>
<?php }?>&amp;name=<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
&amp;getfile=1" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a><?php }?></td>
				<td class="green1"><?php echo $_smarty_tpl->tpl_vars['value']->value['size'];?>
 Mb</td>
				<td class="green1"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['datetime'],"%d.%m.%Y - %H:%M:%S");?>
</td>
				<td class="green1"><a href="filebrowser.php?sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php if (isset($_smarty_tpl->tpl_vars['value']->value['cid'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
<?php }else{ ?><?php echo $_GET['cid'];?>
<?php }?>&amp;path=<?php echo $_GET['path'];?>
&amp;name=<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
&amp;deletefile=1"><?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</a></td>
			</tr>	
		<?php }} ?>
	<?php }else{ ?>
		<?php if ($_GET['path']!="/"&&!empty($_GET['path'])){?>
			<tr>
				<td class="green1" colspan="4"><a href="filebrowser.php?sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_GET['cid'];?>
&amp;path=<?php echo $_smarty_tpl->getVariable('newpath')->value;?>
">..</a></td>
			</tr>
		<?php }?>
		<tr>
			<td colspan="4">
			Keine Dateien gefunden!
			</td>
		</tr>
	<?php }?>
	</table>
	<br /><br />

<form enctype="multipart/form-data" method="post" action="filebrowser.php?sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_GET['cid'];?>
&amp;cpw=<?php echo $_GET['cpw'];?>
&amp;path=<?php echo $_GET['path'];?>
">
<table align="center" class="border" style="width:50%">
	<tr>
		<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['upload'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['upload'];?>
:</td>
		<td class="green1" colspan="2">
		<input type="hidden" name="max_file_size" value="8388603" />
		<input name="thefile" type="file" />
		</td>
	</tr>
	<tr>
		<td class="green2"  style="width:75px"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green2"  align="left"><input type="submit" name="upload" value="<?php echo $_smarty_tpl->getVariable('lang')->value['upload'];?>
" /></td>
	</tr>
</table>
</form>
<br /><br />
<form method="post" action="filebrowser.php?sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_GET['cid'];?>
&amp;cpw=<?php echo $_GET['pw'];?>
&amp;path=<?php echo $_GET['path'];?>
">
<table align="center" class="border" style="width:50%">
	<tr>
		<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['createfolder'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
		<td class="green1" colspan="2"><input type="text" name="fname" value="" /></td>
	</tr>
	<tr>
		<td class="green2"  style="width:75px"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
		<td class="green2"  align="left"><input type="submit" name="createdir" value="<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" /></td>
	</tr>
</table>
</form>
</body>
</html>