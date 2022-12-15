<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport\wp-content\themes\esport\gutenberg\blocks\slider-hero/view.latte */
final class Templatee80b9413b9 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if (!empty($slider)) /* line 1 */ {
			echo '<section class="hero-slider hero-slider__snap hero-slider--landing hero-slider--effects">
';
			$iterations = 0;
			foreach ($slider as $slide) /* line 2 */ {
				echo '  <div class="hero-slide">
      <div class="hero-slide-content">
          
          <div class="hero-slide-content__text">
';
				ob_start(function () {});
				try {
					echo '              <h2 class="hero-slide-content__title title font-xxl">';
					ob_start();
					try {
						echo LR\Filters::escapeHtmlText($slide['title']['text']) /* line 6 */;
						echo ' <span class="title title--colored"></span>';
					} finally {
						$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
					}
					echo '</h2>
';
				} finally {
					if ($ʟ_ifc[1] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
				echo '              ';
				echo LR\Filters::escapeHtmlText(tr_a($slide['cta'], 'title btn btn--brand btn--round btn--main')) /* line 7 */;
				echo '
          </div>
          
      </div>
      <img class="img img--hero-slide" src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(tr_get_media_path($slide['bg']))) /* line 11 */;
				echo '" alt="">
  </div>
';
				$iterations++;
			}
			echo '</section>';
		}
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['slide' => '2'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}
