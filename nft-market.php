<?php
/**
 * Template Name: NFT market page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */
// 关联数组
$rows = $wpdb -> get_results('SELECT * FROM wp_virgocx_article', ARRAY_A);
get_header();
?>
<div class="nft-market-container">
	<div class="banner-container">
		<div class="content">
			<div class="title">
			VirgoCX NFT Market
			</div>
		</div>
	</div>

	<div class="search-header-container">
		<h3>Buy It Now</h3>
	</div>

	<ul class="search-list-container">
		<?php foreach ($rows as $row){ ?>
			<li>
				<img src="/wp-content/themes/virgocx-wordpress/img/app_buttons/android_hover.png" alt="">
				<div class="content">
					<p class="title"><?php echo $row["title"]; ?></p>
					<p class="desc"><?php echo $row["title"]; ?></p>
					<p class="value"><?php echo $row["blockchain_value"]; ?> <?php echo $row["blockchain"]; ?> ≈ <?php echo $row["target_blockchain_value"]; ?> <?php echo $row["target_blockchain"]; ?> </p>
				</div>
			</li>
		<?php } ?>
	</ul>

	<div class="catact-container">
		<p class="content">Can’t find what your are looking for?</p>
		<div class="contact-btn">Contact Us</div>
	</div>

	<div class="trending-container">
		<h3>Trending Collections</h3>
		
	</div>
</div>

<style type="text/css">
	.nft-market-container {
		background: #F5F5F5;
		overflow: hidden;
	}
	.banner-container {
		padding: 0 100px;
		height: 381px;
		display: flex;
		align-items: center;
		background: #05004D;
	}
	.banner-container .content {
		width: 655px;

	}
	.banner-container .title {
		font-style: normal;
		font-weight: bold;
		font-size: 48px;
		line-height: 58px;
		/* identical to box height */


		color: #FFFFFF;
	}
	.banner-container .title span {
		
		font-style: normal;
		font-weight: bold;
		font-size: 48px;
		line-height: 56px;
		/* or 117% */

		text-transform: uppercase;

		/* OTC Glold */

		color: #C7BA9A;
	}
	.banner-container .action {
		margin-top: 60px;
	}
	.banner-container .action .buy {
		width: 200px;
		height: 50px;
		background: #05004D;
		border-radius: 25px;

		
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 22px;
		/* identical to box height */

		text-align: center;

		/* FFFFFF */

		color: #FFFFFF;
	}
	.banner-container .action .sell {
		width: 200px;
		height: 50px;
		border: 2px solid #05004D;
		background-color: #fff;
		box-sizing: border-box;
		border-radius: 25px;
		margin-left: 44px;
		
		
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 22px;
		text-align: center;

		/* VirgoOTC Blue */

		color: #05004D;
	}

	.search-header-container {
	}

	.search-header-container h3 {
		
		font-style: normal;
		font-weight: bold;
		font-size: 36px;
		line-height: 50px;
		margin: 80px auto;
		/* or 139% */

		text-align: center;
		width: 100%;

		color: #1E1A5F;
	}
	.search-list-container {
		list-style: none;
		width: 1305px;
		margin: 20px auto;
		display: flex;
		flex-wrap: wrap;
	}
	.search-list-container li {
		width: 380px;
		height: 531px;
		margin: 20px;
		box-sizing: border-box;
		overflow: hidden;
		background: #FFFFFF;
		border-radius: 0px 0px 20px 20px;
	}
	.search-list-container li img {
		width: 380px;
		height: 380px;
		display: block;
	}
	.search-list-container li .content  .title {
		font-style: normal;
		font-weight: bold;
		font-size: 24px;
		margin-top: 18px;
		line-height: 29px;
		/* identical to box height */

		text-align: center;

		/* VirgoOTC Blue */

		color: #05004D;
	}
	.search-list-container li .content  .desc {
		font-style: normal;
		font-weight: normal;
		font-size: 16px;
		line-height: 19px;
		text-align: center;

		/* VirgoOTC Blue */

		color: #05004D;
	}
	.search-list-container li .content .value {
		font-style: normal;
		font-weight: bold;
		font-size: 18px;
		line-height: 22px;
		/* identical to box height */

		text-align: center;

		/* OTC Glold */

		color: #C7BA9A;
	}
	.catact-container {
		
	}
	.catact-container .content {
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		line-height: 29px;
		/* identical to box height */

		text-align: center;

		/* VirgoOTC Blue */

		color: #05004D;
	}
	.catact-container .contact-btn {
		font-style: normal;
		font-weight: 500;
		font-size: 18px;
		line-height: 22px;
		text-align: center;

		width: 200px;
		height: 50px;
		line-height: 46px;
		margin: 20px auto;

		/* VirgoOTC Blue */

		border: 2px solid #05004D;
		box-sizing: border-box;
		border-radius: 25px;

		/* VirgoOTC Blue */

		color: #05004D;

	}
</style>



<?php
  get_footer();