{*
* 2007-2012 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2012 PrestaShop SA
*  @version  Release: $Revision: 6594 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Top sellers'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h1><span>{l s='Top sellers'}</span></h1>

{if $products}
            <div class="sortPagiBar shop_box_row shop_box_row clearfix">
            {include file="./product-sort.tpl"}
            {include file="./nbr-product-page.tpl"}
            </div>
			{include file="./product-list.tpl" products=$products}
            <div class="bottom_pagination shop_box_row  clearfix">
            {include file="./product-compare.tpl"}
            {include file="./pagination.tpl"}
            </div>
{else}
	<p class="warning">{l s='No top sellers.'}</p>
{/if}