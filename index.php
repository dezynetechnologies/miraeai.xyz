<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<div class="row blog-content-row justify-content-center">

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
