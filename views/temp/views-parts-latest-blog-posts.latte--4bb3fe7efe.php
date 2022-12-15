<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport/wp-content/themes/esport/views/parts/latest-blog-posts.latte */
final class Template4bb3fe7efe extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<section 
  class="more-blog-posts" 
  aria-label="Latest Blog Posts Section"
>
  <div class="container">
    <h2 class="text-center mb40">
      Latest Blog Posts
    </h2>
    <div class="f-row row--3 mb40">
';
		$customPosts = new WP_Query(
		array(
		'post_type' => 'post',
		'posts_per_page' => 3,
		'orderby'        => 'DESC',
		)
		) /* line 10 */;
		while ($customPosts->have_posts()) /* line 17 */ {
			echo '        ';
			echo LR\Filters::escapeHtmlText($customPosts->the_post()) /* line 18 */;
			echo "\n";
			$this->createTemplate(tr_part('post-card'), $this->params, 'include')->renderToContentType('html') /* line 19 */;
		}
		echo '      ';
		echo LR\Filters::escapeHtmlText(wp_reset_postdata()) /* line 21 */;
		echo '
    </div><!-- end row -->
    <div class="text-center">
      <a 
        href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(esc_url( home_url( '/' ) ))) /* line 25 */;
		echo 'blog" 
        class="btn btn--brand"
      >
        <span>Go to Blog</span>
      </a>
    </div>
  </div>
</section>';
		return get_defined_vars();
	}

}
