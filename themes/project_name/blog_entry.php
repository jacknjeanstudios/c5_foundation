<?php    defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

  <section class="content-area">
    <div class="container">

      <?php 
      
      if ($c->isEditMode()) {
        print '<br><br>';
        $a = new Area('Thumbnail Image');
        $a->display($c);
      }
      ?>

      <section class="main">
        <h1>
          <?php  echo $c->getCollectionName(); ?>
        </h1>
        <?php 
          $vo = $c->getVersionObject();
          if (is_object($vo)) {
            $uID = $vo->getVersionAuthorUserID();
            $username = $vo->getVersionAuthorUserName();
          } 
          if (Config::get("ENABLE_USER_PROFILES")) {
            $profileLink= '<a href="' . $this->url('/profile/view/', $uID) . '">' . $username . '</a>';
          } else { 
            $profileLink = $username;
          } 
        ?>
        <p>
          <?php  echo t(
            /*i18n: %1$s is an author name, 2$s is an URL, %3$s is a date, %4$s is a time */
            'Posted by <span class="post-author">%1$s on <a href="%2$s">%4$s</a></span>',
            $profileLink,
            $c->getLinkToCollection,
            $c->getCollectionDatePublic(DATE_APP_GENERIC_T),
            $c->getCollectionDatePublic(DATE_APP_GENERIC_MDY_FULL)
          ); ?>
        </p>
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