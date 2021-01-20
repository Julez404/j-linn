<?php /* Smarty version Smarty3rc4, created on 2019-03-18 14:04:46
         compiled from "/volume1/web/ts-interface/templates/new/cleditperm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12536542275c8f976ed47eb3-29683423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d3e00738435aabde7dfc6cdb4c8d0d6cafd6c0' => 
    array (
      0 => '/volume1/web/ts-interface/templates/new/cleditperm.tpl',
      1 => 1552910854,
    ),
  ),
  'nocache_hash' => '12536542275c8f976ed47eb3-29683423',
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
</table>
<?php }?>
<table  class="border" cellpadding="0" cellspacing="0" style="width:100%">
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['filter'];?>
</td>
	</tr>
	<tr>
		<td class="green1" colspan="7" style="text-align:right">
		<form method="post" action="index.php?site=cleditperm&amp;cldbid=<?php echo $_smarty_tpl->getVariable('cldbid')->value;?>
&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
		<input type="text" name="searchperms" value="" />
		<input type="submit" name="search" value="<?php echo $_smarty_tpl->getVariable('lang')->value['search'];?>
" />
		</form>
		<form method="post" action="index.php?site=cleditperm&amp;cldbid=<?php echo $_smarty_tpl->getVariable('cldbid')->value;?>
&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
		<input type="checkbox" name="showmyperms" value="1" onchange="submit()" <?php if ($_smarty_tpl->getVariable('showmyperms')->value==1){?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->getVariable('lang')->value['showgrantedonly'];?>

		</form>
		</td>
	</tr>
</table>
<form method="post" action="index.php?site=cleditperm&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cldbid=<?php echo $_smarty_tpl->getVariable('cldbid')->value;?>
">
<table  class="border" cellpadding="0" cellspacing="0" style="width:100%">
	<tr>
		<td class="thead" colspan="7">(<?php echo $_smarty_tpl->getVariable('cldbid')->value;?>
) <?php echo $_smarty_tpl->getVariable('clientname')->value;?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['permissionlist'];?>
</td>
	</tr>
	<tr>
		<td class="thead" style="width:51px">&nbsp;<a href="javascript:Klappen(0)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic0" name="<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
" border="0" alt="aus/ein-klappen" /></td>
		<td class="thead" style="width:45px"><?php echo $_smarty_tpl->getVariable('lang')->value['permid'];?>
</td>
		<td class="thead" style="width:360px"><?php echo $_smarty_tpl->getVariable('lang')->value['permname'];?>
</td>
		<td class="thead" style="width:50px"><?php echo $_smarty_tpl->getVariable('lang')->value['value'];?>
</td>
		<td class="thead" style="width:50px"><?php echo $_smarty_tpl->getVariable('lang')->value['skip'];?>
</td>
		<td class="thead" style="width:100px"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
		<td class="thead" style="width:100px"><?php echo $_smarty_tpl->getVariable('lang')->value['grant'];?>
 <input type="text" name="granttoall" size="3" maxlength="3" /></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('allperms')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>
			<tr>
				<td class='maincat left' colspan="7">
				&nbsp;<a href="javascript:Klappen(1)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic1" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['global'];?>

				</td>
			</tr>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==1){?>
			<tr>
				<td style="width:100%" colspan="7">
				<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay1">
				<table style="width:100%;border-collapse:collapse;" cellpadding="0" cellspacing="0">
					<tr>
						<td class='subcat' style='width:60px'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(2)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic2" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['information'];?>
</td>
					</tr>
					<tr>
					<td colspan="7">
					<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay2">
					<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==2){?>
					</table>
					</div>
					</td>
				</tr>
				<tr>
					<td class='subcat'>&nbsp;</td>
					<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(3)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic3" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['virtualservermanagement'];?>
</td></tr>
				<tr>
					<td colspan="7">
					<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay3">
					<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==3){?>
					</table>
					</div>
					</td>
				</tr>
				<tr>
					<td class='subcat'>&nbsp;</td>
					<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(4)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic4" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['administration'];?>
</td>
				</tr>
				<tr>
					<td colspan="7">
					<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay4">
					<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==4){?>
			 		</table>
					</div>
					</td>
				</tr>
				<tr>
					<td class='subcat'>&nbsp;</td>
					<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(5)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic5" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['settings'];?>
</td>
				</tr>
				<tr>
					<td colspan="7">
					<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay5">
					<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==5){?>
					</table>
					</div>
					</td>
				</tr>
				</table>
				</div>
				</td>
			</tr>
			<tr>
				<td class='maincat left' colspan="7">&nbsp;<a href="javascript:Klappen(6)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic6" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['virtualserver'];?>
</td>
			</tr>
			<tr>
				<td style="width:100%" colspan="7">
				<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay6">
				<table style="width:100%;border-collapse:collapse;" cellpadding="0" cellspacing="0">
					<tr>
						<td class='subcat' style='width:60px'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(7)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic7" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['information'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay7">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==7){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(8)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic8" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['administration'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay8">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==8){?>
			 			</table>
						</div>
						</td>
					</tr>		
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(9)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic9" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['settings'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay9">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==9){?>
						</table>
						</div>
						</td>
					</tr>
				</table>
				</div>
				</td>
			</tr>
			<tr>
				<td class='maincat left' colspan="7">&nbsp;<a href="javascript:Klappen(10)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic10" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
</td>
			</tr>
			<tr>
				<td style="width:100%" colspan="7">
				<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay10">
				<table style="width:100%;border-collapse:collapse;" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==10){?>
					<tr>
						<td class='subcat' style='width:51px'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(11)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic11" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['information'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay11">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==11){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(12)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic12" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay12">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==12){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(13)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic13" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['modify'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay13">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==13){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(14)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic14" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay14">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==14){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(15)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic15" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['access'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay15">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==15){?>
			 			</table>
						</div>
						</td>
					</tr>
				</table>
				</div>
				</td>
			</tr>
			<tr class='maincat left'>
				<td colspan="7">&nbsp;<a href="javascript:Klappen(16)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic16" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['group'];?>
</td>
			</tr>
			<tr>
				<td style="width:100%" colspan="7">
				<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay16">
				<table style="width:100%;border-collapse:collapse;" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==16){?>
					<tr>
						<td class='subcat' style='width:51px'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(17)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic17" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['information'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay17">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==17){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(18)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic18" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay18">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==18){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(19)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic19" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['modify'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay19">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==19){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						 <td class='subcat'>&nbsp;</td>
						 <td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(20)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic20" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay20">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==20){?>
						</table>
						</div>
						</td>
					</tr>
				</table>
				</div>
				</td>
			</tr>
			<tr class='maincat left'>
				<td colspan="7">&nbsp;<a href="javascript:Klappen(21)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic21" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['client'];?>
</td>
			</tr>
			<tr>
				 <td style="width:100%" colspan="7">
				 <div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay21">
				 <table style="width:100%;border-collapse:collapse;" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==21){?>
					<tr>
						<td class='subcat' style='width:51px'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(22)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic22" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['information'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay22">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==22){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						 <td class='subcat'>&nbsp;</td>
						 <td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(23)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic23" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['admin'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay23">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==23){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(24)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic24" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['basics'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay24">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==24){?>
			 			</table>
						</div>
						</td>
					</tr>
					<tr>
						<td class='subcat'>&nbsp;</td>
						<td class='subcat' colspan="6">&nbsp;<a href="javascript:Klappen(25)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic25" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['modify'];?>
</td>
					</tr>
					<tr>
						<td colspan="7">
						<div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay25">
						<table style="width:100%;border-collapse:collapse;border:0" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value==25){?>
			 			</table>
						</div>
						</td>
					</tr>
				</table>
				</div>
				</td>
			</tr>
			<tr class='maincat left'>
				<td colspan="7">&nbsp;<a href="javascript:Klappen(26)"><img src="gfx/images/<?php echo $_smarty_tpl->getVariable('disp_pic')->value;?>
.png" id="Pic26" border="0" alt="aus/ein-klappen" /></a>&nbsp;<?php echo $_smarty_tpl->getVariable('lang')->value['filetransfer'];?>
</td></tr>
			<tr>
				 <td style="width:100%" colspan="7">
				 <div style="display:<?php echo $_smarty_tpl->getVariable('display')->value;?>
" id="Lay26">
				 <table style="width:100%;border-collapse:collapse;" cellpadding="0" cellspacing="0">
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>	
			<?php ob_start();?><?php echo $_smarty_tpl->getVariable('searchperms')->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->getVariable('searchperms')->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->getVariable('showmyperms')->value==0&&empty($_smarty_tpl->getVariable('searchperms')->value)||$_smarty_tpl->getVariable('showmyperms')->value==1&&$_smarty_tpl->tpl_vars['value2']->value['available']==1||$_smarty_tpl->getVariable('showmyperms')->value==0&&strpos($_smarty_tpl->tpl_vars['value2']->value['permname'],$_tmp1)!==false||$_smarty_tpl->getVariable('showmyperms')->value==0&&strpos($_smarty_tpl->tpl_vars['value2']->value['permid'],$_tmp2)!==false){?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:50px">&nbsp;</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:45px"><?php echo $_smarty_tpl->tpl_vars['value2']->value['permid'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:410px"><?php echo $_smarty_tpl->tpl_vars['value2']->value['permname'];?>
 <br />(<?php echo $_smarty_tpl->tpl_vars['value2']->value['permdesc'];?>
)</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:50px">
				<?php if (substr($_smarty_tpl->tpl_vars['value2']->value['permname'],0,2)!='i_'){?>
					<input type='checkbox' <?php if ($_smarty_tpl->tpl_vars['value2']->value['permvalue']==1){?>checked="checked"<?php }?> name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['permid'];?>
][value]" value="1" />
				<?php }else{ ?>
					<input <?php if ($_smarty_tpl->tpl_vars['value2']->value['permname']=='i_icon_id'){?>id="iconid"<?php }?> type='text' size="1" name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['permid'];?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['value2']->value['permvalue'];?>
" />
					<?php if ($_smarty_tpl->tpl_vars['value2']->value['permname']=='i_icon_id'){?><a href="javascript:oeffnefenster('site/showallicons.php?ip=<?php echo $_SESSION['server_ip'];?>
&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
');"><?php echo $_smarty_tpl->getVariable('lang')->value['set'];?>
</a><?php }?>
				<?php }?>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:50px">
				<input type='checkbox' <?php if ($_smarty_tpl->tpl_vars['value2']->value['permskip']==1){?>checked="checked"<?php }?> name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['permid'];?>
][skip]" value="1" />
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:100px">
				<?php if ($_smarty_tpl->tpl_vars['value2']->value['available']==1){?>
					<input type='hidden' name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['permid'];?>
][available]" value='1' /> 
					<input type='checkbox' name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['permid'];?>
][delperm]" value='1' /> <?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>

				<?php }?>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
" style="width:100px">
				<input type='text' maxlength="3" size="1" name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['grantpermid'];?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['value2']->value['grant'];?>
" />
				<input type='hidden' name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['grantpermid'];?>
][grant]" value='1' /> 
				<?php if ($_smarty_tpl->tpl_vars['value2']->value['grantav']==1){?>
					<input type='hidden' name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['grantpermid'];?>
][available]" value='1' /> 
					<input type='checkbox' name="perm[<?php echo $_smarty_tpl->tpl_vars['value2']->value['grantpermid'];?>
][delperm]" value='1' /> <?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>

				<?php }?>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
			<?php }?>
		<?php }} ?>
		<?php }} ?>
		</table>
		</div>
		</td>
		</tr>
		<tr>
			<td colspan="7" class="center">
			<input type="hidden" name="showmyperms" value="<?php echo $_smarty_tpl->getVariable('showmyperms')->value;?>
" />
			<input type="submit" name="editall" value="<?php echo $_smarty_tpl->getVariable('lang')->value['edit'];?>
" />
			</td>
		</tr>
</table>
</form>