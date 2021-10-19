<?php get_header();?>

<div class="banner">

    <img src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/banner.png" alt="">

    <h4><?php the_field('page_title'); ?></h4> 

    <h2><?php the_field('banner_text'); ?></h2>
    
    <p><?php the_field('banner_sub_text'); ?></p>

    <div class="buttons">
        <button class="playStoreBtn"> Playstore </button>  <button class="appStoreBtn">App Store</button>
    </div>

    <div class="phonesPic">
        <img id ="phoneLeft" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/left-phone-e1634607937787.png" alt="">
        <img id="phoneRight" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/right-phone.png" alt="">
        
    </div>

</div>

<div class="seperation">

    <hr>

    <h3>How the app works</h3>

</div>



<div class="container step step1">

  <div class="row">

    <div class="col">
        <img src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/step1-e1634611919496.png" alt="">
    </div>

    <div class="col">
        <h4>Create an account</h4>

        <h2>Create/login to an existing account to get started</h2>

        <p>An account is created with your email and a desired password</p>
    </div>
  </div>

</div>

<div class="container step step2">

    <img class="pic1 phoneScreen" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/step2-e1634613346229.png" alt="">


  <div class="row">

  <div class="col">
        <h4>Explore varieties</h4>

        <h2>Shop for your favorite meals while they are hot</h2>

        <p>Shop for your favorite meals or drinks and enjoy while doing it.</p>
    </div>

    <div class="col wideScreen">
        <img class="picRight" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/step2-e1634613346229.png" alt="">
    </div>

  </div>

</div>

<div class="container step step3">

  <div class="row">

    <div class="col">
        <img src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/step3.png" alt="">
    </div>

    <div class="col">
        <h4>Checkout</h4>

        <h2>When you are done check out and get it delivered</h2>

        <p>When you are done check out and get it delivered with ease.</p>
    </div>
  </div>

</div>

<div class="banner banner-bottom">

<img src="http://127.0.0.1/wordpress/wp-content/uploads/2021/10/bottom-banner.png" alt="">
    <h2>Download the app now.</h2>
    
    <p>Available on your faorite store. Start your premium experience now</p>

    <div class="buttons">
        <button class="playStoreBtn"> Playstore </button>  <button class="appStoreBtn2">App Store</button>
    </div>

</div>

<?php get_footer();?>