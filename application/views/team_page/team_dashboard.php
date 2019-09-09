<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'header/meta_inc.php' ?>
    <title>Welcome | Sochware</title>
    <?php include 'header/css_inc.php' ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="<?=base_url('lib/css/mainteam.css')?>">
<style type="text/css">

  .site-social-links{
    margin: 6px 10px;
  }
    .site-social-links .link-fb:hover {
    background-color: #3b5998;
  }
  .site-social-links .link-fb:hover:before {
    height: 0;
    width: 0;
    border-bottom: 37px solid #3b5998;
    border-left: 15px solid transparent;
  }
  .site-social-links .link-fb:hover:after {
    height: 0;
    width: 0;
    border-top: 37px solid #3b5998;
    border-right: 15px solid transparent;
  }
  .site-social-links .link-li:hover {
    background-color: #007bb6;
  }
  .site-social-links .link-li:hover:before {
    height: 0;
    width: 0;
    border-bottom: 37px solid #007bb6;
    border-left: 15px solid transparent;
  }
  .site-social-links .link-li:hover:after {
    height: 0;
    width: 0;
    border-top: 37px solid #007bb6;
    border-right: 15px solid transparent;
  }
  .site-social-links .link-tw:hover {
    background-color: #00aced;
  }
  .site-social-links .link-tw:hover:before {
    height: 0;
    width: 0;
    border-bottom: 37px solid #00aced;
    border-left: 15px solid transparent;
  }
  .site-social-links .link-tw:hover:after {
    height: 0;
    width: 0;
    border-top: 37px solid #00aced;
    border-right: 15px solid transparent;
  }
  .site-social-links .link-vim:hover {
    background-color: #aad450;
  }
  .site-social-links .link-vim:hover:before {
    height: 0;
    width: 0;
    border-bottom: 37px solid #aad450;
    border-left: 15px solid transparent;
  }
  .site-social-links .link-vim:hover:after {
    height: 0;
    width: 0;
    border-top: 37px solid #aad450;
    border-right: 15px solid transparent;
  }
  .site-social-links .link-yt:hover {
    background-color: #bb0000;
  }
  .site-social-links .link-yt:hover:before {
    height: 0;
    width: 0;
    border-bottom: 37px solid #bb0000;
    border-left: 15px solid transparent;
  }
  .site-social-links .link-yt:hover:after {
    height: 0;
    width: 0;
    border-top: 37px solid #bb0000;
    border-right: 15px solid transparent;
  }
  .site-social-links a {
    background-color: #aad450;
    color: #fff;
    display: inline-block;
    font-size: 15px;
    padding: 5px 13px;
    position: relative;
    transition: all .3s ease-in-out;
  }

  .site-social-links a:before {
    bottom: 0;
    left: -15px;
    height: 0;
    width: 0;
    border-bottom: 37px solid #aad450;
    border-left: 15px solid transparent;
  }
  .site-social-links a:after {
    right: -15px;
    top: 0;
    height: 0;
    width: 0;
    border-top: 37px solid #aad450;
    border-right: 15px solid transparent;
  }
  .site-social-links a:before, .site-social-links a:after {
    content: "";
    position: absolute;
    height: 100%;
    transition: all .3s ease-in-out;
    width: 15px;
    z-index: 0;
  }
  .site-social-links a + a {
    margin-left: 20px;
  }
  .site-social-links a .fa {
    position: relative;
    z-index: 1;
  }

</style>
  </head>
  <body>

    <?php
      $this->load->view('inc_view/_navbar.php');
      $this->load->view('team_page/team_body.php');
      $this->load->view('inc_view/_footer.php');      
      $this->load->view('inc_view/_preloader.php');
      include 'header/js_inc.php';
    ?><!-- 
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script> -->

    <script src="<?=base_url('lib/js/mainteam.js')?>"></script>
    
  </body>
</html>