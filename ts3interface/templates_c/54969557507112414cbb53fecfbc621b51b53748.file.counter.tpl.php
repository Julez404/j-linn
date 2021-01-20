<?php /* Smarty version Smarty3rc4, created on 2019-07-12 10:02:05
         compiled from "/volume1/web/ts3interface/templates/new/counter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7571769255d283e7dc872e2-03189954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54969557507112414cbb53fecfbc621b51b53748' => 
    array (
      0 => '/volume1/web/ts3interface/templates/new/counter.tpl',
      1 => 1552910854,
    ),
  ),
  'nocache_hash' => '7571769255d283e7dc872e2-03189954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_list'])||isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_dblist'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_dblist'])){?>
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
<table style="width:50%" align="center" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td style="width:100%" class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['clientcounter'];?>
</td>
	</tr>
	<tr>
		<td style="width:50%" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['total'];?>
</td>
		<td style="width:50%" class="green1"><?php echo $_smarty_tpl->getVariable('totalclients')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['online'];?>
</td>
		<td class="green2">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_online')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_online')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_online')->value;?>
%
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['today'];?>
</td>
		<td class="green1">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_today')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_today')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_today')->value;?>
%
		</td>
	</tr>
	<tr>
		<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['thisweek'];?>
</td>
		<td class="green2">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_week')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_week')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_week')->value;?>
%
		</td>
	</tr>
	<tr>
		<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['thismonth'];?>
</td>
		<td class="green1">
		<img src="templates/default/gfx/images/stats.png"  height="10" width="<?php echo $_smarty_tpl->getVariable('perc_month')->value;?>
" alt="" />
		<?php echo $_smarty_tpl->getVariable('count_month')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
 | <?php echo $_smarty_tpl->getVariable('perc_month')->value;?>
%
		</td>
	</tr>
</table>
<?php }?>