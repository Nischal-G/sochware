
<section class="ftco-services ser-pad" id="services">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-2">At Your Service</h2>
      </div>
    </div>
      <div class="row">
        <?php foreach ($service->result_array() as $ser): ?>
          <div class="col-md-3 ftco-animate service mt-2" onclick="location.href='<?=base_url('Service')?>'">
            <div class="media d-block text-center block-6 services">
              <div class="d-flex justify-content-center align-items-center mb-1" style="padding-top: 15px;">
                <img height="110" src="<?=base_url('lib/images/').$ser['service_image']?>">
              </div>
              <div class="media-body">
                <h3 class="heading"><?=$ser['service_title']?></h3>
                <p><?=$ser['service_description']?></p>
              </div>
            </div>      
          </div>
        <?php endforeach ?>
      </div>
    </div>
	</div>
</section>