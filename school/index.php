<?php 
  echo exec('whoami');
  require('config.php');
  
  $num = rand(1,150);
  $index = rand(1,10);
  
?>

<html>
<link rel="stylesheet" href="title.css" />
  <style>

  </style>
  
  <?php require('header.php'); ?>
  

  <div class="parallax-container parale">
    <div class="contain">
    <span class="text1" ><?php echo $lang['learn to code'] ?></span>
    <span class="text2" ><?php echo $lang['right way'] ?></span>
    <div class="btn " style="background-color: rgb(7, 173, 7);"><?php echo $lang['sign up'] ?></div>
    </div>
    <div class="parallax"><img src="milky-way-2695569_1920.jpg">
    
    </div>

  </div>

<div class="parallax-container">
  <div class="row">
    <div class="col s12 m6 center">
      <div class="carousel carousel-slider">
      <?php foreach($quotes as $quote) { ?>
        <div class="carousel-item" href="#">
        
          <div class="card red darken-4">
            <div class="card-content ">
              <div class="white-text"><?php echo $quote['text']; ?></div>
              <div class="divider black"></div>
              
              <div class"right-align">- <?php echo $quote['from']; ?></div>
              
            </div>
          </div>
        
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="container col m6 " style="margin-top: 5px !important" >
      <div class="iframe-container">
      <iframe width="520" height="295" src=<?php echo $lang['motivationlinks']. $num ?> frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
      </div>
    </div>
    
      
    
    
    
  </div>

  <div class="row center-algin">
    <div class="container col s12 m7 center-algin" style="margin-left:230px !important; margin-top:-80px !important;">
      <div class="card red darken-4 center-align">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $lang['card1_title'] ?></span>
          <div class="divider"></div>
          <p><?php echo $lang['card1_content'] ?></p>
        </div>
      </div>
    </div>
  
  </div>

  <div class="parallax"><img src="milky-way-2695569_1920.jpg">
    
    </div>

  </div>
  
















  <div class="container " >
  <footer class="page-footer black ">
  
    <div class="row ">
      <div class="col  m12">
        <h5 class="white-text center"><?php echo $lang['about me']; ?></h5>
        <p class="grey-text text-lighten-4 center"><?php echo $lang['description']; ?></p>
      </div>
      
      
    </div>
  
  
  
  </footer>
  
  </div>
  <?php require('footer.php'); ?>
  <script>
  (function($){
  $(function(){

    $('.carousel').carousel();
    $('.parallax').parallax();
    
    autoplay();
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 10000);
        instance.set($index);
    }

  });
  })(jQuery);
  </script>
</html>
    
