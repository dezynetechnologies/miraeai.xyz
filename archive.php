<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package masco
 */
use MascoTheme\Inc\Classes\Masco_Main;

get_header();

$mascoObj = new Masco_Main();
echo esc_html($mascoObj->masco_breadcrumb_bridge());

$masco = get_option('masco');
$grid = (isset($masco['blog_grid'])) ? $masco['blog_grid'] : 'two-column';

?>

<div class="content-block">
	<div class="container">
		<div class="row blog-content-row">

			<?php
			// If Redux Framework Active
			if (class_exists('ReduxFrameworkPlugin')) :
				$mascoObj->postMarkupGenerator($masco['blog_layout'], $grid);

			else : // If Redux Framework Is Not Active

				$mascoObj->postMarkupGenerator(null, $grid);

			endif;

			?>

		</div>
	</div>
</div>


<?php
get_footer();
