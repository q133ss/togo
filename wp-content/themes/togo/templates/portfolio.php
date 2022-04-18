<?php
/*
 * Template name: Портфель
 */

get_header();
?>
<section class="portfolio-main"> 
  <div class="portfolio-main__bg"><img src="<?php bloginfo('template_directory'); ?>/img/portfolio/main/banner.png" alt="img"></div>
  <div class="containers">
    <div class="portfolio-main__w"> 
      <div class="portfolio-main__t">ПОРТФЕЛЬ БРЕНДОВ</div>
    </div>
  </div>
</section>
<section class="portfolio-table"> 
  <div class="containers">
    <div class="portfolio-table__w"> 
      <div class="portfolio-table__tb">
        <ul class="portfolio-table__n">
          <li class="portfolio-table__n-i"> 
            <p>Год</p>
          </li>
          <li class="portfolio-table__n-i"> 
            <p>В портфеле ГК  Like</p>
          </li>
          <li class="portfolio-table__n-i"> 
            <p>Общий оборот</p>
          </li>
          <li class="portfolio-table__n-i"> 
            <p>Наши компании присуствуют</p>
          </li>
        </ul>
        <div class="portfolio-table__t"> 
          <?php
          $posts = get_posts( array(
              'numberposts' => 0,
              'orderby'     => 'date',
              'order'       => 'ASC',
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'portfel',
              'suppress_filters' => true,
          ) );
          ?>
          <?php
          foreach( $posts as $post ){
            setup_postdata($post);
          ?>
          <ul class="portfolio-table__l"> 
            <li class="portfolio-table__l-i"> 
              <p><?php echo get_field('year'); ?></p>
            </li>
            <li class="portfolio-table__l-i"> 
              <p><?php echo get_field('in_portfel'); ?></p>
               <?php if(get_field('arrow') != 'Убрать'):?>
              <img src="<?php bloginfo('template_directory'); ?><?php if(get_field('arrow') == 'Вниз'){?>/svg/index/portfolio/arrow-down.svg <?php }else{ ?> /svg/index/portfolio/arrow-up.svg <?php } ?>" alt="icons">
               <?php endif; ?>
            </li>
            <li class="portfolio-table__l-i"> 
              <p><?php echo get_field('turnover'); ?></p>
            </li>
            <li class="portfolio-table__l-i"> 
              <p><?php echo get_field('present'); ?></p>
              <?php if(get_field('arrow_company') != 'Убрать'):?>
              <img src="<?php bloginfo('template_directory'); ?><?php if(get_field('arrow_company') == 'Вниз'){?>/svg/index/portfolio/arrow-down.svg <?php }else{ ?> /svg/index/portfolio/arrow-up.svg <?php } ?>" alt="icons">
              <?php endif; ?>
            </li>
          </ul>
          <?php
          }

          wp_reset_postdata(); // сброс
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="portfolio-list"> 
  <div class="containers">
    <div class="portfolio-list__w">
      <div class="portfolio-list__t">Топ портфельных компаний</div>
      <div class="portfolio-list__l">
        <?php
          $company = get_posts( array(
              'numberposts' => 0,
              'orderby'     => 'date',
              'order'       => 'ASC',
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'company',
              'suppress_filters' => true,
          ) );
          ?>
          <?php
              foreach( $company as $post ){
              setup_postdata($post);
          ?>
        <a class="portfolio-list__l-i" href="<?php the_permalink(); ?>">
          <div class="portfolio-list__l-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
          <div class="portfolio-list__l-t"><?php the_title(); ?></div>
          <div class="portfolio-list__l-d"><?php echo get_field('short'); ?></div>
          <?php if( have_rows('revenue') ): 
              while( have_rows('revenue') ) : the_row();
          ?>
          <div class="portfolio-list__l-l"> 
            <h5><?php echo get_sub_field('rev_title'); ?></h5>
            <p><?php echo get_sub_field('rev_rev'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </a>
        <?php
            }
            wp_reset_postdata(); // сброс
        ?>

        </div>
      <div class="portfolio-list__slider">
        <div class="swiper portfolioSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
            <div class="swiper-slide"><a class="portfolio-list__l-i" href="portfolios.html">
                <div class="portfolio-list__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/index/team/people__4.png" alt="img"></div>
                <div class="portfolio-list__l-t">LEVITA</div>
                <div class="portfolio-list__l-d">Сеть студий балета и растяжки</div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div>
                <div class="portfolio-list__l-l"> 
                  <h5>Выручка за 2021:</h5>
                  <p>430 678 336 руб</p>
                </div></a></div>
          </div>
        </div>
        <div class="swiper-controls">
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <ul class="portfolio-list__b">
        <li class="portfolio-list__b-i">
          <div class="portfolio-list__b-p"> <img src="<?php bloginfo('template_directory'); ?>/svg/portfolio/button__1.svg" alt="icons"></div>
          <div class="portfolio-list__b-t"> 
            <div class="portfolio-list__b-title">Стать партнером togobrands</div>
            <div class="portfolio-list__b-w"> <a class="portfolio-list__b-link" href="<?php echo get_page_link(16); ?>">
                <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolio/arrow__link.svg" alt="icons"></a><a class="portfolio-list__b-link" href="<?php echo get_page_link(16); ?>">
                <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolio/arrow__link.svg" alt="icons"></a></div>
          </div>
        </li>
        <li class="portfolio-list__b-i">
          <div class="portfolio-list__b-p"> <img src="<?php bloginfo('template_directory'); ?>/svg/portfolio/button__2.svg" alt="icons"></div>
          <div class="portfolio-list__b-t"> 
            <div class="portfolio-list__b-title">Стать инвестором togobrands</div>
            <div class="portfolio-list__b-w"> <a class="portfolio-list__b-link" href="<?php echo get_page_link(18); ?>">
                <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolio/arrow__link.svg" alt="icons"></a><a class="portfolio-list__b-link" href="<?php echo get_page_link(18); ?>">
                <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolio/arrow__link.svg" alt="icons"></a></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<?php
get_footer();
?>
