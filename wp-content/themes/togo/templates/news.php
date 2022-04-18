<?php
/*
 * Template name: Новости
 */

get_header();
?>
<section class="news-main"> 
  <div class="containers">
    <div class="news-main__w"> 
      <div class="news-main__t">НОВОСТИ</div>
        <?php
        global $post; // не обязательно

        // 5 записей из рубрики 9
        $myposts = get_posts( array(
          'posts_per_page' => 1
        ) );
        foreach( $myposts as $post ){
            setup_postdata( $post );
        ?>
      <a class="news-main__m" href="<?php the_permalink(); ?>"> 
        <div class="news-main__m-p"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
        <div class="news-main__m-block">
          <div class="news-main__m-t"><?php the_title(); ?></div>
          <div class="news-main__m-d"><?php the_excerpt(); ?></div>
          <div class="news-main__m-b">Подробнее  ›</div>
        </div>
      </a>
      <?php
        }
        wp_reset_postdata();
      ?>

      <div class="news-main__l">
        <?php
        $myposts = get_posts( array(
          'offset' => 1
        ) );
        foreach( $myposts as $post ){
            setup_postdata( $post );
        ?>
        <a class="news-main__l-i" href="<?php the_permalink(); ?>"> 
          <div class="news-main__l-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
          <div class="news-main__l-t"><?php the_title(); ?></div>
          <div class="news-main__l-d"><?php the_excerpt(); ?></div>
          <div class="news-main__l-b">Подробнее  ›</div>
        </a>
        <?php
          }
          wp_reset_postdata();
        ?>

      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>