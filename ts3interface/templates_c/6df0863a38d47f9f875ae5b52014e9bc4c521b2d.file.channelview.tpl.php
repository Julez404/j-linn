<?php /* Smarty version Smarty3rc4, created on 2019-03-18 12:56:38
         compiled from "/volume1/web/ts-interface/templates/new/channelview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19118343665c8f8776a0ead3-66428741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df0863a38d47f9f875ae5b52014e9bc4c521b2d' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/channelview.tpl',
      1 => 1552899929,
    ),
  ),
  'nocache_hash' => '19118343665c8f8776a0ead3-66428741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_channel_info_view'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_channel_info_view'])){?>
	<table class="border" style="width:50%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
		</tr>
	</table>
<?php }else{ ?>
	<table class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td colspan="2" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['channelinfo'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_name'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['topic'];?>
:</td>
			<td class="green2"><?php if (isset($_smarty_tpl->getVariable('channelinfo')->value['channel_topic'])){?><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_topic'];?>
<?php }?></td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
:</td>
			<td class="green1"><?php if (isset($_smarty_tpl->getVariable('channelinfo')->value['channel_description'])){?><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_description'];?>
<?php }?></td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['passwordset'];?>
:</td>
			<td class="green2">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_password']=='1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['default'];?>
:</td>
			<td class="green1"> 
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_default']=='1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxclients'];?>
:</td>
			<td class="green2">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_maxclients']=='-1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['unlimited'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_maxclients'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['maxfamilyclients'];?>
:</td>
			<td class="green1">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_maxfamilyclients_inherited']=='1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['inherited'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_flag_maxfamilyclients_unlimited']=='1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['unlimited'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_maxfamilyclients'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['codec'];?>
:</td>
			<td class="green2">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='0'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codec0'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codec1'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='2'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codec2'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='3'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codec3'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='4'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codec4'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_codec']=='5'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codec5'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['codecquality'];?>
:</td>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_codec_quality'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['codecunencrypted'];?>
</td>
			<td class="green2">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_is_unencrypted']=='1'){?>
			<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

			<?php }elseif($_smarty_tpl->getVariable('channelinfo')->value['channel_codec_is_unencrypted']=='0'){?>
			<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['neededtalkpower'];?>
:</td>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_needed_talk_power'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['forcedsilence'];?>
:</td>
			<td class="green2">
			<?php if ($_smarty_tpl->getVariable('channelinfo')->value['channel_forced_silence']=='1'){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['iconid'];?>
</td>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_icon_id'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['phoneticname'];?>
</td>
			<td class="green2"><?php if (isset($_smarty_tpl->getVariable('channelinfo')->value['channel_name_phonetic'])){?><?php echo $_smarty_tpl->getVariable('channelinfo')->value['channel_name_phonetic'];?>
<?php }?></td>
		</tr>
	</table>
<?php }?>