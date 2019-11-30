<?php
$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
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
                <a href="<?php echo $url; ?>" class="logo">
                    <img src="<?php the_field('logo_in_header', $set); ?>" class="logo-img" alt="<?php bloginfo('name'); ?>">
                </a>
                <div class="header-links ">

                    <?php if (have_rows('list_links', $set)): ?>

                        <?php while (have_rows('list_links', $set)) : the_row(); ?>

                            <a
                                href="<?php echo g('link')['url']; ?>"
                                target="<?php echo g('link')['target']; ?>"
                                class="header__link">
                                <?php echo g('link')['title']; ?>
                            </a>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
                <div class="header-contacts hide-in-mobile">
                    <a href="mailto:<?php the_field('email', $set); ?>" class="header-contacts__link">
                        <img src="<?php echo $assets; ?>img/mail.png" class="header-contacts__icon" alt="">
                        <strong><?php the_field('email', $set); ?></strong>
                    </a>
                    <?php $g = get_field('address', $set); ?>
                    <a href="<?php echo $g['url']; ?>" target="<?php echo $g['target']; ?>" class="header-contacts__link">
                        <img src="<?php echo $assets; ?>img/location.png" class="header-contacts__icon" alt="">
                        <?php echo $g['title']; ?>
                    </a>
                    <a href="tel:<?php the_field('phone', $set); ?>" class="header-contacts__link">
                        <img src="<?php echo $assets; ?>img/phone.png" class="header-contacts__icon" alt="">
                        <strong><?php the_field('phone', $set); ?></strong>
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
                            </li>
                        <?php endwhile; ?>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</header>

<main class="content">