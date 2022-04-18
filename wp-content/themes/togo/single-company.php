<?php
get_header();
?>
<section class="portfolios-main"> 
  <div class="portfolios-main__bg"></div>
  <div class="containers">
    <div class="portfolios-main__w"> 
      <div class="portfolios-main__i">
        <div class="portfolios-main__t"><?php the_title(); ?></div>
        <div class="portfolios-main__d"><?php echo get_field('short'); ?></div><a class="portfolios-main__btn" href="<?php echo get_field('site'); ?>">
          <p>Перейти на сайт</p><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1 11L11 1" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1 1H11V11" stroke="#0063BE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
      </div>
      <div class="portfolios-main__b"> <img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/box.svg" alt="icons"></div>
    </div>
  </div>
</section>
<section class="portfolios-price"> 
  <div class="containers">
    <ul class="portfolios-price__decor">
      <li class="portfolios-price__decor-i"><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/decor__1.svg" alt="icons"></li>
      <li class="portfolios-price__decor-i"><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/decor__2.svg" alt="icons"></li>
      <li class="portfolios-price__decor-i"><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/decor__3.svg" alt="icons"></li>
    </ul>
    <ul class="portfolios-price__l">
      <?php if( have_rows('revenue') ): 
          while( have_rows('revenue') ) : the_row();
      ?>
      <li class="portfolios-price__l-i"> 
        <p><?php echo get_sub_field('rev_title'); ?></p>
        <h5><?php echo get_sub_field('rev_rev'); ?></h5>
      </li>
      <?php
        endwhile;endif;
      ?>
    </ul>
  </div>
</section>
<section class="portfolios-description"> 
  <div class="containers">
    <div class="portfolios-description__w">
      <ul class="portfolios-description__p">
        <?php if( have_rows('team') ): 
          while( have_rows('team') ) : the_row();
        ?>
        <li class="portfolios-description__p-i">
          <img src="<?php echo get_sub_field('team_photo'); ?>" alt="img">
          <h5><?php echo get_sub_field('team_name'); ?></h5>
          <p><?php echo get_sub_field('team_dolg'); ?></p>
        </li>
        <?php
          endwhile;endif;
        ?>
      </ul>
      <div class="portfolios-description__i"> 
        <div class="portfolios-description__i-d"> <img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/decor__4.svg" alt="icons"></div>
        <div class="portfolios-description__i-t">О КОМПАНИИ</div>
        <div class="portfolios-description__i-text">
          <?php echo get_field('about'); ?>
        </div>
      </div>
    </div>
    <div class="portfolios-banner__t">ПОКАЗАТЕЛИ КОМПАНИИ</div>
    <div class="portfolios-banner__b">
      <?php echo get_field('iframe'); ?>
    </div>
    <div class="portfolios-btns__w">
      <div class="portfolios-btns__e">
        <div class="portfolios-btns__e-p"><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/button__1.svg" alt="icons"></div>
        <div class="portfolios-btns__e-t"> 
          <h5>Стать партнером Togobrands</h5>
          <div class="portfolios-btns__e-w"><a class="portfolios-btns__e-b" href="#"> 
              <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/arrow__button.svg" alt="icons"></a><a class="portfolios-btns__e-b" href="#"> 
              <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/arrow__button.svg" alt="icons"></a></div>
        </div>
      </div>
      <div class="portfolios-btns__e">
        <div class="portfolios-btns__e-p"><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/button__2.svg" alt="icons"></div>
        <div class="portfolios-btns__e-t"> 
          <h5>Стать инвестором Togobrands</h5>
          <div class="portfolios-btns__e-w"><a class="portfolios-btns__e-b" href="#"> 
              <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/arrow__button.svg" alt="icons"></a><a class="portfolios-btns__e-b" href="#"> 
              <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/portfolios/arrow__button.svg" alt="icons"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>