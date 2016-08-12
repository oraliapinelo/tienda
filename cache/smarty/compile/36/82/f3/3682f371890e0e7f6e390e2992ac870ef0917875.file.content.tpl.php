<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 06:54:57
         compiled from "C:\xampp\htdocs\shop\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1750857ac0521281669-03174215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3682f371890e0e7f6e390e2992ac870ef0917875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\themes\\default\\template\\content.tpl',
      1 => 1470890937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750857ac0521281669-03174215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac05212c7b79_03568688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac05212c7b79_03568688')) {function content_57ac05212c7b79_03568688($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
