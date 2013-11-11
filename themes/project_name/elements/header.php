<?php 
  defined('C5_EXECUTE') or die(_("Access Denied.")); 
?>

<!--[if HTML5]><![endif]-->
<!doctype html>

<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<!--[if !HTML5]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet' href='<?=$this->getThemePath()?>/css/normalize.css'>
  <link rel='stylesheet' href='<?=$this->getThemePath()?>/style.css'>
  <link rel='stylesheet' href='<?=$this->getStyleSheet('typography.css')?>'>
  <script src='<?=$this->getThemePath()?>/js/vendor/custom.modernizr.js'></script>
  
  <?php Loader::element('header_required');?>
  
</head>

<body 
  <?php if ($c->isEditMode()) { ?>
  class="editmode" 
  <?php  } else { $u = new User(); if ($u->isLoggedIn()) { ?> 
    class="editbar" 
  <?php  }}?>
>
  <!--[if lt IE 8]>
    <p class="browsehappy">
      You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
<![endif]-->
  <header class="full-width container">
    
  </header>