<?php
/**
 * Title: Blog Section
 * Slug: komeko-kitchen/blog
 * Categories: komeko-kitchen
 * Description: ブログセクション - 最新の投稿3件
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"120px","right":"120px"},"blockGap":"60px"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:80px;padding-right:120px;padding-bottom:80px;padding-left:120px">

	<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","fontStyle":"normal","fontWeight":"500","letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontFamily":"body"} -->
		<p class="has-text-align-center has-primary-color has-text-color has-body-font-family" style="font-size:11px;font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">BLOG</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","fontFamily":"heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-heading-font-family">最新の投稿</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"textColor":"text-muted","fontFamily":"body"} -->
		<p class="has-text-align-center has-text-muted-color has-text-color has-body-font-family" style="font-size:14px">レシピのコツやキッチンツールの紹介など、料理に役立つ情報をお届けします。</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"border":{"radius":"20px","width":"1px","color":"var(--wp--preset--color--secondary)"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:20px">

				<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
				<!-- /wp:post-featured-image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"28px","right":"28px"},"blockGap":"12px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group" style="padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px">

					<!-- wp:post-date {"style":{"typography":{"fontSize":"12px"}},"textColor":"text-muted","fontFamily":"body"} /-->

					<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"18px","letterSpacing":"-0.3px"}},"fontFamily":"heading"} /-->

					<!-- wp:post-excerpt {"moreText":"","excerptLength":40,"style":{"typography":{"fontSize":"13px","lineHeight":"1.6"}},"textColor":"text-muted","fontFamily":"body"} /-->

					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontFamily":"body"} -->
					<p class="has-primary-color has-text-color has-body-font-family" style="font-size:13px;font-style:normal;font-weight:500">続きを読む →</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"white","textColor":"foreground","style":{"border":{"radius":"24px","width":"1px","color":"var(--wp--preset--color--secondary)"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"body"} -->
		<div class="wp-block-button" style="font-size:14px;font-style:normal;font-weight:500"><a class="wp-block-button__link has-foreground-color has-white-background-color has-text-color has-background wp-element-button" href="/blog" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:24px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px">すべての記事を見る →</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
