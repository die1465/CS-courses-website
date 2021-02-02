<style>
.slider {
  width: 200px;
  height: 150px;
  display: flex;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  
}
.slide {
  width: 200px;
  flex-shrink: 0;
  height: 100%;
  
  scroll-behavior: smooth;
}
</style>
<ul class="collapsible">
    <li>
      <div class="collapsible-header">index</div>
      <div class="collapsible-body">
  <div class="row">
    <div class="col m12 grey">
   
    
    
      <?php foreach($parts_calculus_chapter1 as $part){ ?>
      
        <a href=<?php echo "?part=".$part['id'] ?>>
        <div class="col m12 black-text section ">
          
          <?php echo $part['partnum'] ?>
          
        </div> 
        </a>
        <div class="divider"></div>
      
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