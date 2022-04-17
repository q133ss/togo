<?php
/*
 * Template name: Контакты
 */

get_header();
?>
<section class="contact-main"> 
  <div class="containers">
    <div class="contact-main__w"> 
      <div class="contact-main__t">Контакты</div>
    </div>
  </div>
  <div class="contact-main__c">
    <div class="contact-main__m"> 
      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A79c6f8c0f60d98789ee97c5062181cb67869f74c3c636a1d848ffdfa2b430d31&amp;amp;source=constructor" width="600" height="450" frameborder="0"></iframe>
    </div>
  </div>
  <div class="containers">
    <div class="contact-main__w"> 
      <ul class="contact-main__d">
        <li class="contact-main__d-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/contact/decor__1.svg" alt="icons"></li>
        <li class="contact-main__d-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/contact/decor__2.svg" alt="icons"></li>
        <li class="contact-main__d-i"> <img src="<?php bloginfo('template_directory'); ?>/svg/contact/decor__3.svg" alt="icons"></li>
      </ul>
      <div class="contact-main__b">
        <div class="contact-main__i"> 
          <div class="contact-main__e"> 
            <p>Почта для сотрудничества: </p><a href="mailto:togo@email.com">togo@email.com</a>
          </div>
          <div class="contact-main__a"> 
            <p>Адрес штаб-квартиры Togo: </p>
            <address>Москва, ул. Нижегородская, 29-33 стр. 5, <br>(БЦ Нижегородский)</address>
          </div>
          <div class="contact-main__btns"><a class="contact-main__btn" href="#">
              <div class="contact-main__btn-p"><img src="<?php bloginfo('template_directory'); ?>/svg/contact/button__1.svg" alt="img"></div>
              <div class="contact-main__btn-b">
                <div class="contact-main__btn-t">Стать партнером togobrands</div>
                <div class="contact-main__btn-w"> 
                  <div class="contact-main__btn-i"> 
                    <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/contact/arrow__button.svg" alt="icons">
                  </div>
                  <div class="contact-main__btn-i"> 
                    <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/contact/arrow__button.svg" alt="icons">
                  </div>
                </div>
              </div></a><a class="contact-main__btn" href="#">
              <div class="contact-main__btn-p"><img src="<?php bloginfo('template_directory'); ?>/svg/contact/button__2.svg" alt="img"></div>
              <div class="contact-main__btn-b">
                <div class="contact-main__btn-t">Стать партнером togobrands</div>
                <div class="contact-main__btn-w"> 
                  <div class="contact-main__btn-i"> 
                    <p>Заполнить анкету</p><img src="<?php bloginfo('template_directory'); ?>/svg/contact/arrow__button.svg" alt="icons">
                  </div>
                  <div class="contact-main__btn-i"> 
                    <p>Подробнее</p><img src="<?php bloginfo('template_directory'); ?>/svg/contact/arrow__button.svg" alt="icons">
                  </div>
                </div>
              </div></a></div>
        </div>
        <div class="contact-main__f"> 
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
    </div>
  </div>
</section>
<?php get_footer(); ?>
