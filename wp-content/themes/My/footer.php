<div id="footer">
      <div class="block1">
        <div class="logo">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="" />
          <div class="logo__text">
            <p>Группа компаний</p>
            <h1>Каре ЭЛЕКТРО</h1>
          </div>
        </div>
        <?php wp_nav_menu( [
          'theme_location'  => 'bottom',
          'menu'            => '', 
          'container'       => 'nav', 
        ] );
      ?>
        <div class="CallBtn">заказать звонок</div>
      </div>

      <p class="footer_p">Политика конфиденциальности</p>
    </div>
    <?php wp_footer(  );?>
  </body>
</html>
