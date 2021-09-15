<?php

/**
 * Template Name: NFT home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

$rows = $wpdb->get_results('SELECT * FROM wp_virgocx_article where show_home = 1', ARRAY_A);
get_header();
?>
<div class="nft-home-container">
  <div class="banner-container">
    <div class="content">
      <div class="title">
        <span>FIND</span>, <span>TRADE</span>, and <span>COLLECT</span> valuable NFTs with our Brokerage Service.
      </div>
      <div class="action">
        <button class="buy">Buy an NFT</button>
        <button class="sell">Sell your NFT</button>
      </div>
    </div>
  </div>

  <div class="slider-container">
    <h3>Trending on VirgoCX</h3>

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

    <div class="action">
      <button class="view-more">View More</button>
    </div>
  </div>

  <div class="middle-block">
    <div class="left">
      The VirgoCX NFT Brokerage helps our clients <span>find and trade high value art pieces & collectables.</span>
    </div>
    <div class="right">
      <span>We navigate the markets to find rare and upcoming NFTs. Our insider reports provides actionable insights for
        our clients to make purchasing decisions. </span>
    </div>
  </div>


  <section class="how-area">
    <h2 data-translate="OTC_direct_how">How It Works?</h2>

    <div class="tabs">
      <nav class="tab-switch row">
        <a class="selected" data-translate="OTC_direct_how1">Buying an NFT</a>
        <a data-translate="OTC_chat_how2">Selling your NFT </a>
      </nav>
      <div class="how-container">
        <div class="row custom-container">
          <div class="icon-box">
          </div>
          <div class="num-box">
            <p>1.</p>
            <p>2.</p>
            <p>3.</p>
            <p>4.</p>
          </div>
          <div class="content-box">
            <p>We will alert you of potential mints for new NFTs or existing notable NFTs through our exclusive “Virgo
              Choice” newsletter or our VirgoCX NFT Inventory.</p>
            <p>Load your VirgoCX account with the funds required to purchase the NFT.</p>
            <p>Contact our account managers to book your trade and allow us to begin the sourcing process.</p>
            <p>We deduct the balance from your account and send the NFT to your Wallet after the transaction has been
              completed. </p>
          </div>
        </div>
      </div>
      <div class="how-container" style="display: none;">
        <div class="row custom-container">
          <div class="icon-box">
          </div>
          <div class="num-box">
            <p>1.</p>
            <p>2.</p>
            <p>3.</p>
            <p>4.</p>
            <p>5.</p>
          </div>
          <div class="content-box" style="height: 468px">
            <p>Contact one of our account managers after Onboarding with VirgoCX.</p>
            <p>Our curator will examine the NFT to determine eligibility and value.</p>
            <p>Once determined, our account manager will provide you with an offer.</p>
            <p>Upon approval of the offer, we will take custody of your NFT. </p>
            <p>Funds will be sent depending on your preferred currency. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="getstart-btn">Get Started</div>
  </section>


  <section class="faq" aria-label="Question Accordions">
    <div class="custom-container">
      <h2 data-translate="OTC_chat_faq">Frequently Asked Questions </h2>
      <div class="panel-group" id="faq" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse0"
                aria-expanded="true" aria-controls="collapse0">
                <span data-translate="OTC_chat_faq1">What are NFTs (Non Fungible Tokens)</span>

                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body px-3 mb-4">
              <p data-translate="OTC_chat_faq1_1">A non-fungible token is a unit of data stored on a digital ledger,
                called a blockchain, that certifies a digital asset to be unique and therefore not interchangeable. NFTs
                can be used to represent items such as photos, videos, audio, and other types of digital files. People
                collect these tokens as a way to have a 1 of 1 digital good.
              </p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse1"
                aria-expanded="true" aria-controls="collapse1">
                <span data-translate="OTC_chat_faq2">How do I buy the NFT and where do I store it?</span>

                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />

              </div>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body px-3 mb-4">
              <p data-translate="OTC_chat_faq2_1">Once you have purchased an NFT from our Brokerage Service, you will be
                able to receive it directly to your Web3 enabled wallet (Metamask, Walletconnect, Trust Wallet, etc) or
                you can have it stored to your associated VirgoCX account.</p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse2"
                aria-expanded="true" aria-controls="collapse2">
                <span data-translate="OTC_chat_faq3">Can I sell an NFT that I bought?</span>
                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body px-3 mb-4">
              <p data-translate="OTC_chat_faq3_1">Whether it was an NFT you bought from our NFT Brokerage Service or
                whether you had minted and purchased it yourself -- our NFT Brokerage will be able to match your NFT
                with a potential buyer. Click here to learn more.</p>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse3"
                aria-expanded="true" aria-controls="collapse3">
                <span data-translate="OTC_chat_faq4">How do I get started?</span>

                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body px-3 mb-4">
              <p data-translate="OTC_chat_faq4_1">Currently, our service is only available to existing OTC &
                Institutional Clients for high value NFT pieces. If you would like to register, click here to get
                started. </p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading p-3 mb-3" role="tab" id="heading4">
            <h3 class="panel-title">
              <div class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#faq" href="#collapse4"
                aria-expanded="true" aria-controls="collapse4">
                <span data-translate="OTC_chat_faq5">Why would i buy from you and not on OpenSea?</span>
                <img src="<?= get_template_directory_uri() ?>/img/arrowdd.svg" alt="images not found" />
              </div>
            </h3>
          </div>
          <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
            <div class="panel-body px-3 mb-4">
              <p data-translate="OTC_chat_faq5_1">We save fees, we find good quality items for you, analytics, as well
                as consultancy for it.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="background-img">
      <img src="<?= get_template_directory_uri() ?>/img/bg3.svg" alt="images not found">
      <img class="mobile" src="<?= get_template_directory_uri() ?>/img/bg3_mobile.svg" alt="images not found">
    </div>
  </section>


  <section class="signup-area">
    <div class="background-img">
      <img src="<?= get_template_directory_uri() ?>/img/Sign Up Today/Background 2.svg" alt="images not found">
      <img src="<?= get_template_directory_uri() ?>/img/Sign Up Today/Background 1.svg" alt="images not found">
    </div>
    <div class="container custom-container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-12">
          <div class="">
            <h2 data-translate="OTC_Signup">Sign Up Today</h2>
          </div>
          <div class="how-content">
            <div class="how-item">
              <?= do_shortcode('[contact-form-7 id="70" title="OTC-signup"]') ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<style type="text/css">
.nft-home-container {}

.banner-container {
  padding: 0 100px;
  height: 600px;
  display: flex;
  align-items: center;
}

.banner-container .content {
  width: 655px;

}

.banner-container .title {


  font-style: normal;
  font-weight: bold;
  font-size: 48px;
  line-height: 56px;
  /* or 117% */

  color: #05004D;
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

