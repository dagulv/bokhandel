<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views/templates/page.latte */
final class Templatee6df26d6c6 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo "\n";
		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 2 */;
		echo '
<div class="content">
';
		while (have_posts()) /* line 5 */ {
			echo '  ';
			echo LR\Filters::escapeHtmlText(the_post()) /* line 6 */;
			echo '
  
  <h1>';
			echo LR\Filters::escapeHtmlText(the_title()) /* line 8 */;
			echo '</h1>
  <hr>
  ';
			echo LR\Filters::escapeHtmlText(the_content()) /* line 10 */;
			echo '

';
		}
		echo '</div>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 15 */;
		return get_defined_vars();
	}

}
