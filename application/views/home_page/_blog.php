
<section id="blog" class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <h2 class="mb-4">Recent from blog</h2>
       <!--  <p>
          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
        </p> -->
      </div>
    </div>
    <div class="row d-flex">
      <?php foreach ($blog->result_array() as $bol): ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 blog-img" style="background-image: url('<?=base_url('lib/images/').$bol['blog_image']?>'); border-radius: 5px;">
            </a>
            <div class="text py-4 d-block bg-pad card-view">
              <div class="meta">
                <div><a href="#"><?=$bol['blog_date']?></a></div>
              </div>
              <h3 class="heading mt-2"><a href="#"><?=$bol['blog_title']?></a></h3>
              <p><?=$bol['blog_description']?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>