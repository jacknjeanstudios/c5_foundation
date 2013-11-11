<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <div class="pearl_overlay">&nbsp;</div>
  <section class="inner content">
    <aside class="sidebar">
      <?php 
        $a = new Area('Sidebar'); $a->display($c); 
      ?>
    </aside>
    <div class="main">
      <section>
        <?php 
          $a = new Area('Main'); $a->display($c); 
        ?>
      </section>
    </div>
  </section>

  <?php    $this->inc('elements/footer.php'); ?>