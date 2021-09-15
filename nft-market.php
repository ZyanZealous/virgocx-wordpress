<?php

/**
 * Template Name: NFT market page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */
// 关联数组
$rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article', ARRAY_A);
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
    <?php foreach ($rows as $row) { ?>
    <li>
      <img src="<?= get_template_directory_uri() ?><?php echo $row["thumbnail"]; ?>" alt="">
      <div class="content">
        <p class="title"><?php echo $row["title"]; ?></p>
        <p class="desc"><?php echo $row["title"]; ?></p>
        <p class="value"><?php echo $row["blockchain_value"]; ?> <?php echo $row["blockchain"]; ?> ≈
          <?php echo $row["target_blockchain_value"]; ?> <?php echo $row["target_blockchain"]; ?> </p>
      </div>
    </li>
    <?php } ?>
  </ul>

  <div class="catact-container">
    <p class="content">Can’t find what your are looking for?</p>
    <div class="contact-btn">Contact Us</div>
  </div>

  <div class="slider-container">
    <h3>Trending Collections</h3>

    <section class="carousel-area">
      <div class="container custom-container">
        <div class="tabs-horizontal">
          <div class="row carousel-background">
            <div class="container">
              <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage">
                    <?php foreach ($rows as $row) { ?>
                    <div class="owl-item ">


                      <a class="pg-top">

                        <img src="<?= get_template_directory_uri() ?>/img/nft-card-demo.jpg" alt="">
                        <div class="content">
                          <p class="title"><?php echo $row["title"]; ?></p>
                          <p class="desc"><?php echo $row["title"]; ?></p>
                          <p class="value"><?php echo $row["blockchain_value"]; ?> <?php echo $row["blockchain"]; ?> ≈
                            <?php echo $row["target_blockchain_value"]; ?> <?php echo $row["target_blockchain"]; ?> </p>
                        </div>
                      </a>
                    </div>

                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

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

.search-header-container {}

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

.search-list-container li .content .title {
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

.search-list-container li .content .desc {
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

.catact-container {}

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


.slider-container {}

.slider-container .container {
  max-width: calc(428px * 3);
}

.slider-container h3 {

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

.slider-container .owl-item a {
  display: block;
}

.slider-container .owl-item {
  width: 380px;
  height: 531px;
  /* margin: 20px; */
  box-sizing: border-box;
  overflow: hidden;
  background: #FFFFFF;
  border-radius: 0px 0px 20px 20px;
}

.slider-container .owl-item a img {
  width: 380px;
  height: 380px;
  display: block;
}

.slider-container .owl-item a .content .title {
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

.slider-container .owl-item a .content .desc {
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 19px;
  text-align: center;

  /* VirgoOTC Blue */

  color: #05004D;
}

.slider-container .owl-item .content .value {
  font-style: normal;
  font-weight: bold;
  font-size: 18px;
  line-height: 22px;
  /* identical to box height */

  text-align: center;

  /* OTC Glold */

  color: #C7BA9A;
}

.owl-stage {

  height: 600px;
  overflow: hidden;
}

.action {
  width: 100%;
  text-align: center;
}

.view-more {

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
<script>
(function($) {
  $(document).ready(function() {
    $('[data-toggle="popover"]').popover()
    var owl = $('.owl-carousel');
    if (screen.width > 900) {
      owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1500,
        pagination: true,
        dots: false,
        autoplayHoverPause: true
      });
    } else {
      owl.owlCarousel({
        items: 2,
        loop: true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1500,
        pagination: false,
        dots: false,
        autoplayHoverPause: true
      });
    }


    $('.tabs-vertical nav a').on('click', function() {
      show_container_vertical($(this).index());
    });

    show_container_vertical(0);

    function show_container_vertical(index) {
      // Make the container visible
      $('.tabs-vertical .container.visible').removeClass('visible');
      $('.tabs-vertical .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

      // Set the tab to selected
      $('.tabs-vertical nav a.selected').removeClass('selected');
      $('.tabs-vertical nav .tab-dot.selected').removeClass('selected');
      $('.tabs-vertical nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
      $('.tabs-vertical nav .tab-dot:nth-of-type(' + (index + 1) + ')').addClass('selected');
    }

    $('.tabs-horizontal nav a').on('click', function() {
      show_container('.tabs-horizontal', $(this).index());
    });
    $('.product-tabs-horizontal nav a').on('click', function() {
      show_container('.product-tabs-horizontal', $(this).index());
    });

    $('.tabs nav a').on('click', function() {
      scroll_to_container($(this).index());
    });

    function scroll_to_container(index) {
      // Make the container visible
      console.log(index);
      console.log('.tabs .custom-container:nth-of-type(' + (index + 1) + ')');
      $('html, body').animate({
        scrollTop: $('.tabs .custom-container:nth-of-type(' + (index + 1) + ')').offset().top
      }, 800);
    }

    show_container('.tabs-horizontal', 0);
    show_container('.product-tabs-horizontal', 0);

    function show_container(name, index) {
      // Make the container visible
      $(name + ' .container.visible').removeClass('visible');
      $(name + ' .container:nth-of-type(' + (index + 1) + ')').addClass('visible');

      // Set the tab to selected
      $(name + ' nav a.selected').removeClass('selected');
      $(name + ' nav a:nth-of-type(' + (index + 1) + ')').addClass('selected');
    }
  });


})(jQuery);
</script>


<?php
get_footer();