<!-- 404.php-->


<?php get_header(); ?>

<div id="container">
  <div id="contents">
    <section>
      <p>404 Not Found</p>
      <p><a href="<?php bloginfo('url'); ?>/" title="トップページへ戻る">トップページへ戻る</a></p>
      <?php get_search_form(); ?>
    </section>
  </div>
  <!-- /#contents -->
  
  <?php get_sidebar(); ?>
  <!-- /#sidebar --> 
  
</div>
<!-- /#container -->

<?php get_footer(); ?>
