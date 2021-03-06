<!-- Block search module -->
<section id="search_block_left" class="block column_box">
	<h4 class="title_block"><span>{l s='Search' mod='blocksearch'}</span><span class="column_icon_toggle"></span></h4>
	<form method="get" action="{$link->getPageLink('search', true)}" id="searchbox" class="toggle_content">
		<p class="block_content">
			<label for="search_query_block">{l s='Enter a product name' mod='blocksearch'}</label>
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_block" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|htmlentities:$ENT_QUOTES:'utf-8'|stripslashes}{/if}" />
			<input type="submit" id="search_button" class="button_mini" value="{l s='go' mod='blocksearch'}" />
		</p>
	</form>
</section>
{include file="$self/blocksearch-instantsearch.tpl"}
<!-- /Block search module -->
