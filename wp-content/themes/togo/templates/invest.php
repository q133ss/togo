<?php
/*
 * Template name: Инвесторам
 */

get_header();
?>
<section class="investor-main"> 
  <div class="investor-main__bg"><img src="<?php bloginfo('template_directory'); ?>/img/investor/main/banner.png" alt="img"></div>
  <div class="containers">
    <div class="investor-main__w"> 
      <div class="investor-main__t">СТАТЬ ИНВЕТОРОМ <br>TOGOBRANDS</div>
      <div class="investor-main__d">Инвестируйте в любой из наших брендов, <br>либо в сам монобренд Togo.</div>
      <div class="investor-main__a">А лучше и то и другое. Причем, лучше для Вас.</div><a class="investor-main__l" href="#"> 
        <p>Стать партнером Togobrands</p><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1 1H11V11" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
      <div class="investor-main__text">Оставьте заявку, мы свяжемся с Вами <br>и подробно расскажем об условиях и вашей выгоде.</div>
    </div>
  </div>
</section>
<section class="investor-description"> 
  <div class="containers">
    <div class="investor-description__w"> 
      <div class="investor-description__t"> 
        <div class="investor-description__t-d"> <img src="<?php bloginfo('template_directory'); ?>/svg/investor/decor__1.svg" alt="icons"></div>
        <div class="investor-description__t-title">ПРИХОДИТЕ НА ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ <span>TOGO</span></div>
        <div class="investor-description__t-text">Раз в месяц лидеры наших брендов рассказывают о результатах своего проекта и озвучивают план на следующий месяц.</div>
      </div>
      <ul class="investor-description__l"> 
        <li class="investor-description__l-i"> 
          <div class="investor-description__l-p"> <img src="<?php bloginfo('template_directory'); ?>/svg/investor/box__1.svg" alt="icons"></div>
          <div class="investor-description__l-t"> 
            <h5>Бренды</h5>
            <p>Вы услышите про успешные и неуспешные запуски, опыт и протестированные гипотезы. Узнаете как мы отбираем ниши и анализируем рынок</p>
          </div>
        </li>
        <li class="investor-description__l-i"> 
          <div class="investor-description__l-p"> <img src="<?php bloginfo('template_directory'); ?>/svg/investor/box__2.svg" alt="icons"></div>
          <div class="investor-description__l-t"> 
            <h5>Окружение</h5>
            <p>Как минимум Вы получите новые деловые связи предпринимателей, инветоров и топ-менеджеров</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="investor-portfolio"> 
  <div class="containers">
    <div class="investor-portfolio__w"> 
      <div class="investor-portfolio__t">ПОРТФЕЛЬ КОМПАНИЙ</div>
      <ul class="investor-portfolio__l">
        <?php
          $posts = get_posts( array(
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
            foreach( $posts as $post ){
            setup_postdata($post);
        ?>
        <a class="investor-portfolio__l-i" href="<?php the_permalink(); ?>"> 
          <div class="investor-portfolio__l-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
          <div class="investor-portfolio__l-t"><?php the_title(); ?></div>
          <div class="investor-portfolio__l-d"><?php echo get_field('short'); ?></div>
          <?php if( have_rows('revenue') ): 
              while( have_rows('revenue') ) : the_row();
          ?>
          <div class="investor-portfolio__l-b"> 
            <h5><?php echo get_sub_field('rev_title'); ?></h5>
            <p><?php echo get_sub_field('rev_rev'); ?></p>
          </div>
          <?php endwhile; endif; ?>
        </a>
        <?php
            }
            wp_reset_postdata(); // сброс
        ?>

      </ul>
      <div class="investor-portfolio__slider">
        <div class="swiper investorPortfolioSlider">
          <div class="swiper-wrapper">
            <?php
                foreach( $posts as $post ){
                setup_postdata($post);
            ?>
            <div class="swiper-slide">
              <a class="investor-portfolio__l-i" href="portfolios.html"> 
                <div class="investor-portfolio__l-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
                <div class="investor-portfolio__l-t"><?php the_title(); ?></div>
                <div class="investor-portfolio__l-d"><?php echo get_field('short'); ?></div>
                <?php if( have_rows('revenue') ): 
                    while( have_rows('revenue') ) : the_row();
                ?>
                <div class="investor-portfolio__l-b"> 
                  <h5><?php echo get_sub_field('rev_title'); ?></h5>
                  <p><?php echo get_sub_field('rev_rev'); ?></p>
                </div>
                <?php endwhile; endif; ?>
              </a>
            </div>
            <?php
                }
                wp_reset_postdata(); // сброс
            ?>
          </div>
        </div>
        <div class="swiper-controls">
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="investor-team"> 
  <div class="containers">
    <div class="investor-team__w"> 
      <div class="investor-team__t">НАШ СОВЕТ ДИРЕКТОРОВ И ADVISORY BOARD</div>
      <ul class="investor-team__l">
        <?php
        $posts = get_posts( array(
            'numberposts' => 0,
            'orderby'     => 'date',
            'order'       => 'ASC',
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'expert',
            'suppress_filters' => true,
        ) );
        ?>                    

        <?php
            foreach( $posts as $post ){
            setup_postdata($post);
        ?>
        <li class="investor-team__l-i">
          <div class="investor-team__l-p"> <img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
          <div class="investor-team__l-t"> 
            <h5><?php the_title(); ?></h5>
            <p><?php echo get_field('dolg'); ?></p>
          </div>
        </li>
        <?php
            }
            wp_reset_postdata(); // сброс
        ?>

      </ul>
      <div class="investor-team__slider">
        <div class="swiper investorTeamSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="investor-team__l-i">
                <div class="investor-team__l-p"> <img src="<?php bloginfo('template_directory'); ?>/img/investor/team/people__1.png" alt="img"></div>
                <div class="investor-team__l-t"> 
                  <h5>Филипцова Дарья</h5>
                  <p>HR-Business partne</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-controls">
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="investor-form">
  <div class="containers">
    <div class="investor-form__w">
      <div class="investor-form__i"> 
        <div class="investor-form__t">СТАТЬ ИНВЕСТОРОМ TOGOBRANDS</div>
        <div class="investor-form__e">
          <p>Почта для сотрудничества: </p><a href="mailto:togo@email.com">togo@email.com</a>
        </div>
        <div class="investor-form__a">
          <p>Адрес штаб-квартиры Togo: </p>
          <address>Москва, ул. Нижегородская, 29-33 стр. 5,<br> (БЦ Нижегородский)</address>
        </div>
      </div>
      <div class="form__b">
        <div class="form__b-n">
          <label class="form__b-name form__e" for="form__name">
            <input type="text" placeholder="ФИО" id="form__name">
          </label>
          <label class="form__b-phone" for="form__phone">
            <input type="text" placeholder="Телефон" id="form__phone">
          </label>
        </div>
        <label class="form__b-email" for="form__email">
          <input type="text" placeholder="Email" id="form__email">
        </label>
        <label class="form__b-message" for="form__message">
          <textarea placeholder="Сообщение" id="form__message"></textarea>
        </label>
        <button class="form__b-btn" type="submit">
          <p>Отправить для диалога по инвестированию</p><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1 1H11V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        </button>
        <div class="form__b-check">
          <input class="form__b-check__checkbox__input" type="checkbox" id="form__check" checked>
          <label class="form__b-check__checkbox__label" for="form__check"> 
            <p>Я даю своё согласие на обработку персональных данных и соглашаюсь с условиями и политикой конфиденциальности</p>
          </label>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>
