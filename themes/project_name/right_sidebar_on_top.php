<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <section class="content-area">
    <div class="container">
      <aside class="sidebar sidebar_top">
        <?php 
          $a = new Area('Sidebar'); $a->display($c); 
        ?>
      </aside>
      <section class="main sidebar_top">
        <?php 
          $a = new Area('Main'); $a->display($c); 
        ?>
      </section>
    </div>
  </section>

  <?php    $this->inc('elements/footer.php'); ?>