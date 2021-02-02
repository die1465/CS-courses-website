<?php 

  require('../config.php');

  
?>
<style>
html{
  background: url("../secret-3120483_1920.jpg") no-repeat center fixed; 
  background-size: cover;
}
</style>
<html >


  <?php $courseslink = " " ?>
  <?php require('../header.php'); ?>
  <div class="row center-align">
  <?php foreach($courses as $course) { ?>
    <a href=<?php echo $course['link'] ?>>
    <div class="col s12 m5 small center-algin">
    
      
      <div class="card red darken-4 ">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $course['title'] ?></span>
          <div class="divider"></div>
          <p><?php echo $course['description'] ?></p>
        </div>
      </div>
    
      
    </div>
    </a>
    <?php } ?>
  </div>
  
  
  <?php require('../footer.php'); ?>

</html>