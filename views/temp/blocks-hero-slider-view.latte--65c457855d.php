<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport\wp-content\themes\esport\gutenberg\blocks\hero-slider/view.latte */
final class Template65c457855d extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if (!empty($slider)) /* line 1 */ {
			echo '<section class="hero-slider hero-slider__snap hero-slider--landing hero-slider--effects">
<div class="test"></div>
';
			$iterations = 0;
			foreach ($slider as $slide) /* line 3 */ {
				echo '  <div class="hero-slide">
      <div class="hero-slide-content">
          ';
				echo LR\Filters::escapeHtmlText(tr_get_media($slide['heroImg'], true)) /* line 5 */;
				echo '
          <img class="img img__main-hero-slide" src="../images/esports/hero-slider/hero-character-1.png" alt="">
          <div class="hero-slide-content__text">
';
				ob_start(function () {});
				try {
					echo '              <span class="title italized animation-typewriter">';
					ob_start();
					try {
						echo LR\Filters::escapeHtmlText($slide['label']['text']) /* line 8 */;
					} finally {
						$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
					}
					echo '</span>
';
				} finally {
					if ($ʟ_ifc[1] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
				ob_start(function () {});
				try {
					echo '              <h2 class="hero-slide-content__title title italized animation-floating font-xxl">';
					ob_start();
					try {
						echo LR\Filters::escapeHtmlText($slide['title']['text']) /* line 9 */;
						echo ' <span class="title title--colored"></span>';
					} finally {
						$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
					}
					echo '</h2>
';
				} finally {
					if ($ʟ_ifc[2] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
				echo '              <span class="text text__desc">';
				echo LR\Filters::escapeHtmlText($slide['description']['text']) /* line 10 */;
				echo '</span>
              ';
				echo LR\Filters::escapeHtmlText(tr_a($slide['cta'], 'btn btn--main italized')) /* line 11 */;
				echo '
              <button class="btn btn--main italized">
                  Check the player\'s bio <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-cheveron-right-circle"><circle cx="12" cy="12" r="10" fill="rgba(0 0 0 / 0.5)"></circle><path fill="#fff" d="M10.3 8.7a1 1 0 0 1 1.4-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4l3.29-3.3-3.3-3.3z"></path></svg>
              </button>
          </div>
          
      </div>
      
      <div class="dot-overlay"></div>
      <img class="img img--hero-slide" src="../images/esports/hero-hero-slider/hero-bg-1.jpg" alt="">
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
			foreach (array_intersect_key(['slide' => '3'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}
