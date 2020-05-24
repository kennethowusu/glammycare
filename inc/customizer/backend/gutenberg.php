<?php

add_action( 'admin_enqueue_scripts', 'thehanger_custom_gutenberg_styles' );
function thehanger_custom_gutenberg_styles() {

	global $current_screen;

	$custom_gutenberg_styles = '

		.post-type-page .editor-styles-wrapper .wp-block
		{
			max-width: ' . esc_html(GBT_Opt::getOption('site_width')) . 'px;
		}

		.editor-styles-wrapper
		{
			background-color: ' . esc_html(GBT_Opt::getOption('content_bg_color')) . ';
		}

		.edit-post-visual-editor .wp-block h1,
		.edit-post-visual-editor .wp-block h2,
		.edit-post-visual-editor .wp-block h3,
		.edit-post-visual-editor .wp-block h4,
		.edit-post-visual-editor .wp-block h5,
		.edit-post-visual-editor .wp-block h6,
		.edit-post-visual-editor .wp-block blockquote,
		.edit-post-visual-editor .wp-block input[type="submit"],
		.edit-post-visual-editor .wp-block thead,
		.edit-post-visual-editor .wp-block th,
		.edit-post-visual-editor .wp-block label,
		.edit-post-visual-editor .wp-block textarea.editor-post-title__input,
		.edit-post-visual-editor p.wp-block-cover-text,
		.edit-post-visual-editor .wp-block-pullquote p,
		.edit-post-visual-editor .wp-block-quote p,
		.edit-post-visual-editor p.gbt_18_th_editor_slide_description_input,
		.gbt_18_th_editor_posts_grid_title,
		.wp-block-latest-posts li a,
		.editor-styles-wrapper .wp-block .wp-block-quote p,
		.editor-styles-wrapper .wp-block .wp-block-pullquote p,
		.wp-block-button__link,
		.editor-styles-wrapper .wp-block .wp-block-cover p.wp-block-cover-text,
		.wc-block-reviews-by-product .wc-block-review-list-item__author,
		.wc-block-all-reviews .wc-block-review-list-item__product,
		.wc-block-reviews-by-category .wc-block-review-list-item__product,
		.editor-styles-wrapper .wp-block .wc-block-order-select label.wc-block-order-select__label,
		.wp-block .wc-block-product-search textarea.wc-block-product-search__label,
		.edit-post-visual-editor .wp-block .gbt_18_th_editor_slide_content p.gbt_18_th_editor_slide_description_input,
		.wp-block-calendar, .wp-block-calendar *,
		.wp-block-latest-comments .wp-block-latest-comments__comment-author,
		.wp-block-latest-comments .wp-block-latest-comments__comment-link,
		.editor-styles-wrapper .wc-block-product-sort-select .wc-block-sort-select__select,
		.wp-block-search .wp-block-search__label,
		.wp-block-search .wp-block-search__button
		{
			font-family: "' . esc_html(GBT_Opt::getOption('secondary_font')['font-family']) . '", sans-serif;
		}

		.wp-block,
		.edit-post-visual-editor .wp-block p,
		.edit-post-visual-editor .wp-block strong,
		.edit-post-visual-editor .wp-block textarea,
		.editor-styles-wrapper .wp-block label,
		.edit-post-visual-editor .wp-block li,
		.wp-block-verse pre
		{
			font-family: "' . esc_html(GBT_Opt::getOption('main_font')['font-family']) . '", sans-serif;
		}

		.editor-styles-wrapper .wp-block p,
		.wp-block-preformatted pre,
		.wp-block-preformatted pre *,
		.wp-block-latest-comments .wp-block-latest-comments__comment-author,
		.wp-block-latest-comments .wp-block-latest-comments__comment-link
		{
			font-size: ' . esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.editor-styles-wrapper .wp-block h1,
		textarea.editor-post-title__input
		{
			font-size: ' . 2.5 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.editor-styles-wrapper .wp-block h2,
		.editor-styles-wrapper .wp-block .wp-block-cover p.wp-block-cover-text
		{
			font-size: ' . 2.1 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.editor-styles-wrapper .wp-block h3,
		.editor-styles-wrapper .wp-block-quote p,
		.editor-styles-wrapper .wp-block-pullquote p,
		.wp-block-pullquote blockquote > .editor-rich-text p
		{
			font-size: ' . 1.74 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.editor-styles-wrapper .wp-block h4 { font-size: ' . 1.44 * esc_html(GBT_Opt::getOption('font_size')) . 'px; }

		.editor-styles-wrapper .wp-block h5,
		.wp-block-latest-posts li a,
		.wp-block[data-type="core/pullquote"][data-align="left"] .wp-block-pullquote p,
		.wp-block[data-type="core/pullquote"][data-align="right"] .wp-block-pullquote p
		{
			font-size: ' . 1.2 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.editor-styles-wrapper .wp-block h6,
		.wp-block-quote__citation,
		.wp-block-pullquote__citation
		{
			font-size: ' . esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.wp-block-button .wp-block-button__link,
		.editor-styles-wrapper .wp-block label
		{
		    font-size: ' . 0.8125 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.wp-block
		{
			color: ' . esc_html(GBT_Opt::getOption('primary_color')) . ';
			font-size: ' . esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.editor-styles-wrapper .wp-block h1,
		.editor-styles-wrapper .wp-block h2,
		.editor-styles-wrapper .wp-block h3,
		.editor-styles-wrapper .wp-block h4,
		.editor-styles-wrapper .wp-block h5,
		.editor-styles-wrapper .wp-block h6,
		.wp-block table th,
		.wp-block dl dt,
		.wp-block blockquote,
		.wp-block label,
		.edit-post-visual-editor .wp-block a,
		.wp-block-pullquote blockquote:not(.has-text-color) > .editor-rich-text p,
		.edit-post-visual-editor .wp-block textarea.editor-post-title__input,
		.wp-block-pullquote blockquote:not(.has-text-color) .wp-block-pullquote__citation,
		.wp-block-quote .wp-block-quote__citation,
		.editor-styles-wrapper .wc-block-grid .wc-block-grid__products .wp-block-button__link,
		.editor-styles-wrapper .wp-block .wc-block-order-select label.wc-block-order-select__label,
		.wc-block-reviews-by-product .wc-block-review-list-item__author,
		.wc-block-product-search .wc-block-product-search__label,
		.wp-block-search .wp-block-search__label,
		.wp-block[data-type="woocommerce/active-filters"] .wc-block-active-filters__clear-all,
		.editor-styles-wrapper .wp-block[data-type="woocommerce/attribute-filter"] ul li label,
		.editor-styles-wrapper .wc-block-product-sort-select .wc-block-sort-select__select,
		.editor-styles-wrapper .wc-block-pagination .wc-block-pagination-page.wc-block-pagination-page--active
		{
			color: ' . esc_html(GBT_Opt::getOption('secondary_color')) . ';
		}

		.editor-styles-wrapper .wp-block label,
		.wp-block-preformatted pre,
		.wp-block-preformatted pre *,
		.wc-block-grid__product-title,
		.editor-styles-wrapper .wp-block[data-type="woocommerce/attribute-filter"] ul li label .wc-block-attribute-filter-list-count,
		.editor-styles-wrapper .wc-block-grid ul.wc-block-grid__products li.wc-block-grid__product .wc-block-grid__product-title,
		.editor-styles-wrapper .wc-block-grid ul.wc-block-grid__products li.wc-block-grid__product .wc-block-grid__product-title a,
		.editor-styles-wrapper .wc-block-grid ul.wc-block-grid__products li.wc-block-grid__product .wc-block-grid__product-price__value
		{
			color: ' . esc_html(GBT_Opt::getOption('primary_color')) . ';
		}

		.wp-block-latest-posts__post-date
		{
			color: ' . esc_html(GBT_Opt::getOption('content_dark_gray')) . ';
		}

		.wp-block-latest-posts li a:hover,
		.wc-block-grid .wc-block-grid__products .wc-block-grid__product .wc-block-grid__product-rating .star-rating span:before,
		.wc-block-grid__product-rating .wc-block-grid__product-rating__stars span:before
		{
			color: ' . esc_html(GBT_Opt::getOption('accent_color')) . ';
		}

		.wp-block input[type=color], .wp-block input[type=date], .wp-block input[type=datetime],
		.wp-block input[type=datetime-local], .wp-block	input[type=email], .wp-block input[type=month],
		.wp-block input[type=number], .wp-block input[type=password], .wp-block input[type=search],
		.wp-block input[type=tel], .wp-block input[type=text], .wp-block input[type=time],
		.wp-block input[type=url], .wp-block input[type=week], .wp-block select, .wp-block textarea
		{
			color: ' . esc_html(GBT_Opt::getOption('primary_color')) . ';
			background-color: ' . esc_html(GBT_Opt::getOption('content_bg_color')) . ';
			border-color: ' . esc_html(GBT_Opt::getOption('content_ultra_light_gray')) . ';
		    height: ' . 3 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		    line-height: ' . 3 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		    padding: 0 ' . 0.75 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		    font-size: ' . 0.8125 * esc_html(GBT_Opt::getOption('font_size')) . 'px;
		}

		.wp-block table tr,
		.wp-block table thead tr:first-child td,
		.wp-block table thead tr:first-child th,
		.wc-block-product-search__field.input-control,
		.wp-block-search .wp-block-search__input
		{
			border-color: ' . esc_html(GBT_Opt::getOption('content_ultra_light_gray')) . ';
		}

		.wp-block-search .wp-block-search__button
		{
			color: ' . esc_html(GBT_Opt::getOption('content_bg_color')) . ';
			background-color: ' . esc_html(GBT_Opt::getOption('secondary_color')) . ';
		}

		.editor-styles-wrapper .wc-block-grid ul.wc-block-grid__products li.wc-block-grid__product .wc-block-grid__product-onsale
		{
			color: ' . esc_html(GBT_Opt::getOption('content_bg_color')) . ';
			background-color: ' . esc_html(GBT_Opt::getOption('accent_color')) . ';
		}

		.wp-block[data-type="woocommerce/active-filters"] ul.wc-block-active-filters-list li
		{
			background-color:  ' . esc_html(GBT_Opt::getOption('content_ultra_light_gray')) . ';
		}

		.wp-block input::-ms-input-placeholder { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
		.wp-block input::-webkit-input-placeholder { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
		.wp-block input::-moz-placeholder { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
		.wp-block textarea::-ms-input-placeholder { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
		.wp-block textarea::-webkit-input-placeholder { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
		.wp-block textarea::-moz-placeholder { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
		.wp-block select { color: ' . esc_html(GBT_Opt::getOption('primary_color')) . '; }
	';

	if ( 1 == GBT_Opt::getOption('site_width_full') ) :
		$custom_gutenberg_styles .= '
			.post-type-page .editor-styles-wrapper .wp-block
			{
				max-width: 100%;
			}
		';
	endif;

	$current_screen = get_current_screen();
	if ( method_exists($current_screen, 'is_block_editor') && $current_screen->is_block_editor() ) {
		wp_enqueue_style( 'getbowtied-default-fonts', get_template_directory_uri() . '/inc/fonts/default.css', false, getbowtied_theme_version(), 'all');
		wp_add_inline_style( 'getbowtied_admin_styles', $custom_gutenberg_styles );
	}
}
