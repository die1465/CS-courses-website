<?php 

  require('../config.php');
  //echo $_SERVER['REQUEST_URI'];
  
  
  
  
?>

<html>
  
  <?php require('../header.php'); ?>
  <style>
  .large-text{
    font-size: 30px !important;
  }
  .valign-wrapper {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
}
.iframe-container{
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; 
  height: 0;
}
.iframe-container iframe{
  position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
}
  </style>
  <?php foreach($content_calculus_chapter1 as $contents){ ?>
  <?php if($_GET['part'] == $contents['part']){ ?>
  
  <div class="row">
    <div class="container center col m7 offset-m3">
      <div class ="card black">
        <div class="card-content white-text large-text">
          <?php echo $contents['text']; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
    <div class="container col m6 offset-m3 ">
      <div class="center-align iframe-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/54_XRjHhZzI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
      </div>
    </div>
  </div>
    
    <ul class="collapsible popout">
    <li>
      <div class="collapsible-header">notes</div>
      <div class="collapsible-body">notes should go here in the form of a picture</div>
    </li>
    </ul>
    
  </div>
  <?php } ?>
  <?php } ?>
  
  <?php require('bottom_webdev.php') ?>
  <?php require('../footer.php'); ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  (function($){
  $(function(){

    $('.collapsible').collapsible();
    

  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>
</html>