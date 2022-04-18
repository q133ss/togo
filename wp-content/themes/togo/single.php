<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package togo
 */

get_header();
?>

<section class="detail-main"> 
  <div class="containers">
    <div class="detail-main__w"> 
      <div class="detail-main__t"><?php the_title(); ?></div><a class="detail-main__m" href="#"> 
        <div class="detail-main__m-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
        <div class="detail-main__m-block">
          <div class="detail-main__m-t">
          	<?php the_content(); ?>
          </div>
        </div></a>
      <div class="detail-main__l">

      	<?php
      	$main_post_id = get_the_id();
      	global $post;

		$related_tax = 'category';
		 
		// получаем ID всех элементов (категорий, меток или таксономий), к которым принадлежит текущий пост
		$cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );
		// массив параметров для WP_Query
		$args = array(
			'posts_per_page' => 3,
			'post__not_in' => [$main_post_id],
			'tax_query' => array(
				array(
					'taxonomy' => $related_tax,
					'field' => 'id',
					'include_children' => false, // нужно ли включать посты дочерних рубрик
					'terms' => $cats_tags_or_taxes,
					'operator' => 'IN' // если пост принадлежит хотя бы одной рубрике текущего поста, он будет отображаться в похожих записях, укажите значение AND и тогда похожие посты будут только те, которые принадлежат каждой рубрике текущего поста
				)
			)
		);
		$post_query = new WP_Query( $args );

		if( $post_query->have_posts() ) :
			while( $post_query->have_posts() ) : $post_query->the_post();
      	?>
      	
      	<a class="detail-main__l-i" href="<?php the_permalink(); ?>"> 
          <div class="detail-main__l-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
          <div class="detail-main__l-t"><?php the_title(); ?></div>
          <div class="detail-main__l-d"><?php the_excerpt(); ?></div>
          <div class="detail-main__l-b">Подробнее  ›</div>
      	</a>

      	<?php
	      	endwhile;
		endif;
		wp_reset_postdata();
      	?>

      </div>
    </div>
  </div>
</section>

<?php
get_footer();
