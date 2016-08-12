<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 23:57:48
         compiled from "C:\xampp\htdocs\shop\admin861rybipw\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2914157ac05cc69fd56-15055479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7f25ca41fdf8e6443cad2ca78fe0ad7dd6b27e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin861rybipw\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1470891328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2914157ac05cc69fd56-15055479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac05cc6b35d4_99670480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac05cc6b35d4_99670480')) {function content_57ac05cc6b35d4_99670480($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
