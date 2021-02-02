<?php 

  require('../config.php');
  //echo $_SERVER['REQUEST_URI'];
  
  
  
  
?>

<html>
  <style>
  
    .col{
      padding: 5px !important;
      box-sizing: boarder-box !important;
    }
  </style>
  <?php require('../header.php'); ?>
  <ul class="collapsible">
  <li>
      <div class="collapsible-header">pre calculus(refresh memmory)</div>
      <div class="collapsible-body">
      <?php foreach($parts_pre_calculus as $pre){ ?>
        <a href=""><div><?php echo $pre['partnum']; ?></div></a>
      <?php } ?>
      </div>
    </li>
    <li>
      <div class="collapsible-header">chapter 1</div>
      <div class="collapsible-body">
      <div class="row">
      
      <?php foreach($parts_calculus_chapter1 as $part){ ?>
      
        <a href=<?php echo "calculus.php?part=".$part['id']; ?>>
        <div class="col m3 card black" >
          <div class="card-content white-text">
            <?php echo $part['partnum']; ?>
          </div>
        </div>
        
        </a>
      <?php } ?>
      </div>
      </div>
      
    </li>
    <li>
      <div class="collapsible-header">chapter 2</div>
      <div class="collapsible-body">wait a sec</div>
    </li>
    <li>
      <div class="collapsible-header">chapter 3</div>
      <div class="collapsible-body">wait a sec</div>
    </li>
    <li>
      <div class="collapsible-header">chapter 4</div>
      <div class="collapsible-body">wait a sec</div>
    </li>
    <li>
      <div class="collapsible-header">chapter 5</div>
      <div class="collapsible-body">wait a sec</div>
    </li>
  </ul>
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