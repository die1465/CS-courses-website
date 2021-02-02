<?php 

  session_start();
  $_SESSION['lang'] = "english";
  // if(!isset($_SESSION['lang'])){
  //   $_SESSION['lang'] = "english";
  // }else if($_SESSION['lang'] != $_GET['lang'] && isset($_GET['lang']) && !empty($_GET['lang'])){
  //   if($_GET['lang'] == "english"){
  //     $_SESSION['lang'] = "english";
  //   }else if($_GET['lang'] == "عربي"){
  //     $_SESSION['lang'] = "عربي";
  //   }
  if($_GET['lang'] == "عربي"){
    $_SESSION['lang'] = "عربي";
  }
  
  //https://husnischool.die14651.repl.co
  require_once "languages/" . $_SESSION['lang']. ".php";
?>