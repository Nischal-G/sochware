<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'header/meta_inc.php' ?>
    <title>Welcome | Sochware</title>
    <?php include 'header/css_inc.php' ?>
  </head>
  <body>

    <?php 
      $this->load->view('home_page/_popupmodal.php');
      $this->load->view('inc_view/_navbar.php');
      $this->load->view('home_page/_homeslider.php');
      $this->load->view('home_page/_companyinfo.php');
      $this->load->view('home_page/_about.php');
      $this->load->view('home_page/_services.php');
      $this->load->view('home_page/_serviceprice.php');
      // $this->load->view('home_page/_gallery.php');
      $this->load->view('home_page/_status.php');
      // $this->load->view('home_page/_programs.php');
      // $this->load->view('home_page/_team.php');
      $this->load->view('home_page/_blog.php');
      $this->load->view('home_page/_partners.php');
      $this->load->view('home_page/_contact.php');      
      $this->load->view('inc_view/_footer.php');      
      $this->load->view('inc_view/_preloader.php');
      include 'header/js_inc.php';
    ?>
    
  </body>
</html>