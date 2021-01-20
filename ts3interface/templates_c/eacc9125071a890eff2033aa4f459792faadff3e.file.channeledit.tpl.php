<?php /* Smarty version Smarty3rc4, created on 2019-03-18 14:11:36
         compiled from "/volume1/web/ts-interface/templates/new/channeledit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18800846215c8f8781d36448-52935811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eacc9125071a890eff2033aa4f459792faadff3e' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/channeledit.tpl',
      1 => 1552910854,
    ),
  ),
  'nocache_hash' => '18800846215c8f8781d36448-52935811',
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
<table style="width:100%" cellpadding="1" cellspacing="0">
	<tr valign="top">
		<td style="width:50%">
		
		<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['editor'];?>
</td>
			</tr>
			<tr>
				<td class="green1" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
				<td class="green1" style="width:50%">
				<form method="post" action="index.php?site=channeledit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_name'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_name'])){?>
					-
				<?php }else{ ?>
				<input type="text" name="newsettings[channel_name]" value="<?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_name'];?>
" />
				<input class="button" type="submit" name="editchannelname" value="<?php echo $_smarty_tpl->getVariable('lang')->value['rename'];?>
" />
				<?php }?>
				</form>
				</td>
			</tr>
		</table>
		<form method="post" action="index.php?site=channeledit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
">
		<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="green2" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['topic'];?>
:</td>
				<td class="green2" style="width:50%">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_topic'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_topic'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[channel_topic]" value="<?php if (isset($_smarty_tpl->getVariable('channelinfo')->value['channel_topic'])){?><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_topic'];?>
<?php }?>" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_description'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_description'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[channel_description]" value="<?php if (isset($_smarty_tpl->getVariable('channelinfo')->value['channel_description'])){?><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_description'];?>
<?php }?>" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['codec'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_codec'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_codec'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[channel_codec]">
					<option value="0" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='0'){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codec0'];?>
</option>
					<option value="1" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='1'){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codec1'];?>
</option>
					<option value="2" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='2'){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codec2'];?>
</option>
					<option value="3" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='3'){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codec3'];?>
</option>
					<option value="4" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='4'){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codec4'];?>
</option>
					<option value="5" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='5'){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['codec5'];?>
</option>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['codecquality'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_codec_quality'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_codec_quality'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[channel_codec_quality]">
					<option value="0" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='0'){?>selected="selected"<?php }?>>0</option>
					<option value="1" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='1'){?>selected="selected"<?php }?>>1</option>
					<option value="2" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='2'){?>selected="selected"<?php }?>>2</option>
					<option value="3" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='3'){?>selected="selected"<?php }?>>3</option>
					<option value="4" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='4'){?>selected="selected"<?php }?>>4</option>
					<option value="5" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='5'){?>selected="selected"<?php }?>>5</option>
					<option value="6" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='6'){?>selected="selected"<?php }?>>6</option>
					<option value="7" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='7'){?>selected="selected"<?php }?>>7</option>
					<option value="8" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='8'){?>selected="selected"<?php }?>>8</option>
					<option value="9" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='9'){?>selected="selected"<?php }?>>9</option>
					<option value="10" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality']=='10'){?>selected="selected"<?php }?>>10</option>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['codecunencrypted'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxclients'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxclients'])){?>
					-
				<?php }else{ ?>
				<select name="newsettings[channel_codec_is_unencrypted]">
					<option value="1" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_is_unencrypted']==1){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>
</option>
					<option value="0" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_is_unencrypted']==0){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>
</option>
				</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['maxclients'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxclients'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxclients'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[channel_maxclients]" value="<?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_maxclients'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxfamilyclients'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxfamilyclients'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxfamilyclients'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[channel_maxfamilyclients]" value="<?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_maxfamilyclients'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
:</td>
				<td class="green1">
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_temporary'])||$_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_temporary']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['temporary'];?>
<input type="radio" name="chantyp" value="0" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_permanent']==0&&$_smarty_tpl->getVariable('channelinfo')->value['channel_flag_semi_permanent']==0){?>checked="checked"<?php }?> /><br/>
				<?php }?>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_semi_permanent'])||$_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_semi_permanent']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['semipermanent'];?>
<input type="radio" name="chantyp" value="1" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_semi_permanent']==1){?>checked="checked"<?php }?> /><br/>
				<?php }?>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_permanent'])||$_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_permanent']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['permanent'];?>
<input type="radio" name="chantyp" value="2" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_permanent']==1&&$_smarty_tpl->getVariable('channelinfo')->value['channel_flag_default']==0){?>checked="checked"<?php }?> /><br />
				<?php }?>
				<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_default'])||$_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_make_default']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['default'];?>
<input type="radio" name="chantyp" value="3" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_default']==1){?>checked="checked"<?php }?> />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxfamilyclientsinherited'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxfamilyclients'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_maxfamilyclients'])){?>
					-
				<?php }else{ ?>
					<select name="newsettings[channel_flag_maxfamilyclients_inherited]">
					<option value="0" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_maxfamilyclients_inherited']=='0'){?>selected="selected"<?php }?>>0</option>
					<option value="1" <?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_maxfamilyclients_inherited']=='1'){?>selected="selected"<?php }?>>1</option>
					</select>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['neededtalkpower'];?>
:</td>
				<td class="green1">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_needed_talk_power'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_needed_talk_power'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[channel_needed_talk_power]" value="<?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_needed_talk_power'];?>
" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['phoneticname'];?>
:</td>
				<td class="green2">
				<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_name'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_name'])){?>
					-
				<?php }else{ ?>
					<input type="text" name="newsettings[channel_name_phonetic]" value="<?php if (isset($_smarty_tpl->getVariable('channelinfo')->value['channel_name_phonetic'])){?><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_name_phonetic'];?>
<?php }?>" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green1"><input class="button" type="submit" name="editchannel" value="<?php echo $_smarty_tpl->getVariable('lang')->value['edit'];?>
" /></td>
			</tr>
		</table>
		</form>
		</td>
		<td style="width:50%">
		<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_password'])||$_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_password']==1){?>
		<form method="post" action="index.php?site=channeledit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['channelpassword'];?>
</td>
			</tr>
			<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['passwordset'];?>
:</td>
			<td class="green1">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_password']==1){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

			<?php }?>
			</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['newpassword'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_default']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['defaultnopw'];?>

				<?php }else{ ?>
				<input type="text" name="newsettings[channel_password]" value="" />
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green1">
				<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_default']==0){?>
					<input class="button" type="submit" name="editpw" value="<?php echo $_smarty_tpl->getVariable('lang')->value['send'];?>
" />
				<?php }?>
				</td>
			</tr>
		</table>
		</form>
		<br />
		<?php }?>
		<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_parent'])||$_smarty_tpl->getVariable('permoverview')->value['b_channel_modify_parent']==1){?>
		<form method="post" action="index.php?site=channeledit&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['channelmove'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['moveto'];?>
:</td>
				<td class="green1">
				<select name="move">
				<option value="0"><?php echo $_smarty_tpl->getVariable('lang')->value['mainchannel'];?>
</option>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['value']->value['cid']!=$_smarty_tpl->getVariable('cid')->value){?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
					<?php }?>
				<?php }} ?>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green2"><input class="button" type="submit" name="movechan" value="<?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
" /></td>
			</tr>
		</table>
		</form>
		<?php }?>
		</td>
	</tr>
</table>