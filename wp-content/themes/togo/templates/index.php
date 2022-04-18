<?php
/*
 * Template name: Главная
 */

get_header();
?>
    <section class="ind-main">
        <div class="ind-main__bg"><img src="<?php bloginfo('template_directory'); ?>/img/index/main/bg.png" alt="img"></div>
        <div class="containers">
            <div class="ind-main__info">
                <div class="ind-main__info-t">
                    <p>
                        НАША ЦЕЛЬ - <br><span>ВЕЛИКИЕ БРЕНДЫ</span><br>СДЕЛАН В РОССИИ</p>
                </div>
                <div class="ind-main__info-d">
                    <p>
                        Мы создаем, покупаем и развиваем бренды на маркетплейсах, с помощью нашей системы, технологий и опытной команды талантливых людей.<br><br>В данных реалиях нашей страны мы просто обязаны сотворить новую историю в нашей экономике.</p>
                </div>
                <div class="ind-main__info-btns"> <a class="ind-main__info-p" href="#">
                        <p>Войти в портфель Togobrands</p><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 1H11V11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a><a class="ind-main__info-i" href="<?php echo get_page_link(18); ?>">
                        <p>Стать инвестором Togobrands</p><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 11L11 1" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1 1H11V11" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg></a></div>
            </div>
            <div class="ind-main__video"><video autoplay muted loop id='vid'>
                    <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4" />
                </video>
                <div class="ind-main__video-play"><img src="<?php bloginfo('template_directory'); ?>/svg/index/play.svg" alt="icons"></div>
            </div>
            <div class="ind-main__decor">
                <div class="ind-main__decor-i"><img src="<?php bloginfo('template_directory'); ?>/svg/index/main/decor__1.svg" alt="icons"></div>
                <div class="ind-main__decor-i"><img src="<?php bloginfo('template_directory'); ?>/svg/index/main/decor__2.svg" alt="icons"></div>
                <div class="ind-main__decor-i"><img src="<?php bloginfo('template_directory'); ?>/svg/index/main/decor__3.svg" alt="icons"></div>
            </div>
        </div>
    </section>
    <section class="ind-description">
        <div class="containers">
            <div class="ind-description__start">
                <div class="ind-description__start-d"><img src="<?php bloginfo('template_directory'); ?>/svg/index/description/decor__1.svg" alt="icons"></div>
                <div class="ind-description__start-t">
                    <p>
                        КАЖДЫЙ  <span>КРУПНЫЙ </span>БРЕНД НАЧИНАЛСЯ КАК МИКРОБРЕНД</p>
                </div><a class="ind-description__start-b" href="<?php echo get_page_link(9); ?>">
                    <p>Подробнее о нас</p><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 11L11 1" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 1H11V11" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg></a>
            </div>
            <div class="ind-description__info">
                <div class="ind-description__info-p"><img src="<?php bloginfo('template_directory'); ?>/img/index/description/photo.png" alt="photo"></div>
                <div class="ind-description__info-t">
                    <p>Мы живем в новый золотой век электронной коммерции, когда микробренды конкурируют с традиционными крупными брендами. Эта тенденция образовалась в следствии прямого обращения к потребителю через Wildberries, Ozon и другие торговые площадки электронной коммерции, где даже небольшие повстанческие бренды могут на равных конкурировать с крупными игроками.</p>
                    <h5>ДОБРО ПОЖАЛОВАТЬ В НОВУЮ ПАРАДИГМУ БРЕНДА...</h5>
                    <p>Где потребители меньше заботятся о существующих брендах и больше о том, что другие потребители говорят о брендах... где рейтинг и отзывы имеют большее значение, чем красивый логотип и броская фраза... и где для безупречного обслуживания клиентов требуется бесплатная доставка в течение 0-2 дней.</p>
                </div>
            </div>
        </div>
    </section>

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

    <section class="ind-portfolio">
        <div class="containers">
            <div class="ind-portfolio__title">Портфель TOGO</div>
            <div class="ind-portfolio__w">
                <div class="ind-portfolio__tb">
                    <div class="ind-portfolio__table">
                        <div class="ind-portfolio__table-w">
                            <div class="ind-portfolio__nav-i">
                                <p>Год</p>
                            </div>
                            <ul class="ind-portfolio__table-bl ind-portfolio__table-year">
                                <?php
                                foreach( $posts as $post ){
                                    setup_postdata($post);
                                    ?>
                                    <li class="ind-portfolio__table-i">
                                        <p>
                                        <?php echo get_field('year'); ?>
                                        </p>
                                    </li>
                                    <?php
                                }

                                wp_reset_postdata(); // сброс
                                ?>
                            </ul>
                        </div>
                        <div class="ind-portfolio__table-w">
                            <div class="ind-portfolio__nav-i">
                                <p>В портфеле ГК  Like</p>
                            </div>
                            <ul class="ind-portfolio__table-bl">
                                <?php
                                foreach( $posts as $post ){
                                    setup_postdata($post);
                                    ?>
                                    <li class="ind-portfolio__table-i">
                                        <p>
                                        <?php echo get_field('in_portfel'); ?>
                                        </p>
                                        <span><?php echo get_field('year'); ?></span>
                                        <?php if(get_field('arrow') != 'Убрать'):?>
                                        <img src="<?php bloginfo('template_directory'); if(get_field('arrow') == 'Вниз'){?>/svg/index/portfolio/arrow-down.svg <?php }else{ ?> /svg/index/portfolio/arrow-up.svg <?php } ?>" alt="icons">
                                    <?php endif; ?>
                                    </li>
                                    <?php
                                }
                                wp_reset_postdata(); // сброс
                                ?>
                            </ul>
                        </div>
                        <div class="ind-portfolio__table-w">
                            <div class="ind-portfolio__nav-i">
                                <p>Общий оборот</p>
                            </div>
                            <ul class="ind-portfolio__table-bl">
                                <?php
                                foreach( $posts as $post ){
                                    setup_postdata($post);
                                    ?>
                                    <li class="ind-portfolio__table-i">
                                        <p>
                                        <?php echo get_field('turnover'); ?>
                                        </p>
                                        <span><?php echo get_field('year'); ?></span>
                                    </li>
                                    <?php
                                }

                                wp_reset_postdata(); // сброс
                                ?>
                            </ul>
                        </div>
                        <div class="ind-portfolio__table-w">
                            <div class="ind-portfolio__nav-i">
                                <p>Наши компании присутствуют</p>
                            </div>
                            <ul class="ind-portfolio__table-bl">
                                <?php
                                foreach( $posts as $post ){
                                    setup_postdata($post);
                                    ?>
                                    <li class="ind-portfolio__table-i">
                                        <p>
                                        <?php echo get_field('present'); ?>
                                        </p>
                                        <span><?php echo get_field('year'); ?></span>
                                        <?php if(get_field('arrow_company') != 'Убрать'):?>
                                        <img src="<?php bloginfo('template_directory'); if(get_field('arrow_company') == 'Вниз'){?>/svg/index/portfolio/arrow-down.svg <?php }else{ ?> /svg/index/portfolio/arrow-up.svg <?php } ?>" alt="icons">
                                    <?php endif; ?>
                                    </li>
                                    <?php
                                }
                                wp_reset_postdata(); // сброс
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ind-portfolio__wrapper">
                <ul class="ind-portfolio__decor">
                    <li class="ind-portfolio__decor-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/portfolio/decor__2.svg" alt="icons"></li>
                    <li class="ind-portfolio__decor-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/portfolio/decor__3.svg" alt="icons"></li>
                </ul>
                <div class="ind-portfolio__start">
                    <p>Топ портфельных <br>компаний</p>
                    <div class="ind-portfolio__start-d"><img src="<?php bloginfo('template_directory'); ?>/svg/index/portfolio/decor__1.svg" alt="icons"></div>
                </div>
                <div class="ind-portfolio__list">
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
                    <a class="ind-portfolio__list-i" href="<?php the_permalink(); ?>">
                        <div class="ind-portfolio__list-p"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
                        <div class="ind-portfolio__list-t"> <?php the_title(); ?></div>
                        <div class="ind-portfolio__list-d"><?php echo get_field('short'); ?></div>
                        <ul class="ind-portfolio__list-l">
                            <?php if( have_rows('revenue') ): 
                                while( have_rows('revenue') ) : the_row();
                            ?>
                            <li class="ind-portfolio__list-b">
                                <h5><?php echo get_sub_field('rev_title'); ?></h5>
                                <p><?php echo get_sub_field('rev_rev'); ?></p>
                            </li>
                        <?php endwhile; endif; ?>
                        </ul>
                    </a>
                    <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                  
                </div>
                <div class="ind-portfolio__slider">
                    <div class="swiper indexPortfolio">
                        <div class="swiper-wrapper">
                            <?php
                            foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class="swiper-slide">
                                <a class="ind-portfolio__list-i" href="<?php the_permalink(); ?>">
                                    <div class="ind-portfolio__list-p">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                                    </div>
                                    <div class="ind-portfolio__list-t"><?php the_title(); ?></div>
                                    <div class="ind-portfolio__list-d"><?php echo get_field('short'); ?></div>
                                    <ul class="ind-portfolio__list-l">
                                        <?php if( have_rows('revenue') ): 
                                            while( have_rows('revenue') ) : the_row();
                                        ?>
                                        <li class="ind-portfolio__list-b">
                                            <h5><?php echo get_sub_field('rev_title'); ?></h5>
                                            <p><?php echo get_sub_field('rev_rev'); ?></p>
                                        </li>
                                       <?php endwhile; endif; ?>
                                    </ul>
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
    <section class="ind-team">
        <div class="containers">
            <div class="ind-team__wrapper">
                <ul class="ind-team__decor">
                    <li class="ind-team__decor-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/team/decor__2.svg" alt="icons"></li>
                    <li class="ind-team__decor-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/team/decor__3.svg" alt="icons"></li>
                    <li class="ind-team__decor-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/team/decor__4.svg" alt="icons"></li>
                    <li class="ind-team__decor-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/team/decor__5.svg" alt="icons"></li>
                </ul>
                <div class="ind-team__start">
                    <p>ЭКСПЕРТЫ<br>В ОБЛАСТИ <br><span>ЭКОНОКМИ, <br>ФИНАНСОВ, <br>АНАЛИЗ ДАННЫХ <br>И МАРКЕТИНГА. </span></p>
                    <div class="ind-team__start-d"><img src="<?php bloginfo('template_directory'); ?>/svg/index/team/decor__1.svg" alt="icons"></div>
                    <div class="ind-team__start-b">
                        <div class="ind-team__start-p"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/button__1.svg" alt="img"></div>
                        <div class="ind-team__start-l"></div>
                        <div class="ind-team__start-t">
                            <h5>Получить инвестиции</h5>
                            <div class="ind-team__start-link"> <a href="<?php echo get_page_link(18); ?>">
                                    <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/index/team/arrow__link.svg" alt="icons"></a><a href="<?php echo get_page_link(18); ?>">
                                    <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/index/team/arrow__link.svg" alt="icons"></a></div>
                        </div>
                    </div>
                    <div class="ind-team__start-b">
                        <div class="ind-team__start-p"> <img src="<?php bloginfo('template_directory'); ?>/svg/index/button__2.svg" alt="img"></div>
                        <div class="ind-team__start-l"></div>
                        <div class="ind-team__start-t">
                            <h5>Стать партнером togobrands</h5>
                            <div class="ind-team__start-link"> <a href="<?php echo get_page_link(16); ?>">
                                    <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/index/team/arrow__link.svg" alt="icons"></a><a href="<?php echo get_page_link(16); ?>">
                                    <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/index/team/arrow__link.svg" alt="icons"></a></div>
                        </div>
                    </div>
                </div>
                <ul class="ind-team__list">
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
                    <li class="ind-team__list-i">
                        <div class="ind-team__list-p"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
                        <div class="ind-team__list-t">
                            <div class="ind-team__list-d"><?php echo get_field('description'); ?></div>
                            <h5><?php the_title(); ?></h5>
                            <p><?php echo get_field('dolg'); ?></p>
                        </div>
                    </li>
                    <?php
                        }
                        wp_reset_postdata(); // сброс
                    ?>
                    
                </ul>
                <div class="ind-team__slider">
                    <div class="swiper indexTeam">
                        <div class="swiper-wrapper">
                            <?php
                                foreach( $posts as $post ){
                                setup_postdata($post);
                            ?>
                            <div class="swiper-slide">
                                <div class="ind-team__list-i">
                                    <div class="ind-team__list-p"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
                                    <div class="ind-team__list-t">
                                        <div class="ind-team__list-d"><?php echo get_field('description'); ?></div>
                                        <h5><?php the_title(); ?></h5>
                                        <p><?php echo get_field('dolg'); ?></p>
                                    </div>
                                </div>
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
    <section class="ind-news">
        <div class="containers">
            <div class="ind-news__title">Новости</div>
            <div class="ind-news__list">
                <?php
                    $news = get_posts( array(
                        'numberposts' => 0,
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );
                    ?>                    

                    <?php
                        foreach( $news as $post ){
                        setup_postdata($post);
                    ?>
                <a class="ind-news__list-i" href="<?php the_permalink(); ?>">
                    <div class="ind-news__list-p"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
                    <div class="ind-news__list-t"><?php the_title(); ?></div>
                    <div class="ind-news__list-d"><?php the_excerpt(); ?></div>
                    <div class="ind-news__list-b">Подробнее  ›</div>
                </a>
                <?php
                    }
                    wp_reset_postdata(); // сброс
                ?>

                </div>
            <div class="ind-news__s">
                <div class="swiper indexNews">
                    <div class="swiper-wrapper">
                        <?php
                            foreach( $news as $post ){
                            setup_postdata($post);
                        ?>
                        <div class="swiper-slide">
                            <a class="ind-news__list-i" href="<?php the_permalink(); ?>">
                                <div class="ind-news__list-p"><img src="<?php the_post_thumbnail_url(); ?>" alt="img"></div>
                                <div class="ind-news__list-t"><?php the_title(); ?></div>
                                <div class="ind-news__list-d"><?php the_excerpt(); ?></div>
                                <div class="ind-news__list-b">Подробнее  ›</div>
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
    </section>
    <script>
        $("#vid")[0].play();

    </script>
<?php
get_footer();