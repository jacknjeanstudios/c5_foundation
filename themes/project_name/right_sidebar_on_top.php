<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <section class="inner content">
    <aside class="sidebar sidebar_top">
      <?php 
        $a = new Area('Sidebar'); $a->display($c); 
      ?>
    </aside>
    <div class="main sidebar_top">
      <section>
        <?php 
          $a = new Area('Main'); $a->display($c); 
        ?>
      </section>
    </div>
  </section>

  <?php    $this->inc('elements/footer.php'); ?>