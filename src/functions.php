<?php
/**
 * Mariko Organics Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Google Fonts の読み込み
 */
function komeko_enqueue_fonts() {
	wp_enqueue_style(
		'komeko-google-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500&family=IBM+Plex+Mono:wght@500&family=Inter:wght@400;500&display=swap',
		array(),
		null
	);
}
add_action( 'wp_enqueue_scripts', 'komeko_enqueue_fonts' );
add_action( 'enqueue_block_editor_assets', 'komeko_enqueue_fonts' );

/**
 * カスタムCSS の読み込み
 */
function komeko_enqueue_styles() {
	wp_enqueue_style(
		'komeko-custom',
		get_template_directory_uri() . '/assets/css/custom.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'komeko_enqueue_styles' );

/**
 * Lucide Icons の読み込み
 */
function komeko_enqueue_lucide() {
	wp_enqueue_script(
		'lucide-icons',
		'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js',
		array(),
		null,
		true
	);
	wp_add_inline_script( 'lucide-icons', 'lucide.createIcons();' );
}
add_action( 'wp_enqueue_scripts', 'komeko_enqueue_lucide' );

/**
 * ブロックパターンカテゴリの登録
 */
function komeko_register_pattern_categories() {
	register_block_pattern_category( 'komeko-kitchen', array(
		'label' => __( 'Mariko Organics', 'komeko-kitchen' ),
	) );
}
add_action( 'init', 'komeko_register_pattern_categories' );

/**
 * Amazon アフィリエイトカードのショートコード
 */
function mariko_amazon_card_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'url'   => '#',
		'image' => '',
		'title' => '',
		'desc'  => '',
	), $atts, 'amazon_card' );

	ob_start();
	?>
	<div class="mariko-amazon-card" style="display:flex;align-items:center;gap:20px;padding:20px;border:1px solid var(--wp--preset--color--secondary);border-radius:16px;background:#fff;">
		<?php if ( $atts['image'] ) : ?>
		<img src="<?php echo esc_url( $atts['image'] ); ?>" alt="<?php echo esc_attr( $atts['title'] ); ?>" style="width:120px;height:120px;object-fit:contain;border-radius:12px;background:#F5F5F5;flex-shrink:0;" />
		<?php endif; ?>
		<div>
			<p style="font-size:14px;font-weight:500;margin:0 0 4px;"><?php echo esc_html( $atts['title'] ); ?></p>
			<p style="font-size:13px;color:#8A8A8A;margin:0 0 12px;"><?php echo esc_html( $atts['desc'] ); ?></p>
			<a href="<?php echo esc_url( $atts['url'] ); ?>" class="mariko-amazon-btn" target="_blank" rel="nofollow noopener">Amazonで見る</a>
		</div>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'amazon_card', 'mariko_amazon_card_shortcode' );

/**
 * テーマサポートの設定
 */
function komeko_theme_support() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'komeko_theme_support' );
