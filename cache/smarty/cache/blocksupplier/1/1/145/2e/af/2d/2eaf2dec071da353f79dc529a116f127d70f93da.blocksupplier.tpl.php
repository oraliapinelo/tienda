<?php /*%%SmartyHeaderCode:2276157ac3e1734dfe7-71870630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eaf2dec071da353f79dc529a116f127d70f93da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\plantillanew\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1470894165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2276157ac3e1734dfe7-71870630',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac3e173a0076_18917376',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac3e173a0076_18917376')) {function content_57ac3e173a0076_18917376($_smarty_tpl) {?><!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Proveedores</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="last_item">
			<a href="http://localhost/shop/1__fashion-supplier" title="Más sobre Fashion Supplier"><i class="icon-ok"></i>Fashion Supplier</a>
		</li>
				</ul>
				<form action="/shop/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Todos los proveedores</option>
									<option value="http://localhost/shop/1__fashion-supplier">Fashion Supplier</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>
