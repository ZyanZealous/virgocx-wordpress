<?php

/**
 * Template Name: NFT detail page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */
// 关联数组
$rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where id = 1', ARRAY_A);
$detail = $rows[0];
get_header();
?>
<div class="nft-detail-container">
  <div class="content-container">
    <img class="image" src="<?= get_template_directory_uri() ?><?php echo $detail["thumbnail"]; ?>" alt="">
    <div class="content">
      <p class="title"><?php echo $detail["title"]; ?></p>
      <p class="value"><?php echo $detail["blockchain_value"]; ?> <?php echo $detail["blockchain"]; ?> ≈
        <?php echo $detail["target_blockchain_value"]; ?> <?php echo $detail["target_blockchain"]; ?> </p>

      <div class="link">
        <a href="#">See Recent Trends </a>
        <a href="#">See Analytics</a>
      </div>
      <p class="desc"><?php echo $detail["description"]; ?></p>

      <div class="action">
        <button class="buy">Buy with VirgoCX</button>
        <button class="sell">View on Opensea</button>
      </div>
    </div>
  </div>
  <div class="table">
    <div class="header">Details</div>

    <div class="stats">Stats</div>
    <div class="stats-value"><?php echo $detail["stats"]; ?></div>
    <div class="stats">Contract Address</div>
    <div class="stats-value"><?php echo $detail["contract_address"]; ?></div>
    <div class="stats-wrap">
      <div class="stats">Token ID</div>
      <div class="stats-value"><?php echo $detail["token_id"]; ?></div>
      <div class="stats">Blockchain</div>
      <div class="stats-value"><?php echo $detail["blockchain_value"]; ?></div>
    </div>
  </div>
</div>

<style type="text/css">
.nft-detail-container {
  background: #fff;
  overflow: hidden;
}

.content-container {
  width: 1280px;
  display: flex;
  margin: 20px auto;
}

.nft-detail-container .content-container .image {
  width: 400px;
  height: 400px;
}

.nft-detail-container .content-container .content {
  height: 400px;
  margin-left: 70px;
}

.nft-detail-container .content-container .title {
  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 43px;
  text-align: left;

  /* VirgoOTC Blue */

  color: #05004D;
}

.nft-detail-container .content-container .value {
  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 43px;

  /* OTC Glold */

  color: #C7BA9A;
}

.nft-detail-container .content-container .desc {
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 25px;
  /* or 139% */


  /* VirgoOTC Blue */

  color: #05004D;
}

.nft-detail-container .content-container .action {
  margin-top: 60px;
}

.nft-detail-container .content-container .action .buy {
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

.nft-detail-container .content-container .action .sell {
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

.nft-detail-container .content-container .link {
  margin: 20px 0;
}

.nft-detail-container .content-container .link a {
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 22px;
  /* identical to box height */


  /* OTC Glold */

  color: #C7BA9A;
  margin-right: 50px;
  text-decoration: underline;
}

.table {
  border: 2px solid #F5F5F5;
  box-sizing: border-box;
  width: 1280px;
  border-radius: 10px;
  margin: 50px auto;
  overflow: hidden;
}

.table .header {
  background: #C7BA9A;
  height: 65px;
  font-weight: bold;
  font-size: 24px;
  line-height: 65px;
  padding-left: 33px;
  /* identical to box height */


  color: #000000;
}

.table .stats {
  background: #F5F5F5;
  height: 65px;
  line-height: 65px;
  font-size: 24px;
  font-weight: 500;

  color: #05004D;
  padding-left: 33px;
}

.table .stats-value {
  background: #fff;
  height: 65px;
  line-height: 65px;
  font-size: 18px;

  /* Light Text Color */

  color: #84839C;
  padding-left: 33px;
}
</style>



<?php
get_footer();