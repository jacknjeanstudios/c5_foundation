<?php   
  defined('C5_EXECUTE') or die("Access Denied."); 
?>

<footer>
  <section class="full-width container">
    <div class="footer-col">
      <?php 
          $a = new GlobalArea('Footer Left'); $a->display(); 
      ?>
    </div>
    <div class="footer-col">
      <?php 
          $a = new GlobalArea('Footer Middle'); $a->display(); 
      ?>
    </div>
    <div class="footer-col">
      <?php 
          $a = new GlobalArea('Footer Right'); $a->display(); 
      ?>
    </div>
  </section>
  <section class="full-width container">
    <div class="footer-sub-col">
      <small>
        Copyright &copy; <?php echo t(date('Y'))?> <a href="<?php    echo DIR_REL?>/"><?php echo t(SITE)?></a>. &nbsp;All rights reserved.
      </small>
    </div>
    <div class="footer-sub-col">
      <small>Website by: <a href="http://justrjlewis.com">Soror RJ Lewis</a></small>
    </div>
    <div class="footer-sub-col">
      <small>
        Powered by <a href="http://www.concrete5.org/r/-/106697" title="<?php echo t('Powered by Concrete5 open source content management system')?>" alt="<?php echo t('concrete5 content management system')?>"> <?php echo t('Concrete5 CMS')?></a>
      </small>
    </div>
    <div class="footer-sub-col">
      <small>
        <?php 
          $u = new User();
          if ($u->isRegistered()) { 
        ?>
          <span class="sign-in">
            <?php echo t('Welcome <b>%s</b>!', $u->getUserName())?> 
            <a href="<?php echo $this->url('/login', 'logout')?>">
              <?php echo t('Sign Out')?>
            </a>
          </span>
        <?php  } else { ?>
            <span class="sign-in">
              <a href="<?php echo $this->url('/login')?>">
                <?php echo t('Sign in to edit.')?>
              </a>
            </span>
        <?php  } ?>
      </small>
    </div>
  </section>
</footer>

<?php 
  $u = new User(); 
  if ($u->isLoggedIn()) {
?>
<script src="<?=$this->getThemePath()?>/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
<?php  } ?>

<?php     Loader::element('footer_required'); ?>
</body>
</html>