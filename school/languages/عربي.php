<?php 

  $lang = [
    "title" => "مدرسة ",
    "courses" => "دورات",
    "sign up" => "تسجيل دخول",
    "copyright" => "© 2020 عبدالعزيز",
    "test" => " تجربة",
    "description" => "دورة ببلاش تعلمك البرمجة من الصفر",
    "card1_title" => "ماذا هو هاذا الموقع؟؟",
    "card1_content" => "هاذا الموقع سوف يزودك بدورات تساوي شهادة جامعية في علوم الحاسوب",
    "about me" => "عني",
    "motivationlinks" => "https://www.youtube.com/embed/videoseries?list=PLHzgOpuEPo6byXrY1gDtKdqxPpJmV7NFn&autoplay=1&index=",
    "learn to code" => "تعلم البرمجة",
    "right way" => "الطريقة الصحيحة",
  ];

  $jsondata = file_get_contents('quotes.json');
  $jsonData = trim($jsonData);
  $quotes = json_decode($jsondata, true);

  $courses = [
    ['title' => 'تطوير المواقع', 'description' => 'تعلم كيفية تطوير المواقع', 'link' => "webdev.php"],
    ['title' => 'الخوارزميات', 'description' => 'تعلم الخوارزميات', 'link' => "algorithims.php"],
    ['title' => 'اختبار', 'description' => 'هذا مجرد اختبار', 'link' => "justtesting.php"],
  ];

  $parts_webdev = [
    ['id'=> 1,'partnum' => "جزء 1", 'content' => 'هذا الجزء 1'],
    ['id'=> 2,'partnum' => "جزء  2", 'content' => 'هذا الجزء 2'],
    ['id'=> 3,'partnum' => "جزء  3", 'content' => 'هذا الجزء 3']
  ];
  $content_webdev = [
    ['part' => 1, 'text' => 'هذا هو مطمون جزء 1'],
    ['part' => 2, 'text' => 'هذا هو مطمون جزء 2'],
    ['part' => 3, 'text' => 'هذا هو مطمون جزء 3'],
  ];
?>