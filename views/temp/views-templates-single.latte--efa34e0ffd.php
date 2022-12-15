<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views/templates/single.latte */
final class Templateefa34e0ffd extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<div class="content">
';
		while (have_posts()) /* line 4 */ {
			echo '  ';
			echo LR\Filters::escapeHtmlText(the_post()) /* line 5 */;
			echo '

';
			ob_start(function () {});
			try {
				echo '  <h1>';
				ob_start();
				try {
					echo LR\Filters::escapeHtmlText(the_title()) /* line 7 */;
				} finally {
					$ʟ_ifc[1] = rtrim(ob_get_flush()) === '';
				}
				echo '</h1>
';
			} finally {
				if ($ʟ_ifc[1] ?? null) {
					ob_end_clean();
				} else {
					echo ob_get_clean();
				}
			}
			echo '  <hr>
  ';
			echo LR\Filters::escapeHtmlText(the_content()) /* line 9 */;
			echo '

';
		}
		echo '</div>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 14 */;
		return get_defined_vars();
	}

}
