<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
    <li class="name">Top Bar Title</li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!--Nav Section can add more than one and set left, or right-->
    <?php 
      $a = new GlobalArea('Header Nav'); 
      $a->display(); 
    ?>
  </section>
</nav>