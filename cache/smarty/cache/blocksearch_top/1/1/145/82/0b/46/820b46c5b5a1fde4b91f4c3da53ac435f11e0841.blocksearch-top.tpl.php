<?php /*%%SmartyHeaderCode:1347357ac108310bdb2-85798853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '820b46c5b5a1fde4b91f4c3da53ac435f11e0841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\plantillanew\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1470894165,
      2 => 'file',
    ),
    '1cc9d5cafeee3ef07f99e4a408d90e589b042ccd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\themes\\plantillanew\\\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1470894165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1347357ac108310bdb2-85798853',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ac3e15925b93_27375941',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac3e15925b93_27375941')) {function content_57ac3e15925b93_27375941($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://localhost/shop/buscar" id="searchbox">
		<p>
			<label for="search_query_top">Buscar</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
            <a href="javascript:document.getElementById('searchbox').submit();"></a>
			
	    </p>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://localhost/shop/buscar', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>
