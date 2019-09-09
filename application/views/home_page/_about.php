
<section class="ftco-about d-md-flex"  id="about">
  <?php foreach ($about->result_array() as $abt): ?>
  	<div class="one-half img" style="background-image: url(<?=base_url('lib/images/').$abt['about_image']?>);"></div>
  	<div class="one-half ftco-animate">
      <div class="heading-section ftco-animate ">
        <h2 class="mb-4"><?=$abt['about_title']?></h2>
      </div>
      <div style="text-align: justify;">
  			<p> <?=$abt['about_description']?></p>
  		</div>
  	</div>
  <?php endforeach ?>    
</section>