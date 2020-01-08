<?php
$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];

$page_1 = get_field('page_1', $set);
$page_2 = get_field('page_2', $set);

$cat = get_field('category_page');
$is_b = $cat == 'Бизнесу';
$is_c = $cat == 'Гражданам';
$is_not_cat = !$is_b && !$is_c;

$link_to_home = get_the_permalink($page_2);

if($is_c) {
    $link_to_home = get_the_permalink($page_1);
}

?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?> </title>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <?php wp_head(); ?>

</head>
<body>

<script>
    var adminAjax = '<?php echo $var['admin_ajax']; ?>';
    var home_url = '<?php echo $url; ?>';
</script>

<header class="header">
    <div class="container">
        <div class="header-container">
            <a href="#" class="menu-open-js humburger">
                <span></span><span></span><span></span>
            </a>
            <div class="header-top">
                <a href="<?php echo $link_to_home; ?>" class="logo">
                    <img src="<?php the_field('logo_in_header', $set); ?>" class="logo-img" alt="<?php bloginfo('name'); ?>">
                </a>
                <div class="header-links ">

                    <a
                            href="<?php echo get_the_permalink($page_1); ?>"

                            class="header__link <?php if($is_c) echo 'active'; ?>">
                        Гражданам
                    </a>

                    <a
                            href="<?php echo get_the_permalink($page_2); ?>"

                            class="header__link <?php if($is_b) echo 'active'; ?>">
                        Бизнесу
                    </a>

                </div>
                <div class="header-contacts hide-in-mobile">
                    <?php $g = get_field('address', $set); ?>
                    <a href="<?php echo $g['url']; ?>" target="<?php echo $g['target']; ?>" class="header-contacts__link">
                        <img src="<?php echo $assets; ?>img/location.png" class="header-contacts__icon" alt="">
                        <?php echo $g['title']; ?>
                    </a>

                    <a href="tel:<?php the_field('phone', $set); ?>" class="header-contacts__link header-contacts__link--phone">
                        <img src="<?php echo $assets; ?>img/phone.png" class="header-contacts__icon" alt="">
                        <strong><?php the_field('phone', $set); ?></strong>
                    </a>

                    <a href="mailto:<?php the_field('email', $set); ?>" class="header-contacts__link">
                        <img src="<?php echo $assets; ?>img/mail.png" class="header-contacts__icon" alt="">
                        <strong><?php the_field('email', $set); ?></strong>
                    </a>


                </div>
            </div>
            <div class="header-navigation hide-in-mobile">
                <ul>
                    <?php if (have_rows('menu_in_header', $set)): ?>

                        <?php while (have_rows('menu_in_header', $set)) : the_row();
                            $is_link = !g('link_or_screen');
                            $link_arr = g('link');
                            $text = g('text');
                            $id_screen = g('id_screen');
                            $link = ($is_link) ? $link_arr['url'] : '#' . $id_screen;
                            $title = ($is_link) ? $link_arr['title'] : $text;
                        ?>
                            <li>
                                <a <?php if(!$is_link) echo 'class="scroll-to-js"' ?> href="<?php echo $link; ?>"><?php echo $title; ?></a>

                                <?php if (have_rows('submenu')): ?>

                                    <ul class="header-navigation__submenu">
                                        <?php while (have_rows('submenu')) : the_row();

                                        $l = $is_b ? g('link_2') : g('link_1');

                                        ?>
                                            <li><a href="<?php echo $l['url']; ?>"><?php echo $l['title']; ?></a></li>
                                        <?php endwhile; ?>
                                    </ul>

                                <?php endif; ?>

                            </li>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="content">