<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package togo
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icons-1.ico" type="image/x-icon" id="rotateIcon">
   <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>
<header class="header">
    <div class="containers">
        <div class="header__block header__block-b"><a class="header__logo" href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo__header.png" alt="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo__headers.png" alt="logo">
                <div class="header__description opacity-d">
                    <p>В 1925 году, когда в почти изолированном от внешнего мира городе Ном(штат Аляска, США) вспыхнула эпидемия дифтерии, Леонард Сеппала – норвежско-американский профессиональный гонщик на собачьих упряжках, решил принять участие в Великой гонке милосердия и взял с собой Того, которому на тот момент было 12 лет. <br>В период с 31 января по 1 февраля эстафета, заключающаяся в доставке антидифтерийной сыворотки с антитоксином, была в руках Сеппалы, который прошёл вместе с Того от Нома к Шактулику и обратно до Головина 425 км. В пути собачью упряжку и её каюра ожидало много опасностей. Ночь и снежная буря не позволяли Сеппале видеть дорогу, но Того вывел их к придорожному домику, предотвратив верную гибель своей команды. </p>
                </div></a>
            <ul class="header__l">
                <?php $main_menu = wp_nav_menu( [
                    'menu' => 'Main menu',
                    'container'=> null,
                    'echo'     => false,
                    'walker' => new mainMenuWalker ()
                ] );

                echo str_replace('<ul id="menu-main-menu" class="menu">', '' , str_replace('</ul>', '', $main_menu));
                ?>
            </ul>
            <div class="header__m"> <img src="<?php bloginfo('template_directory'); ?>/svg/menu.svg" alt="icons"><img src="<?php bloginfo('template_directory'); ?>/svg/menus.svg" alt="icons"></div>
        </div>
    </div>
</header>