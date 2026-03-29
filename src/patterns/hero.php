<?php
/**
 * Title: Hero Section
 * Slug: komeko-kitchen/hero
 * Categories: komeko-kitchen
 * Description: ヒーローセクション - 左に写真、右にキャッチコピー
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}},"border":{"bottom":{"color":"var(--wp--preset--color--secondary)","width":"0px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns has-background-background-color has-background" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:0px">

	<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
	<div class="wp-block-column" style="flex-basis:50%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"0px"}},"className":"komeko-hero-image"} -->
		<figure class="wp-block-image size-full komeko-hero-image" style="border-radius:0px"><img src="" alt="Mariko Organics ヒーロー画像"/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"80px","right":"80px"},"blockGap":"24px"}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%;padding-top:80px;padding-right:80px;padding-bottom:80px;padding-left:80px">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"16px","right":"16px"}},"border":{"radius":"24px"}},"backgroundColor":"primary-badge","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group has-primary-badge-background-color has-background" style="border-radius:24px;padding-top:6px;padding-right:16px;padding-bottom:6px;padding-left:16px">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"body"} -->
			<p class="has-primary-color has-text-color has-body-font-family" style="font-size:12px;font-style:normal;font-weight:500">🍃 Organic &amp; Gluten-Free</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"48px","letterSpacing":"-1px","lineHeight":"1.2"}},"fontFamily":"heading"} -->
		<h1 class="wp-block-heading has-heading-font-family" style="font-size:48px;letter-spacing:-1px;line-height:1.2">生米で広がる<br>新しい食の世界</h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.6"}},"textColor":"text-muted","fontFamily":"body"} -->
		<p class="has-text-muted-color has-text-color has-body-font-family" style="font-size:16px;line-height:1.6">Orange County発、オーガニック生米に特化した<br>お料理教室。グルテンフリーの美味しさを、<br>あなたのキッチンへ。</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"body"} -->
			<div class="wp-block-button" style="font-size:14px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:24px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px">オンラインレッスンを予約する →</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"backgroundColor":"white","textColor":"foreground","style":{"border":{"radius":"24px","width":"1px","color":"var(--wp--preset--color--secondary)"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"body"} -->
			<div class="wp-block-button" style="font-size:14px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-foreground-color has-white-background-color has-text-color has-background wp-element-button" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:24px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px">Shopを見る</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
