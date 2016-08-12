<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 00:25:52
         compiled from "C:\xampp\htdocs\shop\themes\theme593\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402057ac0c6075e371-81369175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1126daf7cf1dc1fb8dc6d2bcd8a6e9811996af86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\theme593\\category-count.tpl',
      1 => 1470891329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402057ac0c6075e371-81369175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac0c60771c07_74183931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac0c60771c07_74183931')) {function content_57ac0c60771c07_74183931($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?>
	<?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>
