<?php /*%%SmartyHeaderCode:504357ac3e16dfc4c8-10947788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997f9a55a00a2868ffb20c8550952430998b4af9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\plantillanew\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1470894165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '504357ac3e16dfc4c8-10947788',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac3e16ea4478_47135104',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac3e16ea4478_47135104')) {function content_57ac3e16ea4478_47135104($_smarty_tpl) {?><!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Fabricantes</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="last_item"><a href="http://localhost/shop/1_fashion-manufacturer" title="More about Fashion Manufacturer"><i class="icon-ok"></i>Fashion Manufacturer</a></li>
				</ul>
				<form action="/shop/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">Todos los fabricantes</option>
									<option value="http://localhost/shop/1_fashion-manufacturer">Fashion Manufacturer</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>
