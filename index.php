<?php

  require_once('header.php'); //manggil file header.php
  require_once('config/config.php');

  $page = (isset($_GET['page']))? $_GET['page'] : "main" ;

  switch($page){

    case 'caribarang':
    include "caribarang.php";
    break;

    case 'kontak':
    include "kontak.php";
    break;

    case 'about':
    include "about.php";
    break;

    case 'main' :
    default :
    include "menuutama.php";
    break;
  }
  
  require_once('footer.php');

?>
