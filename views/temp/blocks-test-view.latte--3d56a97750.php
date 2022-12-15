<?php

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\esport\wp-content\themes\esport\gutenberg\blocks\test/view.latte */
final class Template3d56a97750 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<h2>Main Fields</h2>

';
		ob_start(function () {});
		try {
			echo '<h3>';
			ob_start();
			try {
				echo LR\Filters::escapeHtmlText($example_title['text']) /* line 3 */;
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
		ob_start(function () {});
		try {
			echo '<h3>';
			ob_start();
			try {
				echo $example_title_rich['text'] /* line 4 */;
			} finally {
				$ʟ_ifc[2] = rtrim(ob_get_flush()) === '';
			}
			echo '</h3>
';
		} finally {
			if ($ʟ_ifc[2] ?? null) {
				ob_end_clean();
			} else {
				echo ob_get_clean();
			}
		}
		ob_start(function () {});
		try {
			echo '<h3>';
			ob_start();
			try {
				echo LR\Filters::escapeHtmlText($example_title_long['text']) /* line 5 */;
			} finally {
				$ʟ_ifc[3] = rtrim(ob_get_flush()) === '';
			}
			echo '</h3>
';
		} finally {
			if ($ʟ_ifc[3] ?? null) {
				ob_end_clean();
			} else {
				echo ob_get_clean();
			}
		}
		ob_start(function () {});
		try {
			echo '<div>';
			ob_start();
			try {
				echo $example_richtext['text'] /* line 6 */;
			} finally {
				$ʟ_ifc[4] = rtrim(ob_get_flush()) === '';
			}
			echo '</div>
';
		} finally {
			if ($ʟ_ifc[4] ?? null) {
				ob_end_clean();
			} else {
				echo ob_get_clean();
			}
		}
		echo LR\Filters::escapeHtmlText(tr_a($example_cta)) /* line 7 */;
		echo "\n";
		echo LR\Filters::escapeHtmlText(tr_get_media($example_image)) /* line 8 */;
		echo "\n";
		if (!empty($example_links)) /* line 9 */ {
			echo '<ul>
';
			$iterations = 0;
			foreach ($example_links as $el) /* line 10 */ {
				ob_start(function () {});
				try {
					echo '  <li
  >
';
					ob_start();
					try {
						echo '    ';
						echo LR\Filters::escapeHtmlText(tr_a($el['link'])) /* line 14 */;
						echo "\n";
					} finally {
						$ʟ_ifc[5] = rtrim(ob_get_flush()) === '';
					}
					echo '  </li>
';
				} finally {
					if ($ʟ_ifc[5] ?? null) {
						ob_end_clean();
					} else {
						echo ob_get_clean();
					}
				}
				$iterations++;
			}
			echo '</ul>
';
		}
		echo '
<hr>

<div class="test"></div>

<h2>Sidebar Fields</h2>
<h3
  style="color: ';
		echo $inspector_example_color['value'] /* line 24 */;
		echo '"
>
  ';
		echo LR\Filters::escapeHtmlText($inspector_example_color['value']) /* line 26 */;
		echo '
</h3>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['el' => '10'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}
