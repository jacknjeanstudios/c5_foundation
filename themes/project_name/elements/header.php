<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html>

<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->

<head>

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
  <header class="full-width container">
    
  </header>