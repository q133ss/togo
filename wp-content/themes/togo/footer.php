<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package togo
 */

?>
<div class="footer__block"></div>
<footer class="footer opacity">
    <div class="containers">
        <div class="footer__wrapper">
            <div class="footer__nav"><a class="footer__nav-logo" href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/logo__header.png" alt="icons"></a>
                <ul class="footer__nav-l">
                    <li class="footer__nav-i"> <a href="about.html">О нас</a></li>
                    <li class="footer__nav-i"> <a href="portfolio.html">Портфель брендов</a></li>
                    <li class="footer__nav-i"> <a href="team.html">Наша команда</a></li>
                    <li class="footer__nav-i"> <a href="partner.html">Партнерам</a></li>
                    <li class="footer__nav-i"> <a href="investor.html">Инвесторам</a></li>
                    <li class="footer__nav-i"> <a href="news.html">Новости</a></li>
                    <li class="footer__nav-i"> <a href="contact.html">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__info">
                <div class="footer__info-c">
                    <p>Наши контакты</p><a href="mailto:invest_v_togo@email.com">invest_v_togo@email.com</a>
                    <h5>Мы живем в новый золотой век электронной коммерции, когда микробренды конкурируют </h5>
                </div>
                <div class="footer__info-a">
                    <p>Адрес штаб-квартиры Togo: </p>
                    <address>Москва, ул. Нижегородская, 29-33 стр. 5, (БЦ Нижегородский)</address>
                </div>
            </div>
            <div class="footer__add">
                <div class="footer__add-i">Copyright © Togo All rights reserved</div><a class="footer__add-c" href="https://bpump.ru/">Сайт разработан компанией Business Pump</a>
            </div>
        </div>
    </div>
</footer>
<div class="menu display-n">
    <div class="menu__w">
        <div class="menu__nav"> <a class="menu__nav-l" href="#"> <img src="<?php bloginfo('template_directory'); ?>/img/logo__headers.png" alt="logo"></a>
            <button class="menu__nav-c"><img src="<?php bloginfo('template_directory'); ?>/svg/close.svg" alt="close"></button>
        </div>
        <ul class="menu__l">
            <li class="menu__l-i"><a href="about.html">О НАС</a></li>
            <li class="menu__l-i"><a href="portfolio.html">ПОРТФЕЛЬ БРЕНДОВ</a></li>
            <li class="menu__l-i"><a href="team.html">НАША КОМАНДА</a></li>
            <li class="menu__l-i"><a href="partner.html">ПАРТЕРАМ</a></li>
            <li class="menu__l-i"><a href="investor.html">ИНВЕСТОРАМ</a></li>
            <li class="menu__l-i"><a href="news.html">НОВОСТИ </a></li>
            <li class="menu__l-i"><a href="contact.html">КОНТАКТЫ</a></li>
        </ul>
    </div>
</div>
<div class="video display-n">
    <div class="video__wrapper">
        <div class="video__close"> <img src="<?php bloginfo('template_directory'); ?>/svg/close__video.svg" alt="icons"></div>
        <div class="video__block">
            <video controls muted loop id="vide">
                <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4" />
            </video>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
