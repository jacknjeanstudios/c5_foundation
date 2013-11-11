<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <section class="inner content">
    <div class="main">
      <section>
        <?php 
          $a = new Area('Main'); $a->display($c); 
        ?>
      </section>
    </div>
    <aside class="sidebar">
      <?php 
        $a = new Area('Sidebar'); $a->display($c); 
      ?>
    </aside>
  </section>

<?php    $this->inc('elements/footer.php'); ?>