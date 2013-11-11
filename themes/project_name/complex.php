<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <section class="inner content">
    <div class="full">
      <section>
        <?php 
          $a = new Area('Full Top'); $a->display($c); 
        ?>
      </section>
    </div>
    <div class="main left_sidebar">
      <section>
        <?php 
          $a = new Area('Main'); $a->display($c); 
        ?>
      </section>
    </div>
    <aside class="sidebar left_sidebar">
      <?php 
        $a = new Area('Left Sidebar'); $a->display($c); 
      ?>
    </aside>
  </section>
  <section class="inner content">
    <div class="main">
      <section>
        <?php 
          $a = new Area('Main Content'); $a->display($c); 
        ?>
      </section>
    </div>
    <aside class="sidebar">
      <?php 
        $a = new Area('Right Sidebar'); $a->display($c); 
      ?>
    </aside>
    <div class="full">
      <section>
        <?php 
          $a = new Area('Full Bottom'); $a->display($c); 
        ?>
      </section>
    </div>
  </section>

  <?php    $this->inc('elements/footer.php'); ?>