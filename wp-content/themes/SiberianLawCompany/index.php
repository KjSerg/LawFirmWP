<?php
/* Template Name: Шаблон главной страницы */

get_header();

$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);
?>

<?php if (have_rows('screens', $set)): ?>

    <?php while (have_rows('screens', $set)) : the_row(); ?>

        <?php if (get_row_layout() == 'screen_1'): ?>

            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="forecast-section" id="<?php e('screen_id'); ?>" style="background-image:url(<?php e('screen_bg'); ?>);">
                    <div class="forecast-logo">
                        <img src="<?php e('logo'); ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="forecast" style="background-image: url(<?php e('bg_banner'); ?>);">

                            <div class="forecast-person">
                                <img src="<?php e('person_img'); ?>" class="forecast-person__img" alt="">
                                <div class="forecast-person__text">
                                    <h2 class="forecast-person__name">
                                        <?php e('name'); ?>
                                    </h2>
                                    <h4 class="forecast-person__position">
                                        <?php e('position'); ?>
                                    </h4>
                                </div>
                            </div>

                            <h1 class="forecast__title">
                                <?php e('title'); ?>
                            </h1>
                            <h3 class="forecast__description">
                                <?php e('description'); ?>
                            </h3>

                            <form  class="forecast-form">
                                <textarea name="text" placeholder="<?php e('hint'); ?>" class="forecast__textarea"></textarea>
                                <a href="#get-forecast" class="fancybox--text forecast__button button--gradient">
                                    <?php e('button_text'); ?>
                                </a>
                            </form>


                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_2' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>
                <?php $is_hidden_text = g('text_hide'); ?>

                <section class="section citizens-section inform-section <?php if($is_hidden_text) echo 'inform-section--hidden-text'; ?> " id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="citizens">
                            <h3 class="section__title">
                                <?php e('title'); ?>
                            </h3>
                            <div class="text inform-section__text" >
                                <?php e('text'); ?>
                            </div>
                            <a href="#"
                               data-open="ПОДРОБНЕЕ..."
                               data-close="СВЕРНУТЬ"
                               class="button--gradient inform-section__button">

                                <?php echo ($is_hidden_text) ? 'ПОДРОБНЕЕ...' : 'СВЕРНУТЬ'; ?>
                            </a>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_3' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section keys-section" id="<?php e('screen_id'); ?>" style="background-image: url(<?php e('screen_bg'); ?>);">
                    <div class="container">
                        <div class="keys">
                            <h3 class="keys__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>

                                <ul class="keys-list">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="keys-list__item">
                                            <a href="<?php e('link'); ?>" class="keys-list__link">
                                                <span class="keys-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </span>
                                                <span class="keys-list__text">
                                                    <?php e('text'); ?>
                                                </span>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_4' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section keys-section" id="<?php e('screen_id'); ?>" style="background-image: url(<?php e('screen_bg'); ?>);">
                    <div class="container">
                        <div class="keys">
                            <h3 class="keys__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>

                                <ul class="keys-list keys-list--business">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="keys-list__item">
                                            <a href="<?php e('link'); ?>" class="keys-list__link">
                                                <span class="keys-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </span>
                                                <span class="keys-list__text">
                                                    <?php e('text'); ?>
                                                </span>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_6' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section consult-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="consult">
                            <div class="consult-decoration">
                                <div class="consult-decoration__img">
                                    <div class="consult-decoration__text">
                                        <a href="tel:<?php e('phone_number'); ?>" class="consult-decoration__number">
                                            <?php e('phone_number'); ?>
                                        </a>
                                        <h6 class="consult-decoration__name">
                                            <?php e('text'); ?>
                                        </h6>
                                    </div>

                                    <img src="<?php echo $assets; ?>img/iphone.png" alt="">
                                </div>
                            </div>
                            <div class="consult-content">
                                <h3 class="section__title consult__title">
                                    <?php e('title'); ?>
                                </h3>

                                <?php if (have_rows('list')): ?>

                                    <ul class="consult-list">

                                        <?php while (have_rows('list')) : the_row(); ?>

                                            <li class="consult-list__item">
                                                <?php e('text'); ?>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                <?php endif; ?>

                                <a href="#get-forecast" class="fancybox button--gradient consult__button">
                                    <?php e('button_text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_7' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section advantages-section" id="<?php e('screen_id'); ?>" style="background-color: #fffcf6;">
                    <div class="container">
                        <div class="advantages">
                            <h3 class="section__title advantages__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>

                                <ul class="advantages-list">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="advantages-list__item">
                                            <a href="<?php e('link'); ?>" class="advantages-list__link">
                                                <span class="advantages-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </span>
                                                <span class="advantages-list__text">
                                                    <?php e('text'); ?>
                                                </span>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>
                    </div>


                    <div class="advantages-additionally" style="background-color: #064e63;">
                        <div class="container">
                            <ul class="advantages-additionally-list">
                                <?php if (have_rows('block')): ?>
                                    <?php while (have_rows('block')) : the_row(); ?>
                                        <li class="advantages-additionally-list__item">
                                            <div class="advantages-additionally-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <div class="advantages-additionally-list__text">
                                                <?php e('text'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>


                </section>

            <?php endif; ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
