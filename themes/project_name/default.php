<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <section class="content-area">
    <div class="container">
      <section class="main">
        <?php 
          $a = new Area('Main'); $a->display($c); 
        ?>
      </section>
      <aside class="sidebar">
        <?php 
          $a = new Area('Sidebar'); $a->display($c); 
        ?>
      </aside>
    </div>
  </section>

  <?php    $this->inc('elements/footer.php'); ?>