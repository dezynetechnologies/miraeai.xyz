<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package masco
 */

use MascoTheme\Inc\Classes\Masco_Main;

get_header();

$mascoObj = new Masco_Main();
$mascoObj->masco_breadcrumb_bridge();

$masco = get_option('masco');
$grid = (isset($masco['blog_grid'])) ? $masco['blog_grid'] : 'one-column';

?>

<div class="content-block sp-80">
	<div class="container">
		<div class="row blog-content-row justify-content-center">

			<?php
			// If Redux Framework Active
			if (have_posts()) :

				if (class_exists('ReduxFrameworkPlugin')) :
					$mascoObj->postMarkupGenerator($masco['blog_layout'], $grid);

				else : // If Redux Framework Is Not Active

					$mascoObj->postMarkupGenerator(null, $grid);

				endif;
			else :
				get_template_part('template-parts/contents/content-none');
			endif;
			?>
		</div>
	</div>
</div>


<?php
get_footer();
