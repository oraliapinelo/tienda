<!-- Block Newsletter module-->
<section id="newsletter_block_left"  class="block products_block column_box">
	<h4><span>{l s='Newsletter' mod='blocknewsletter'}</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
	{if isset($msg) && $msg}
		<p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
	{/if}
		<form action="{$link->getPageLink('index')}" method="post">
			<p>
				{* @todo use jquery (focusin, focusout) instead of onblur and onfocus *}
				<input type="email" name="email" size="18" 
					value="{if isset($value) && $value}{$value}{else}{l s='your e-mail' mod='blocknewsletter'}{/if}" 
					onfocus="javascript:if(this.value=='{l s='your e-mail' mod='blocknewsletter'}')this.value='';" 
					onblur="javascript:if(this.value=='')this.value='{l s='your e-mail' mod='blocknewsletter'}';" 
					class="inputNew" />
				<!--<select name="action">
					<option value="0"{if isset($action) && $action == 0} selected="selected"{/if}>{l s='Subscribe' mod='blocknewsletter'}</option>
					<option value="1"{if isset($action) && $action == 1} selected="selected"{/if}>{l s='Unsubscribe' mod='blocknewsletter'}</option>
				</select>-->
					<input type="submit" value="ok" class="button_form" name="submitNewsletter" />
				<input type="hidden" name="action" value="0" />
			</p>
		</form>
	</div>
</section>

<!-- /Block Newsletter module-->
