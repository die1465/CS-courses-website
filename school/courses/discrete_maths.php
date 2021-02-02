<?php 

  require('../config.php');
  //echo $_SERVER['REQUEST_URI'];
  $partnum = (int) $_GET['part'];
  $partnext = $partnum + 1;
  $partprev = $partnum - 1;

  
  
  
?>

<html style='background-image: url("../milky-way-2695569_1920.jpg")'>
  
  <?php require('../header.php'); ?>
  <style>
  .large-text{
    font-size: 30px !important;
  }
  .links{
    text-align: center;
    color: black;
  }
  </style>
  <div class="row">
   
  </div>
  <div class="row">
    <div class="col m6 offset-m3 card black">
  <?php foreach($content_discrete_maths as $dis){ ?>
  <?php if($_GET['part'] == $dis['id']){ ?>
  
      <div class="card-title white-text">
      <?php echo $dis['title']; ?>
       </div>
    

  
  </div>
  
</div>

  

  <ul class="collapsible">
    <li class="active" style="background-color: white;">
      <div class="collapsible-header light-blue lighten-3">explanation</div>
      <div class="collapsible-body black-text center "> 
      <div class="container" style="font-size: 20px;"><?php echo $dis['explanation'] ?></div>
      <?php echo $dis['pic1']; ?>
      
     
      
      <?php echo $dis['pic2']; ?>
      <?php echo $dis['pic3']; ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header light-green lighten-3">questions</div>
      <div class="collapsible-body light-blue lighten-3">questions will be here</div>
    </li>
  </ul>

 <?php } ?>
 
<?php } ?>
  


  <div class="row">
  <a href=<?php echo "?part=".$partprev ?> ><div class="col m1  btn offset-m1 red darken 4">previous</div></a>
    <a href=<?php echo "?part=".$partnext ?>><div class="col m1 offset-m8 btn ">next</div></a>
    
  </div>
  
 
  <?php require('discrete_bottom.php'); ?>
  <?php require('../footer.php'); ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  (function($){
  $(function(){

    $('.collapsible').collapsible();
    $('.carousel').carousel();

  }); // end of document ready
})(jQuery); // end of jQuery name space
</script>
</html>