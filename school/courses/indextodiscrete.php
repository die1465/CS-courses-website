<?php 

  require('../config.php');
  //echo $_SERVER['REQUEST_URI'];
  
  
  
  
?>
<style>
html{
  background: url("../secret-3120483_1920.jpg") no-repeat center fixed; 
  background-size: cover;
}
</style>
<html>
<?php require('../header.php'); ?>
<ul class="collapsible" style="color: black; border-color: green; boarder-bottom-color: green;">
    <li >
      <div class="collapsible-header green lighten-2" >chapter 1</div>
      <div class="collapsible-body" style="width=100px !important;">
  <div class="row" style="width=100px !important;">
    <div class="col m12 grey" style="width=100px !important;">
   
    
    
      <?php foreach($content_discrete_maths as $part){ ?>
      
        <a href=<?php echo "discrete_maths.php?part=".$part['id'] ?>>
        <div class="col m12 black-text ">
          
          <?php echo $part['title'] ?>
          
        </div> 
        </a>
      
      <?php } ?>
      
    </div>
</div>
</ul>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  (function($){
  $(function(){

    $('.collapsible').collapsible();
    

  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>

<div class="footer-copyright grey center" style="position: fixed; bottom: 0px; width: 100%">
  <div class="container white-text">
  <?php echo $lang['copyright']; ?>
  
  </div>
  <div class="container white-text">
  <a href="../index.php?lang=english" class="white-text">english</a> | <a href="../index.php?lang=عربي" class="white-text">عربي</a>
  
  </div>
</div>
      

  </body>
</html>