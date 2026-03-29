<?php
/**
 * Title: Featured Article Section
 * Slug: komeko-kitchen/featured-article
 * Categories: komeko-kitchen
 * Description: おすすめ記事セクション - 2カラムのフィーチャー記事カード
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"120px","right":"120px"},"blockGap":"60px"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:80px;padding-right:120px;padding-bottom:80px;padding-left:120px">

	<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontFamily":"body"} -->
		<p class="has-text-align-center has-primary-color has-text-color has-body-font-family" style="font-size:11px;font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">FEATURED</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","fontFamily":"heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-heading-font-family">おすすめ記事</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"}},"border":{"radius":"20px","width":"1px","color":"var(--wp--preset--color--secondary)"}},"backgroundColor":"white"} -->
	<div class="wp-block-columns has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:20px">

		<!-- wp:column {"width":"55%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
		<div class="wp-block-column" style="flex-basis:55%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"full","className":"mariko-featured-image"} -->
			<figure class="wp-block-image size-full mariko-featured-image"><img src="" alt="おすすめキッチンツール Best 5"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"blockGap":"16px"}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"12px"}},"backgroundColor":"primary-light","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group has-primary-light-background-color has-background" style="border-radius:12px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"body"} -->
				<p class="has-primary-color has-text-color has-body-font-family" style="font-size:11px;font-style:normal;font-weight:500">おすすめ</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px","letterSpacing":"-0.5px"}},"fontFamily":"heading"} -->
			<h3 class="wp-block-heading has-heading-font-family" style="font-size:24px;letter-spacing:-0.5px">私のおすすめキッチンツール Best 5</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","lineHeight":"1.6"}},"textColor":"text-muted","fontFamily":"body"} -->
			<p class="has-text-muted-color has-text-color has-body-font-family" style="font-size:14px;line-height:1.6">生米料理に欠かせないキッチンツールを厳選してご紹介。ブレンダーからスケールまで、毎日の料理がもっと楽しくなるアイテムをピックアップしました。</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"8px"}}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"8px"}},"backgroundColor":"secondary","layout":{"type":"flex"}} -->
				<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:8px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px">
					<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"thumbnail","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image size-thumbnail is-resized" style="border-radius:4px"><img src="" alt="Product 1" style="width:40px;height:40px;object-fit:contain"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"8px"}},"backgroundColor":"secondary","layout":{"type":"flex"}} -->
				<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:8px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px">
					<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"thumbnail","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image size-thumbnail is-resized" style="border-radius:4px"><img src="" alt="Product 2" style="width:40px;height:40px;object-fit:contain"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"8px","right":"8px"}},"border":{"radius":"8px"}},"backgroundColor":"secondary","layout":{"type":"flex"}} -->
				<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:8px;padding-top:8px;padding-right:8px;padding-bottom:8px;padding-left:8px">
					<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"thumbnail","style":{"border":{"radius":"4px"}}} -->
					<figure class="wp-block-image size-thumbnail is-resized" style="border-radius:4px"><img src="" alt="Product 3" style="width:40px;height:40px;object-fit:contain"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"24px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"28px","right":"28px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"body"} -->
				<div class="wp-block-button" style="font-size:14px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:24px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px">記事を読む →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
