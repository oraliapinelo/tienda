<?php /* Smarty version Smarty-3.1.19, created on 2016-08-11 00:43:34
         compiled from "C:\xampp\htdocs\shop\themes\plantillanew\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:519757ac10861c03a3-28586124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '048f6e64fe7487359f753253afc72b7d967cbfec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\plantillanew\\category-count.tpl',
      1 => 1470894164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '519757ac10861c03a3-28586124',
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
  'unifunc' => 'content_57ac10861cfda3_06726814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac10861cfda3_06726814')) {function content_57ac10861cfda3_06726814($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0) {?>
	<?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1) {?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>
