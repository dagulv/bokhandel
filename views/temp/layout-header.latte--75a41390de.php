<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views//layout/header.latte */
final class Template75a41390de extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!doctype html>
<html ';
		echo language_attributes() /* line 2 */;
		echo '>

<head>
	<meta charset="';
		echo LR\Filters::escapeHtmlAttr(bloginfo('charset')) /* line 5 */;
		echo '">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Open+Sans&display=swap" rel="stylesheet">

	';
		echo LR\Filters::escapeHtmlText(wp_head()) /* line 13 */;
		echo '
	<style id="critical-css" type="text/css">
		';
		echo file_get_contents(get_template_directory() . '/prod/global/critical.css') /* line 15 */;
		echo '
	</style>

	<link rel="preload" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(get_template_directory_uri())) /* line 18 */;
		echo '/prod/global/style.css" as="style">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(get_template_directory_uri())) /* line 19 */;
		echo '/prod/global/style.css">

	<script type="text/javascript">
		var tr_theme_url = ';
		echo LR\Filters::escapeJs(get_bloginfo("template_url")) /* line 22 */;
		echo ';
		var tr_site_url = ';
		echo LR\Filters::escapeJs(esc_url( home_url( '/' ) )) /* line 23 */;
		echo ';
	</script>
</head>

<body ';
		echo body_class() /* line 27 */;
		echo '>
';
		$this->createTemplate(tr_view_path('/layout/main-menu'), $this->params, 'include')->renderToContentType('html') /* line 28 */;
		echo '	<main class="main-content ';
		echo LR\Filters::escapeHtmlAttr(tr_is_ie() ? 'main_is_ie' : '') /* line 29 */;
		echo '">';
		return get_defined_vars();
	}

}
