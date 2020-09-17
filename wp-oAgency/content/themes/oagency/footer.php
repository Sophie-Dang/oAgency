</main>
  <!--/MAIN-->

  <!--FOOTER-->
  <footer class="footer">

    <!--Infos site-->
    <section id="footer-archive">

      <!--archives-->
      <?php dynamic_sidebar('footer-sidebar-1'); ?>
      <!--/archives-->
    </section>
    <!--/Infos site-->
    <?php if(get_theme_mod('oagency_footer_active')) : ?>
      <!--Copyright-->
      <section id="footer-end">
    
        <div class="footer-buttons">
          <a href="" class="footer-buttons__item">Contactez-nous</a>
          <a href="" class="footer-buttons__item">Sunlight</a>
        </div>

        <?php if(get_theme_mod('oagency_footer_copyright')) : ?>
        <?php $copyright = get_theme_mod('oagency_footer_copyright'); ?>
          <p class="footer-copyright align-right"><?= $copyright ?></p>
        <?php else : ?>
          <p class="footer-copyright">oAgency - 2017</p>
        <?php endif; ?>

      </section>
      <!--/Copyright-->
    <?php endif; ?>

  </footer>
  <!--FOOTER-->

  <?php wp_footer() ?>
</body>
</html>