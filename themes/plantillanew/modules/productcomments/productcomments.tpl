<script type="text/javascript">
var productcomments_controller_url = '{$productcomments_controller_url}';
var confirm_report_message = "{l s='Are you sure you want report this comment?' mod='productcomments'}";
var secure_key = "{$secure_key}";
var productcomments_url_rewrite = '{$productcomments_url_rewriting_activated}';

</script>

<div id="idTab5">
	<div id="product_comments_block_tab">
	{if $comments}
		{foreach from=$comments item=comment}
			{if $comment.content}
			<div class="comment clearfix">
				<div class="comment_author">
					<span>{l s='Grade' mod='productcomments'}&nbsp</span>
					<div class="star_content clearfix">
					{section name="i" start=0 loop=5 step=1}
						{if $comment.grade le $smarty.section.i.index}
							<div class="star"></div>
						{else}
							<div class="star star_on"></div>
						{/if}
					{/section}
					</div>
					<div class="comment_author_infos">
						<strong>{$comment.customer_name|escape:'html':'UTF-8'}</strong><br/>
						<em>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</em>
					</div>
				</div>
				<div class="comment_details">
					<h4 class="title_block">{$comment.title}</h4>
					<p>{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
					<ul>
						{if $comment.total_advice > 0}
							<li>{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}</li>
						{/if}
						{if $logged == 1}
							{if !$comment.customer_advice}
							<li>{l s='Was this comment useful to you?' mod='productcomments'}<button class="usefulness_btn" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}">{l s='yes' mod='productcomments'}</button><button class="usefulness_btn" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}">{l s='no' mod='productcomments'}</button></li>
							{/if}
							{if !$comment.customer_report}
							<li><span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">{l s='Report abuse' mod='productcomments'}</span></li>
							{/if}
						{/if}
					</ul>
				</div>
			</div>
			{/if}
		{/foreach}
	{else}
		{if ($too_early == false AND ($logged OR $allow_guests))}
		<p class="align_center">
			<a id="new_comment_tab_btn"  class="open-comment-form btn"  role="button" data-toggle="modal" data-dynamic="true" href="#new_comment_form">{l s='Be the first to write your review' mod='productcomments'} !</a>
		</p>
		{else}
		<p class="align_center">{l s='No customer comments for the moment.' mod='productcomments'}</p>
		{/if}
	{/if}	
	</div>
</div>

<!-- Fancybox -->
	<div id="new_comment_form"   class="modal hide fade" tabindex="-1" data-width="760">

		<form action="#">
         <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h1 class="title"><span>{l s='Write your review' mod='productcomments'}</span></h1>
            </div>
			     <div class="modal-body">
              <div class="row-fluid ">
			<div class="product titled_box span6">
            				<div id="new_comment_form_error" class="alert alert-error" style="display: none;">
					<ul></ul>
				</div>
            <h2><span>{$product->name}</span></h2>
				<img src="{$link->getImageLink($product->link_rewrite, $productcomment_cover, 'small_default')}"  alt="{$product->name|escape:html:'UTF-8'}" />
				<div class="product_desc">
		
					{$product->description_short}
				</div>
			</div>

			<div class="new_comment_form_content titled_box span6">
			<h2><span>{l s='Write your review' mod='productcomments'}</span></h2>



				{if $criterions|@count > 0}
					<ul id="criterions_list">
					{foreach from=$criterions item='criterion'}
						<li>
							<label>{$criterion.name|escape:'html':'UTF-8'}:</label>
							<div class="star_content">
								<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="1" />
								<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="2" />
								<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="3" checked="checked" />
								<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="4" />
								<input class="star" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="5" />
							</div>
							<div class="clearfix"></div>
						</li>
					{/foreach}
					</ul>
				{/if}

				<label for="comment_title">{l s='Title' mod='productcomments'}: <sup class="required">*</sup></label>
				<input id="comment_title" name="title" type="text" value=""/>

				<label for="content">{l s='Comment' mod='productcomments'}: <sup class="required">*</sup></label>
				<textarea id="content" name="content"></textarea>

				{if $allow_guests == true && $logged == 0}
				<label>{l s='Your name' mod='productcomments'}: <sup class="required">*</sup></label>
				<input id="commentCustomerName" name="customer_name" type="text" value=""/>
				{/if}
		</div> </div></div>
				<div id="new_comment_form_footer" class=" modal-footer">
					<input id="id_product_comment_send" name="id_product" type="hidden" value='{$id_product_comment_form}'></input>
					<p class="fl required"><sup>*</sup> {l s='Required fields' mod='productcomments'}</p>
					<p class="fr">
						<button class="btn btn-inverse" id="submitNewMessage" name="submitMessage" type="submit">{l s='Send' mod='productcomments'}</button>
                        <a  class="btn btn-inverse" data-dismiss="modal" aria-hidden="true" href="#" >{l s='Cancel' mod='productcomments'}</a>
					</p>
					<div class="clearfix"></div>
				</div>

		</form><!-- /end new_comment_form_content -->
	</div>
<!-- End fancybox -->
