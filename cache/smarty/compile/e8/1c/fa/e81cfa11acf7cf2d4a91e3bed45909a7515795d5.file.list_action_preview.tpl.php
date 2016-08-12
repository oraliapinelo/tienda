<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 23:57:49
         compiled from "C:\xampp\htdocs\shop\admin861rybipw\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167757ac05cd2b7ff3-05958015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81cfa11acf7cf2d4a91e3bed45909a7515795d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin861rybipw\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1470891328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167757ac05cd2b7ff3-05958015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac05cd2bfcf3_52083967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac05cd2bfcf3_52083967')) {function content_57ac05cd2bfcf3_52083967($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
