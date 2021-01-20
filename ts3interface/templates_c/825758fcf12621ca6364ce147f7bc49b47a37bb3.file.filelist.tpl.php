<?php /* Smarty version Smarty3rc4, created on 2019-03-18 14:09:57
         compiled from "/volume1/web/ts-interface/templates/new/filelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18271360515c8f6a44202f99-73727680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '825758fcf12621ca6364ce147f7bc49b47a37bb3' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/filelist.tpl',
      1 => 1552910854,
    ),
  ),
  'nocache_hash' => '18271360515c8f6a44202f99-73727680',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/volume1/web/ts-interface/libs/Smarty/libs/plugins/modifier.date_format.php';
?><?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
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
<table class="border" style="width:100%">
		<tr>
			<td colspan="5" class="thead"><?php if (!empty($_GET['cid'])){?><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
 (<?php echo $_GET['cid'];?>
 <?php echo $_smarty_tpl->getVariable('chaninfo')->value['channel_name'];?>
)<?php }else{ ?><?php echo $_smarty_tpl->getVariable('lang')->value['filelist'];?>
<?php }?></td>
		</tr>
		<tr>
			<td style="width:25%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</td>
			<td style="width:10%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['size'];?>
</td>
			<td style="width:25%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['date'];?>
</td>
			<td style="width:25%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
			<td style="width:10%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</td>
		</tr>
		<?php if ($_GET['path']!="/"&&!empty($_GET['path'])){?>
			<tr>
				<td class="green1" colspan="3"><a href="index.php?site=filelist&amp;sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
&amp;path=<?php echo $_smarty_tpl->getVariable('newpath')->value;?>
">..</a></td>
			</tr>
		<?php }?>
		<?php if (!empty($_smarty_tpl->getVariable('getallfiles')->value)){?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('getallfiles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>	
				<?php if ($_smarty_tpl->tpl_vars['key']->value!=='totalsize'){?>
				<tr>
					<td class="green1"><?php if ($_smarty_tpl->tpl_vars['value']->value['type']==0){?> <img src='gfx/images/folder.png' alt="" /> <a href="index.php?site=filelist&amp;sid=<?php echo $_GET['sid'];?>
&amp;path=<?php if ($_GET['path']!="/"){?><?php echo $_GET['path'];?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
&amp;cid=<?php if (isset($_smarty_tpl->tpl_vars['value']->value['cid'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
<?php }else{ ?><?php echo $_GET['cid'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a><?php }else{ ?><img src='gfx/images/file.png' alt="" /> <a href="site/filetransfer.php?sid=<?php echo $_GET['sid'];?>
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
					<td class="green1"><?php echo $_smarty_tpl->tpl_vars['value']->value['cname'];?>
</td>
					<td class="green1"><a href="index.php?site=filelist&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php if (isset($_smarty_tpl->tpl_vars['value']->value['cid'])){?><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
<?php }else{ ?><?php echo $_GET['cid'];?>
<?php }?>&amp;path=<?php if (empty($_GET['path'])){?>/<?php }else{ ?><?php echo $_GET['path'];?>
<?php }?>&amp;name=<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
&amp;deletefile=1"><?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</a></td>
				</tr>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value==='totalsize'){?>
				<tr>
					<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['totalsize'];?>
</td>
					<td class="green1" colspan="4"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 Mb</td>
				</tr>
				<?php }?>
			<?php }} ?>
		<?php }else{ ?>
			<tr>
				<td colspan="4">
				Keine Dateien gefunden!
				</td>
			</tr>
		<?php }?>
	</table>
	<br /><br />
	<form enctype="multipart/form-data" method="post" action="index.php?site=filelist&amp;sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_GET['cid'];?>
&amp;cpw=<?php echo $_GET['cpw'];?>
&amp;path=<?php echo $_GET['path'];?>
">
	<table align="center" class="border" style="width:50%">
		<tr>
			<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['upload'];?>
</td>
		</tr>
		<?php if (empty($_GET['cid'])){?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
				<td>
				<select name="cid">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
				<?php }} ?>
				</select>
				</td>
			</tr>
		<?php }?>
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
	<form method="post" action="index.php?site=filelist&amp;sid=<?php echo $_GET['sid'];?>
&amp;cid=<?php echo $_GET['cid'];?>
&amp;cpw=<?php echo $_GET['cpw'];?>
&amp;path=<?php echo $_GET['path'];?>
">
	<table align="center" class="border" style="width:50%">
		<tr>
			<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['createfolder'];?>
</td>
		</tr>
		<?php if (empty($_GET['cid'])){?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
				<td>
				<select name="cid">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
				<?php }} ?>
				</select>
				</td>
			</tr>
		<?php }?>
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