<?php
/**
 * Title: Amazon Affiliate Card
 * Slug: komeko-kitchen/amazon-card
 * Categories: komeko-kitchen
 * Description: Amazonアフィリエイト商品カード - ブログ記事内に挿入して使用
 * Keywords: amazon, affiliate, product
 */
?>
<!-- wp:group {"className":"mariko-amazon-card","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"16px","width":"1px","color":"var(--wp--preset--color--secondary)"}},"backgroundColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group mariko-amazon-card has-border-color has-white-background-color has-background" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:16px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">

	<!-- wp:image {"width":"120px","height":"120px","sizeSlug":"thumbnail","style":{"border":{"radius":"12px"}}} -->
	<figure class="wp-block-image size-thumbnail is-resized" style="border-radius:12px"><img src="" alt="商品画像" style="width:120px;height:120px;object-fit:contain"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"body"} -->
		<p class="has-body-font-family" style="font-size:14px;font-style:normal;font-weight:500">商品名をここに入力</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","lineHeight":"1.5"}},"textColor":"text-muted","fontFamily":"body"} -->
		<p class="has-text-muted-color has-text-color has-body-font-family" style="font-size:13px;line-height:1.5">商品の説明文をここに入力してください。</p>
		<!-- /wp:paragraph -->
		<!-- wp:html -->
		<a href="#" class="mariko-amazon-btn" target="_blank" rel="nofollow noopener">Amazonで見る</a>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
