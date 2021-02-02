<?php 

  $lang = [
    "title" => "school",
    "courses" => "courses",
    "sign up" => "sign up",
    "copyright" => "© 2020 abdelaziz",
    "test" => " testing",
    "description" => "a complete computer science degree for free!!!",
    "card1_title" => "what is this website??",
    "card1_content" => "this website will provide courses for abolute beginners that will be equivilant to a computer science degree",
    "about me" => "about me",
    "motivationlinks" => "https://www.youtube.com/embed/videoseries?list=PLstHkpcp5Zh1KBtzkQ8AHzaTpJXO53AIj&autoplay=1&index=",
    "learn to code" => "learn to code",
    "right way" => "the right way",

  ];
  if(strpos( $_SERVER['REQUEST_URI'], "index.php") ||empty($_SERVER['REQUEST_URI'])){
  $jsondata = file_get_contents('quotes.json');
  
  }elseif (!strpos( $_SERVER['REQUEST_URI'], "index.php")){
    $jsondata = file_get_contents('../quotes.json');
  
  }
  $quotes = json_decode($jsondata, true);
  $courses = [
    ['title' => 'calculus', 'description' => 'learning how to create websites', 'link' => "indextochaptersclac.php"],
    ['title' => 'discrete math', 'description' => 'learning how to think logically of things', 'link' => "indextodiscrete.php"],
    //['title' => 'computing essentials', 'description' => 'learning the basics of everything that has got to do with cs', 'link' => "#"],
    ['title' => 'c++', 'description' => 'learning the basics of a computer language called c++', 'link' => ""],
    
    ['title' => 'data structures', 'description' => 'learning algorithims', 'link' => "algorithims.php"],
    ['title' => 'web development 1', 'description' => 'learning how to create the looks of websites', 'link' => "#"],
    ['title' => 'web development 2', 'description' => 'learning the server side of websites', 'link' => "#"],
    ['title' => 'basics of networking', 'description' => 'learn the basics of networking to get started in cyber security', 'link' => "#"],
  ];
  $parts_pre_calculus= [
    ['id'=> 0,'partnum' => " part 1"],
    ['id'=> 0,'partnum' => " part 2"],
  ];
  $parts_calculus_chapter1 = [
    ['id'=> 1,'partnum' => "1.1: an introduction to limits part 1"],
    ['id'=> 2,'partnum' => "1.1: an introduction to limits part 2(area problem)"],
    ['id'=> 3,'partnum' => "1.1: an introduction to limits part 3(ex's of limits)"],
    ['id'=> 4,'partnum' => "1.1: an introduction to limits part 4(f(x) as it approches infinity"],
    ['id'=> 5,'partnum' => "1.2: computing limits (basics) "],
    ['id'=> 6,'partnum' => "1.2: computing limits 6(examples)"],
    ['id'=> 7,'partnum' => "1.2: computing limits 7(piece-wise limits)"],
    ['id'=> 8,'partnum' => "1.2: computing limits 8(limits of trig functions)"],
    ['id'=> 9,'partnum' => "1.2: computing limits 9(ex's of trig functions)"],
    ['id'=> 10,'partnum' => "1.4: continuity of functions 10"],
    ['id'=> 11,'partnum' => "1.4: continuity of functions 11(ex's of continuity)"],
    ['id'=> 12,'partnum' => "1.4: continuity of functions 12(properties)"],
    ['id'=> 13,'partnum' => "1.4: continuity of functions 13(ex's of properties)"],
    ['id'=> 14,'partnum' => "1.4: continuity of functions 14(compositions + ex's)"],
  ];
  $content_calculus_chapter1 = [
    ['part' => 1, 'text' => '1.1: an introduction to limits'],
    ['part' => 2, 'text' => '1.1: an introduction to limits (area problem)'],
    ['part' => 3, 'text' => "1.1: an introduction to limits (ex's of limits)"],
    ['part' => 4, 'text' => "1.1: an introduction to limits (f(x) as it approches infinity"],
    ['part' => 5, 'text' => "1.2: computing limits (basics)"],
    ['part' => 6, 'text' => "1.2: computing limits (examples)"],
    ['part' => 7, 'text' => "1.2: computing limits (piece-wise limits)"],
    ['part' => 8, 'text' => "1.2: computing limits (limits of trig functions)"],
    ['part' => 9, 'text' => "1.2: computing limits (ex's of trig functions)"],
    ['part' => 10, 'text' => "1.4: continuity of functions "],
    ['part' => 11, 'text' => "1.4: continuity of functions (ex's of continuity)"],
    ['part' => 12, 'text' => "1.4: continuity of functions (properties)"],
    ['part' => 13, 'text' => "1.4: continuity of functions (ex's of properties)"],
    ['part' => 14, 'text' => "1.4: continuity of functions (compositions + ex's)"],
  ];
  $content_discrete_maths= [
    ['id'=> "1", 'title'=> "introduction to propositions", "pic1" => '<img src="../pictures/part1_pic1.jpeg" alt="img" > ', "pic2" => '<img src="../pictures/part1_pic2.jpeg" alt="img" >'],
     
    ['id'=> "2", 'title'=> "propostions: logical operators (negation)", "pic1" => '<img src="../pictures/negation_pic1.jpeg" alt="img" >', "pic2" => ' ', 'explanation' => "A negation is a refusal or denial or refutation of something. for example, if my friend told me that I have a test tomorrow, and i say I don't have a test tomorrow. then is called a negation"],
    ['id'=> "3", 'title'=> "propostions: logical operators (conjunction)", "pic1" => '<img src="../pictures/conjunction_pic1.jpeg" alt="img">', "pic2" => '<img src="../pictures/conjunction_pic2.jpeg" alt="img" >', 'link' => "https://www.youtube.com/embed/ViNm4LBqzZA" , 'source' => "", 'explanation' => "conjunction basically means to add two or more atomic propositions together to form a compound proposition"],
    ['id'=> "4", 'title'=> "propostions: logical operators (disjunction)", "pic1" => '<img src="../pictures/disjunction_pic1.jpeg" alt="img" > ', "pic2" => '<img src="../pictures/disjunction_pic2.jpeg" alt="img" > ', 'explanation' => "disjunction is an OR connector, it seperates two or more atomic propositions, there are 2 types of OR's, the inclusive or which allows for all statement to be true and exclusive or which requires for only 1 statement to be true while all others are false"],
    ['id'=> "5", 'title'=> "propostions: logical operators (implication)", "pic1" => '<img src="../pictures/implication_pic1.jpeg" alt="img" > ', "pic2" => '<img src="../pictures/implication_pic2.jpeg" alt="img" > ', 'explanation' => "implication is an indication done by a statment to refer to another statement and to indicate it's truth value. for example, if sheeps fly, then I am a billionare. this is an implication."],
    ['id'=> "6", 'title'=> "propostions: logical operators (biconditionals)", "pic1" => '<img src="../pictures/biconditional_pic1.jpeg" alt="img" > ', "pic2" => '<img src="../pictures/biconditional_pic2.jpeg" alt="img" > ','explanation' =>"biconditionals are two statements that share the same truth value and it would be false otherwise. for example, the sky is blue if and only if flowers are red."],
    ['id'=> "7", 'title'=> "propostions: logical operators (order of operations)", "pic1" => '<img src="../pictures/logicalorders_pic1.jpeg" alt="img" > ', "pic2" => '','explanation' => "these are the order in which you should solve propositional problems with." ],
    ['id'=> "8", 'title'=> "propostions: propositional logic (logical equivalence)", "pic1" => '<img src="../pictures/logicaleq_pic1.jpeg" alt="img" > ', "pic2" => '<img src="../pictures/logicaleq_pic2.jpeg" alt="img" > ', 'explanation' => ""],
    ['id'=> "9", 'title'=> "propostions: propositional logic (using logical equivalence rules)", "pic1" => '<img src="../pictures/logicrules.jpeg" alt="img" > ', "pic2" => '<img src="../pictures/logicrules_pic2.jpeg" alt="img" > ', "pic3" => '<img src="../pictures/logicrules_pic3.jpeg" alt="img" > ', 'explanation' => "think of these like the simple math rules that you would use in solving polynomial problems, like FOIL."],
  ];
?>