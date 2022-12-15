<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport\wp-content\themes\esport\gutenberg\blocks\sidebar/view.latte */
final class Template1154501eff extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$iterations = 0;
		foreach ($products as $product) /* line 1 */ {
			echo '<aside
  class="sidebar"
> 
  ';
			$customProducts = new WP_Query(
			array(
			'post_type'             => 'product',
			'post_status'           => 'publish',
			'tax_query'             => array(
			array(
			'taxonomy'      => 'product_cat',
			'terms'         => $product['product']['id']
			)
			)
			)) /* line 5 */;
			echo '
  <section class="widget card">
    <div class="card__header">
';
			ob_start(function () {});
			try {
				echo '      <h3 class="title italized no-space">';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText($product['title']['text']) /* line 18 */;
				} finally {
					$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
				}
				echo '</h3>
';
			} finally {
				if ($ʟ_ifc[1] ?? null) {
					ob_end_clean();
				} else {
					echo ob_get_clean();
				}
			}
			echo '    </div>
';
			while ($customProducts->have_posts()) /* line 20 */ {
				echo '      ';
				echo LR\Filters::escapeHtmlText($customProducts->the_post()) /* line 21 */;
				echo "\n";
				$this->createTemplate(tr_part('product-card'), $this->params, 'include')->renderToContentType('html') /* line 22 */;
			}
			echo '    ';
			echo LR\Filters::escapeHtmlText(wp_reset_postdata()) /* line 24 */;
			echo '
    
  </section>
    
</aside>';
			$iterations++;
		}
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['product' => '1'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}
