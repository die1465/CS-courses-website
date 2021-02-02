 <?php 
  $courseslink = "courses/courses.php";
  $link = $_SERVER['REQUEST_URI'];
  $dirbefore = "";
  if($link == "/courses/courses.php"){
    $courseslink = " ";
  }else if($link != "/courses/courses.php"){
    $courseslink = "courses/courses.php";
  }else if($link == "/courses/webdev.php"){
    $courseslink = "/courses.php";
  }

  // if($link == "/courses/webdev.php"){
  //   $dirbefore = "../";
  // }else if($link != "/courses/webdev.php"){
  //   $dirbefore = "";
  // }
  
  // if($link == "/courses/"."indextochaptersclac.php"){
  //   $dirbefore = "../";
    
  // }else if($link != "/courses/"."indextochaptersclac.php"){
  //   $dirbefore = "";
  // }
    foreach($parts_calculus_chapter1 as $calc){
      if($link == "/courses/"."calculus.php"."?part=".$calc['id'] || $link == "/courses/"."indextochaptersclac.php" || $link == "/courses/"."algorithims.php" || $link == "/courses/"."indextodiscrete.php" || $link == "/courses/"."discrete_maths.php"."?part=".$calc['id']){
        $dirbefore = "../../";
        break;
        
      }else if($link != "/courses/"."calculus.php"."?part=".$calc['id'] || $link != "/courses/"."indextochaptersclac.php" || $link != "/courses/"."algorithims.php" || $link != "/courses/"."discrete_maths.php" || $link != "/courses/"."indextodiscrete.php" || $link != "/courses/"."discrete_maths.php"."?part=".$calc['id']){
        $dirbefore = "";
      }
    }
  
  
  
  
 ?>
 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <head>
    <title><?php echo $lang['title']; ?></title>
  </head>
  
  <body>
   <nav>
   
    <div class="nav-wrapper black center">
     <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <a href="../index.php" class="brand-logo white-text"><?php echo $lang['title']; ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="white-text" href=<?php echo $dirbefore.$courseslink ?>><?php echo $lang['courses']; ?></a></li>
        <li><div class="btn grey center ">
          <div class="white-text"><?php echo $lang['sign up']; ?></div>
        </div></li>
      </ul>

      
    </div>
  </nav>
  <ul class="sidenav" id="mobile">
      <li><a class="black-text" href=<?php echo $dirbefore."courses/courses.php" ?> ><?php echo $lang['courses']; ?></a></li>
        <li><div class="btn grey center ">
          <div class="white-text"><?php echo $lang['sign up']; ?></div>
        </div></li>
      </ul>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
  (function($){
  $(function(){

    $('.sidenav').sidenav();
    
  

  });
  
})(jQuery); // end of jQuery name space
</script>