
<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(lib/images/img1.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
   <div class="container">
      <div class="row justify-content-center">
    	<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-1"></div>
		          <?php foreach ($achievements->result_array() as $ach): ?>
		          
			           <div class="col-md-2 col-lg-2 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18 text-center">
			              <div class="text">
			              	<div class="icon"><span class="<?=$ach['achievement_iconclass']?>"></span></div>
			              	<strong class="number" data-number="<?=$ach['achievement_number']?>">0</strong>
			              	<span><?=$ach['achievement_title']?></span>
			              </div>
			            </div>
			          </div>
		          	 
		          <?php endforeach ?>
	          	<div class="col-md-1"></div>
	        </div>
	    </div>
      </div>
   </div>
</section>