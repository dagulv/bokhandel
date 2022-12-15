<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views/templates/404.latte */
final class Template77f66e40c0 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		$this->createTemplate(tr_view_path('/layout/header'), $this->params, 'include')->renderToContentType('html') /* line 1 */;
		echo '
<section class="content">
  404 not found
</section>

';
		$this->createTemplate(tr_view_path('/layout/footer'), $this->params, 'include')->renderToContentType('html') /* line 7 */;
		return get_defined_vars();
	}

}
