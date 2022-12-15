<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views/parts/post-card.latte */
final class Template3eec45409d extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '
<div class="col">
	<article class="post-card">
		<a 
			href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(the_permalink())) /* line 5 */;
		echo '" 
			class="post-card__thumb h-bg-zoom"
		>
			<div class="lds-ripple"><div></div><div></div></div>
';
		$post_card_img = get_the_post_thumbnail_url(get_the_ID(), 'card-thumb') /* line 9 */;
		echo '			<div 
				class="post-card__thumb__img h-bg-zoom__img" 
				style="background-image: url(\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::escapeCss($post_card_img)) /* line 12 */;
		echo '\')"></div>
		</a>
		<div class="post-card__txt">
			<h4 class="post-card__title">
				<a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(the_permalink())) /* line 16 */;
		echo '">
					';
		echo LR\Filters::escapeHtmlText(the_title()) /* line 17 */;
		echo '
				</a>
			</h4>
			<p class="entry-meta">
				';
		echo tr_posted_on() /* line 21 */;
		echo '
        ';
		echo LR\Filters::escapeHtmlText(tr_posted_by()) /* line 22 */;
		echo '
			</p>
			<p class="post-card__excerpt">
				';
		echo LR\Filters::escapeHtmlText(get_the_excerpt(140)) /* line 25 */;
		echo '
			</p>
			';
		echo get_the_category_list() /* line 27 */;
		echo '
		</div> <!-- txt -->
	</article>
</div><!-- col -->';
		return get_defined_vars();
	}

}