.middle-block {
  width: 100%;
  background: #05004D;
  height: 338px;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.middle-block .left {

  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 43px;
  width: 600px;

  /* FFFFFF */

  color: #FFFFFF;
}

.middle-block .left span {
  /* OTC Glold */

  color: #C7BA9A;
}

.middle-block .right {
  border: 2px solid #C7BA9A;
  box-sizing: border-box;
  border-radius: 10px;
  padding: 20px 10px 36px;
  width: 475px;


  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 25px;
  /* or 156% */

  text-align: right;

  /* FFFFFF */

  color: #FFFFFF;
}

.works-container {}

.works-container h3 {

  font-style: normal;
  font-weight: bold;
  font-size: 36px;
  line-height: 50px;
  /* or 139% */

  text-align: center;
  width: 100%;
  margin: 80px auto;

  color: #1E1A5F;
}


/*tabs*/
.tabs {
  display: block;
  display: -webkit-flex;
  display: -moz-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0;
  overflow: hidden;
}

.tabs [class^="tab"] label,
.tabs [class*=" tab"] label {
  color: #05004D;
  cursor: pointer;
  display: block;
  font-size: 1.5em;
  font-weight: 300;
  line-height: 1em;
  text-align: center;
}

.tabs [class^="tab"] [type="radio"],
.tabs [class*=" tab"] [type="radio"] {
  border-bottom: 1px solid rgba(239, 237, 239, 0.5);
  cursor: pointer;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  display: block;
  width: 100%;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.tabs [class^="tab"] [type="radio"]:hover,
.tabs [class^="tab"] [type="radio"]:focus,
.tabs [class*=" tab"] [type="radio"]:hover,
.tabs [class*=" tab"] [type="radio"]:focus {
  border-bottom: 1px solid #c7ba9a;
}

.tabs [class^="tab"] [type="radio"]:checked,
.tabs [class*=" tab"] [type="radio"]:checked {
  border-bottom: 3px solid #c7ba9a;
}

.tabs [class^="tab"] [type="radio"]:checked+div,
.tabs [class*=" tab"] [type="radio"]:checked+div {
  opacity: 1;
}

.tabs [class^="tab"] [type="radio"]+div,
.tabs [class*=" tab"] [type="radio"]+div {
  display: block;
  opacity: 0;
  padding: 2rem 0;
  width: 90%;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

.tabs .tab-2 {
  width: 50%;
}

.tabs .tab-2 [type="radio"]+div {
  width: 200%;
  margin-left: 200%;
}

.tabs .tab-2 [type="radio"]:checked+div {
  margin-left: 0;
}

.tabs .tab-2:last-child [type="radio"]+div {
  margin-left: 100%;
}

.tabs .tab-2:last-child [type="radio"]:checked+div {
  margin-left: -100%;
}

.tab-switch {
  display: none;
}

.tab-switch a {
  color: #84839c;
  padding: 5px 50px;
}

.tab-switch a:first-child {
  margin-right: 100px;
}

.tab-switch a:hover,
.tab-switch a.selected {
  color: #05004D;
  border-bottom: 3px solid #c7ba9a;
  cursor: pointer;
  font-family: "Matter-Bold" !important;
}

.how-area .getstart-btn {
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

@media screen and (min-width: 900px) {
  .how-container {
    width: 100%;
  }

  .why-container {
    padding: 30px 30px 0 30px;
  }

  .tab-switch {
    display: flex;
    margin: 0 auto;
    justify-content: space-around;
    text-align: center;
    font-size: 24px;
    border-bottom: 1px solid #c7ba9a;
  }

  .custom-container .img-container img {
    width: 100%;
    max-width: 100vw;
    position: absolute;
  }


  .trapezoid {
    height: 587px;
  }
}

.faq .background-img .mobile {
  display: block;
  width: 100%;
  padding-top: 20px;
}

.faq .background-img img {
  display: none;
  width: 100%;
  padding-top: 100px;
  /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
}

.why-area h2,
.faq h2 {
  text-align: center;
  font-size: 36px;
  font-weight: bold;
  color: #05004d;
  padding-bottom: 50px;
}


.how-area h2 {
  text-align: center;
  font-size: 36px;
  font-weight: bold;
  color: #05004d;
  padding-bottom: 0px;
}

.faq {
  background-color: #F8F8F8;
  padding: 50px 0 0px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: bottom;
}

@media screen and (min-width: 900px) {
  .faq {
    padding: 200px 0 0px 0;
  }

  .how-area h2,
  .why-area h2,
  .faq h2 {
    padding-bottom: 100px;
  }

  .faq .background-img img {
    display: block;
    /*background-image: url(/wp-content/themes/virgocx/img/bg3.svg);*/
  }

  .faq .background-img .mobile {
    display: none;
  }

  .why-area h2,
  .faq h2 {
    text-align: center;
    font-size: 36px;
    font-weight: bold;
    color: #05004d;
    padding-bottom: 100px;
  }
}

.how-area {
  padding-bottom: 0;
  margin: 50px auto;
}

.how-area h2 {

  padding-bottom: 0;
}

.how-area .row {
  display: flex;
  justify-content: space-around;
  margin-top: 50px;
}

.how-container .row {
  display: flex;
  justify-content: flex-start;
  margin-top: 80px;
}

.how-area .num-box {
  /* OTC Glold */
  border: 2px solid #C7BA9A;
  box-sizing: border-box;
  border-radius: 30px;
  width: 68px;
  height: fit-content;
  box-sizing: border-box;
  padding: 20px 0;
  margin-left: 200px;
}

.how-area .num-box p {
  font-weight: bold;
  font-size: 36px;
  /* line-height: 43px; */
  height: 60px;
  text-align: center;

  /* OTC Glold */

  color: #C7BA9A;
}

.how-area .content-box {
  width: 719px;
  margin-left: 25px;
  padding: 20px 0;
}

.how-area .content-box p {
  height: 60px;
  margin-bottom: 16px;
  display: flex;
  align-items: center;
}


.signup-area h2 {
  text-align: center;
  font-size: 36px;
  color: white;
}

.signup-area .round-btn {
  margin: auto;
}

.faq .panel-default>.panel-heading {
  border-bottom: 1px solid black;
  padding: 0;
}

.faq .panel-default .panel-title div {
  display: block;
  font-size: 18px;
  font-weight: bold;
  color: #05004d;
}

.faq .panel-default .panel-title img {
  color: #05004d;
  float: right;
  width: 20px;
}

.faq .panel-default .panel-body {
  font-size: 16px;
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

<script type="text/javascript">
(function($) {

  $('.tabs nav a').on('click', function() {
    const children = this.parentElement.querySelectorAll('a');
    children.forEach((element, index) => {
      $(element).removeClass('selected')
      $($('.how-container')[index]).css('display', 'none')
    });
    $(this).addClass('selected')
    $($('.how-container')[$(this).index()]).css('display', 'block')


  });

  // faq triangle toggle
  $('.panel-title').click(function() {
    $(this).children().children().toggleClass('flipped')
  });
})(jQuery);



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