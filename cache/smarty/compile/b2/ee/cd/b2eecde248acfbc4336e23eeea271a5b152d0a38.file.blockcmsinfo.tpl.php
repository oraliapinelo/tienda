<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 00:02:10
         compiled from "C:\xampp\htdocs\shop\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046757ac06d21bdb44-43425156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2eecde248acfbc4336e23eeea271a5b152d0a38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1466020876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046757ac06d21bdb44-43425156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac06d21cd546_56009952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac06d21cd546_56009952')) {function content_57ac06d21cd546_56009952($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
