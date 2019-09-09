
<section class="home-slider owl-carousel img" style=" background-image: url(<?=base_url('lib/images/bg_1.jpg');?>);" id="slider-sec">
<!--   <div class="slider-item" style="height: 450px">
  	<div class="overlay"></div>
    <div class="container-fluid" style="padding: 0 !important; margin:0 !important;">
      <div class="row slider-text align-items-center" style="    height: 450px;padding: 0 !important; margin:0 !important;" data-scrollax-parent="true">

        <div class="col-md-6 col-sm-12 ftco-animate">
        	<span class="subheading">Dream it</span>
          <p class="mb-4 mb-md-5">Sochware, native engineers working for Indigenous problems. We create hardware solutions, for locally existing glitches, and help develop Technical Nepal.</p>
          <p><a href="#" class="btn btn-primary p-2 px-xl-3 py-xl-2">Know more</a> <a href="#" class="btn btn-white btn-outline-white p-2 px-xl-3 py-xl-2">Explore</a></p>
        </div>
        <div class="col-md-6 ftco-animate" style="padding: 0 !important; margin:0 !important";>
        	<img src="<?=base_url('lib/images/img1.jpg')?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div> -->

<!--   <div class="slider-item">
  	<div class="overlay"></div>
    <div class="container-fluid">
      <div class="row slider-text align-items-center" style="padding: 0; margin:0;" data-scrollax-parent="true">

        <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
        	<span class="subheading">Built it</span>
          <p class="mb-4 mb-md-5">Sochware, native engineers working for Indigenous problems. We create hardware solutions, for locally existing glitches, and help develop Technical Nepal.</p>
          <p><a href="#" class="btn btn-primary p-2 px-xl-3 py-xl-2">Know more</a> <a href="#" class="btn btn-white btn-outline-white p-2 px-xl-3 py-xl-2">Explore</a></p>
        </div>
        <div class="col-md-6 ftco-animate">
        	<img src="<?=base_url('lib/images/slider1.jpg')?>" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </div>
-->
  <?php foreach ($slider->result_array() as $slid): ?>
    <div class="slider-item" style="background-image: url(<?=base_url('lib/images/').$slid['homeslider_image']?>);">
    	<div class="overlay"></div>
      <div class="container-fluid">
        <div class="row slider-text align-items-center" style="padding: 0; margin:0;" data-scrollax-parent="true">
          <div class="col-md-1"></div>
          <div class="col-md-5 col-sm-12 text ftco-animate" style="text-align: left;">
          	<span class="subheading"><?=$slid['homeslider_title']?></span>
            <p class="mb-4 mb-md-5"><?=$slid['homeslider_description']?></p>
            <p><a href="#" class="btn btn-primary p-2 px-xl-3 py-xl-2"><?=$slid['homeslider_btn1']?></a> <a href="#" class="btn btn-white btn-outline-white p-2 px-xl-3 py-xl-2"><?=$slid['homeslider_btn2']?></a></p>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

<!--   <div class="slider-item" style="background-image: url(<?=base_url('lib/images/slider1.jpg')?>);">
    <div class="overlay"></div>
    <div class="container-fluid">
      <div class="row slider-text align-items-center" style="padding: 0; margin:0;" data-scrollax-parent="true">
        <div class="col-md-1"></div>
        <div class="col-md-5 col-sm-12 text ftco-animate" style="text-align: left;">
          <span class="subheading">Live it</span>
          <p class="mb-4 mb-md-5">Sochware, native engineers working for Indigenous problems. We create hardware solutions, for locally existing glitches, and help develop Technical Nepal.</p>
          <p><a href="#" class="btn btn-primary p-2 px-xl-3 py-xl-2">know more</a> <a href="#" class="btn btn-white btn-outline-white p-2 px-xl-3 py-xl-2">Explore</a></p>
        </div>
      </div>
    </div>
  </div> -->

</section>
