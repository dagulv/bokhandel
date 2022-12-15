<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views/parts/product-card.latte */
final class Template5700eff0e2 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$current_product = wc_get_product() /* line 1 */;
		echo '
	<article class="product-list-card">
		<a 
			href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(the_permalink())) /* line 5 */;
		echo '" 
			class="product-list-card__thumb h-bg-zoom"
		>
			<div class="lds-ripple"><div></div><div></div></div>
';
		$product_list_card_img = get_the_post_thumbnail_url($current_product->ID, 'card-thumb') /* line 9 */;
		echo '	  <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($product_list_card_img)) /* line 12 */;
		echo '" class="product-list-card__thumb__img h-bg-zoom__img">
		</a>
		<div class="product-list-card__txt">
			<h4 class="product-list-card__title">
				<a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(the_permalink())) /* line 19 */;
		echo '">
					';
		echo LR\Filters::escapeHtmlText(the_title()) /* line 20 */;
		echo '
				</a>
			</h4>
			<p class="entry-meta">
        		';
		echo LR\Filters::escapeHtmlText($current_product->get_attribute('författare')) /* line 24 */;
		echo '
			</p>
			<p class="product-list-card__excerpt">
				';
		echo LR\Filters::escapeHtmlText(get_the_excerpt(140)) /* line 27 */;
		echo '
			</p>
			';
		echo get_the_category_list() /* line 29 */;
		echo '
		</div> <!-- txt -->
	</article>';
		return get_defined_vars();
	}

}
