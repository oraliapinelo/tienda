<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 00:03:03
         compiled from "C:\xampp\htdocs\shop\themes\theme593\modules\blocknewsletter\blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732057ac07070e3107-45052642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5193918cf7596e5a7a31ce1ed5681434de13abea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\theme593\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1470891329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732057ac07070e3107-45052642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
    'link' => 0,
    'value' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac0707135194_90371802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac0707135194_90371802')) {function content_57ac0707135194_90371802($_smarty_tpl) {?><!-- Block Newsletter module-->
<section id="newsletter_block_left"  class="block products_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?>
		<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning_inline<?php } else { ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
		<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index');?>
" method="post">
			<p>
				
				<input type="email" name="email" size="18" 
					value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value) {?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
<?php }?>" 
					onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
')this.value='';" 
					onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter'),$_smarty_tpl);?>
';" 
					class="inputNew" />
				<!--<select name="action">
					<option value="0"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==0) {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
					<option value="1"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==1) {?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'blocknewsletter'),$_smarty_tpl);?>
</option>
				</select>-->
					<input type="submit" value="ok" class="button_form" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</section>

<!-- /Block Newsletter module-->
<?php }} ?>
