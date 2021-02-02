
<ul class="collapsible">
    <li class="">
      <div class="collapsible-header white-text black" style="border-color:black !important;">index</div>
      <div class="collapsible-body">
  <div class="row">
    <div class="col m12 grey">
   
    
    
      <?php foreach($content_discrete_maths as $part){ ?>
      
        <a href=<?php echo "?part=".$part['id'] ?>>
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