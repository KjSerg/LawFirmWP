<?php
/* Template Name: Шаблон страницы семейные споры */

get_header();

$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);
?>

<?php if (have_rows('screens')): ?>

    <?php while (have_rows('screens')) : the_row(); ?>

        <?php if (get_row_layout() == 'screen_1'): ?>

            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="forecast-section" id="<?php e('screen_id'); ?>"
                         style="background-image:url(<?php e('screen_bg'); ?>);">
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

                            <form class="forecast-form">
                                <textarea name="text" placeholder="<?php e('hint'); ?>"
                                          class="forecast__textarea"></textarea>
                                <?php if (g('text_desc')): ?>
                                    <div class="form__description">
                                        <?php e('text_desc'); ?>
                                    </div>
                                <?php endif; ?>

                                <a href="#get-forecast" class="fancybox--text forecast__button button--gradient">
                                    <?php e('button_text'); ?>
                                </a>
                            </form>


                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_2'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>
                <?php $is_hidden_text = g('text_hide'); ?>

                <section
                        class="section citizens-section inform-section <?php if ($is_hidden_text) echo 'inform-section--hidden-text'; ?> "
                        id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="citizens">
                            <h3 class="section__title">
                                <?php e('title'); ?>
                            </h3>
                            <div class="text inform-section__text text-justify">
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
        <?php elseif (get_row_layout() == 'screen_3'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section keys-section" id="<?php e('screen_id'); ?>"
                         style="background-image: url(<?php e('screen_bg'); ?>);">
                    <div class="container">
                        <div class="keys">
                            <h3 class="keys__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php $is_4 = g('amount_elements'); ?>

                            <?php if (have_rows('list')): ?>

                                <ul class="keys-list <?php if (!$is_4) echo 'keys-list--third'; ?> "
                                    style="text-align: center;">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="keys-list__item">
                                            <a href="<?php echo g('link') ? g('link') : '#'; ?>"
                                               class="keys-list__link">
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
        <?php elseif (get_row_layout() == 'screen_6'): ?>
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

                                <?php if (!g('text_1')): ?>

                                    <?php if (have_rows('list')): ?>

                                        <ul class="consult-list">

                                            <?php while (have_rows('list')) : the_row(); ?>

                                                <li class="consult-list__item">
                                                    <?php e('text'); ?>
                                                </li>

                                            <?php endwhile; ?>

                                        </ul>

                                    <?php endif; ?>

                                <?php else: ?>

                                    <div class="consult-text consult-list text"
                                         style="text-align: right; margin-bottom: 6rem;">
                                        <?php e('text_1'); ?>
                                    </div>

                                <?php endif; ?>


                                <a href="#get-forecast" class="fancybox button--gradient consult__button">
                                    <?php e('button_text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php if (g('text_block_bottom')): ?>

                        <div class="consult-text-block">
                            <div class="facts-additionally"
                                 style="background-image: linear-gradient(-8deg, #dbc6a2 0%, #f9e6c2 99%, #f9e6c2 100%); background-color: #dfb568;">
                                <div class="container">
                                    <div class="facts-additionally-container">
                                        <div class="facts-additionally__image">
                                            <img src="<?php echo $assets; ?>img/warning.png" alt="">
                                        </div>
                                        <div class="facts-additionally__text">
                                            <?php e('text_block_bottom'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>

                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_7'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section algorithm-section algorithm--family-page" id="<?php e('screen_id'); ?>"
                         style="background-color: #fffcf6;">
                    <div class="container">
                        <div class="algorithm">
                            <div class="section__title algorithm__title">
                                <?php e('title'); ?>
                            </div>
                            <ul class="algorithm-list">

                                <?php if (have_rows('list')): $i = 1; ?>

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="algorithm-list__item">
                                            <div class="algorithm-list__top">
                                                <div class="algorithm-list__number">
                                                    <?php echo $i; ?>
                                                </div>
                                                <div class="algorithm-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="algorithm-list__text">
                                                <?php e('text'); ?>
                                            </div>

                                        </li>

                                        <?php $i++; endwhile; ?>

                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_get_help'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section get-help-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="get-help">
                            <div class="get-help-container">
                                <div class="get-help-left">
                                    <h3 class="section__title get-help__title">
                                        <?php e('title'); ?>
                                    </h3>
                                    <div class="text get-help__text">
                                        <?php e('text'); ?>
                                    </div>
                                    <form action="<?php echo $url_home; ?>mail.php" novalidate
                                          class="conditions-form cost-form form get-help-form">

                                        <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                        <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                        <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">


                                        <label class="conditions-form__label">
                                            <span class="conditions-form__img">
                                                <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                                            </span>
                                            <input required type="tel" class="conditions-form__input" name="Телефон"
                                                   placeholder="<?php e('placeholder'); ?>">
                                        </label>

                                        <button class="button conditions-form__button button--gradient">
                                            <?php e('button_text'); ?>
                                        </button>

                                        <label class="conditions-form__container">
                                            <input type="checkbox" name="policy" checked
                                                   class="conditions-form__checkbox">
                                            <span></span>
                                            <?php e('consent'); ?>
                                        </label>

                                    </form>
                                </div>
                                <div class="get-help-right">
                                    <div class="get-help__img">
                                        <img src="<?php e('img'); ?>" alt="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_cases'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section cases-section" id="<?php e('screen_id'); ?>" style="background-color: #faf7f1;">
                    <div class="container">
                        <div class="cases">
                            <h3 class="section__title cases__title">
                                <?php e('title'); ?>
                            </h3>
                            <h4 class="cases__subtitle">
                                <?php e('subtitle'); ?>
                            </h4>
                            <div class="cases-slider-container">
                                <div class="cases-slider__buttons">
                                    <a href="#" class="cases-slider__button cases-slider__button--left">
                                        <img src="<?php echo $assets; ?>img/arr-left.png" alt="">
                                    </a>
                                    <a href="#" class="cases-slider__button cases-slider__button--right">
                                        <img src="<?php echo $assets; ?>img/arr-right.png" alt="">
                                    </a>
                                </div>

                                <?php if (have_rows('cases')): ?>

                                    <div class="cases-slider">

                                        <?php while (have_rows('cases')) : the_row();

                                            $case = g('case');
                                            ?>

                                            <div>
                                                <div class="cases-slider-item">
                                                    <div class="cases-slider-left">
                                                        <h6 class="cases-slider-left__title">
                                                            <?php e('subtitle'); ?>
                                                        </h6>
                                                        <?php

                                                        $l = get_field('link', $case);
                                                        if ($l):

                                                            ?>
                                                            <a href="<?php echo $l['url']; ?>" target="_blank"
                                                               class="cases-slider-left__link">
                                                                <?php echo $l['title']; ?> <img
                                                                        src="<?php echo $assets; ?>img/link.png" alt="">
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="cases-slider-right">
                                                        <?php if (have_rows('blocks', $case)): ?>
                                                            <?php while (have_rows('blocks', $case)) : the_row(); ?>
                                                                <div class="cases-slider-text">
                                                                    <?php e('text') ?>
                                                                </div>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>

                                                        <div class="cases-slider-text cases-slider-text--result">
                                                            <?php the_field('result', $case); ?>
                                                        </div>

                                                        <?php if (get_field('img', $case)): ?>

                                                            <div class="cases-slider-text cases-slider-text--review">
                                                                <h6>
                                                                    отзыв
                                                                </h6>
                                                                <a href="<?php the_field('img', $case); ?>"
                                                                   class="cases-slider__review fancybox">
                                                                    <img src="<?php the_field('img', $case); ?>" alt="">
                                                                </a>
                                                            </div>

                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>

                                    </div>

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_9'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section price-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="price">
                            <h3 class="section__title price__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('table')): ?>

                                <div class="price-container">
                                    <div class="price-row">

                                        <?php while (have_rows('table')) : the_row(); ?>

                                            <div class="price-row__item">
                                                <div class="price-row__name">
                                                    <?php e('name'); ?>
                                                </div>
                                                <div class="price-row__dot"></div>
                                                <div class="price-row__val">
                                                    <?php e('val'); ?>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>

                                    </div>
                                </div>

                            <?php endif; ?>


                            <h4 class="price__subtitle">
                                <?php e('subtitle'); ?>
                            </h4>

                            <?php if (have_rows('list')): ?>

                                <ul class="price-list">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="price-list__item">
                                            <div class="price-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <div class="price-list__text">
                                                <?php e('text'); ?>
                                            </div>
                                        </li>

                                    <?php endwhile; ?>
                                </ul>

                            <?php endif; ?>

                            <?php if (have_rows('discont')): ?>

                                <?php while (have_rows('discont')) : the_row(); ?>

                                    <div class="price-box">
                                        <div class="price-box__icon">
                                            <img src="<?php e('icon'); ?>" alt="">
                                        </div>
                                        <div class="price-box__text">
                                            <?php e('text'); ?>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            <?php endif; ?>


                            <a href="#modal-consult"
                               class="button--gradient price__button fancybox"><?php e('button_text'); ?></a>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_10'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section reviews-section" id="<?php e('screen_id'); ?>"
                         style="background-image: url(<?php e('screen_bg'); ?>);">
                    <div class="container">
                        <div class="reviews">
                            <h3 class="section__title reviews__title">
                                <?php e('title'); ?>
                            </h3>
                            <div class="reviews-container">

                                <?php if (have_rows('list')): ?>

                                    <div class="reviews-slider">
                                        <?php while (have_rows('list')) : the_row(); ?>
                                            <div>
                                                <div class="reviews-slider__item">
                                                    <a href="<?php e('photo'); ?>" class="reviews-slider__img fancybox">
                                                        <img src="<?php e('photo'); ?>" alt="">
                                                    </a>
                                                    <div class="reviews-slider-container">
                                                        <div class="reviews-slider__text">
                                                            <?php e('text'); ?>
                                                        </div>
                                                        <div class="reviews-slider__name">
                                                            <strong>
                                                                <?php e('name'); ?>
                                                            </strong>
                                                            <?php e('position'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>

                                <?php endif; ?>
                                <?php if (have_rows('links')): ?>
                                    <div class="reviews-list">
                                        <?php while (have_rows('links')) : the_row(); ?>
                                            <a target="_blank" href="<?php e('link'); ?>" class="reviews-list__item">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </a>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_documents_list'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section document-list-section" id="<?php e('screen_id'); ?>"
                         style="background-color: <?php e('bg'); ?>;">
                    <div class="container">
                        <div class="document-list-wrapper">
                            <h3 class="section__title document-list__title">
                                <?php e('title'); ?>
                            </h3>
                            <ul class="document-list">

                                <?php if (have_rows('list')): ?>

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="document-list__item">
                                            <?php if (g('icon')): ?>
                                                <div class="document-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </div>
                                            <?php endif; ?>
                                            <div class="document-list__text">
                                                <p>
                                                    <?php e('text'); ?>
                                                </p>
                                            </div>
                                        </li>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_11'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section questions-section" id="<?php e('screen_id'); ?>" style="padding-bottom: 15rem;">
                    <div class="questions-person">
                        <img src="<?php e('photo'); ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="questions">
                            <h3 class="section__title questions__title section__title--left-text">
                                <?php e('title'); ?>
                            </h3>


                            <?php if (have_rows('list')): ?>
                                <div class="questions-accordeon">
                                    <?php while (have_rows('list')) : the_row(); ?>
                                        <div class="questions-accordeon__item">
                                            <div class="questions-accordeon__title">
                                                <?php e('title'); ?>
                                            </div>
                                            <div class="questions-accordeon__text">
                                                <?php e('text'); ?>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_12'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section feedback-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="feedback">
                            <div class="feedback-messengers">
                                <h3 class="section__title feedback__title">
                                    <?php e('title'); ?>
                                </h3>
                                <h4 class="feedback__subtitle">
                                    <?php e('subtitle_1'); ?>
                                </h4>

                                <div class="feedback-buttons">

                                    <?php if (have_rows('links')): ?>

                                        <?php while (have_rows('links')) : the_row(); ?>

                                            <a href="<?php e('link'); ?>" target="_blank"
                                               class="feedback__button feedback__button--<?php e('color'); ?>">

                                                <?php if (g('icon')) echo '<img src="' . g('icon') . '" alt="">'; ?>

                                                <?php e('name'); ?>
                                            </a>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                            <?php if (have_rows('form')): ?>

                                <?php while (have_rows('form')) : the_row(); ?>
                                    <form novalidate action="<?php echo $url_home; ?>mail.php"
                                          class="feedback-form form">
                                        <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                        <input type="hidden" name="admin_email" value="<?php echo $assets; ?>">
                                        <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">

                                        <div class="feedback-form__title">
                                            <?php e('title'); ?>
                                        </div>
                                        <textarea name="Сообщение" placeholder="<?php e('hint_1'); ?>"
                                                  class="feedback-form__textarea"></textarea>
                                        <input required type="tel" name="Телефон" placeholder="<?php e('hint_2'); ?>"
                                               class="feedback-form__input">

                                        <button class="button feedback-form__button button--gradient">
                                            <?php e('button_text'); ?>
                                        </button>
                                        <label
                                                class="conditions-form__container best-form__container feedback-form__container">
                                            <input checked type="checkbox" name="policy"
                                                   class="conditions-form__checkbox">
                                            <span></span>
                                            <?php e('consent'); ?>
                                        </label>
                                    </form>
                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_our_help'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section help-section" id="help" style="background-color: #fffcf6;">
                    <div class="container">
                        <div class="help">
                            <h3 class="section__title help__title">
                                <?php e('title'); ?>
                            </h3>
                            <ul class="help-list">

                                <?php if (have_rows('list')): ?>

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="help-list__item">
                                            <div class="help-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <div class="help-list__title">
                                                <?php e('title'); ?>
                                            </div>
                                            <div class="help-list__text">
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
        <?php elseif (get_row_layout() == 'screen_directions'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section directions-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="directions">
                            <ul class="directions-list">

                                <?php if (have_rows('list_1')): ?>

                                    <?php while (have_rows('list_1')) : the_row(); ?>

                                        <li class="directions-list__item">
                                            <div class="directions-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <a href="<?php echo g('link') ? g('link') : '#'; ?>"
                                               class="directions-list__title">
                                                <?php e('title'); ?>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                            </ul>
                            <div class="directions-person">
                                <img src="<?php e('img'); ?>" alt="">
                            </div>
                            <ul class="directions-list">
                                <?php if (have_rows('list_2')): ?>

                                    <?php while (have_rows('list_2')) : the_row(); ?>

                                        <li class="directions-list__item">
                                            <div class="directions-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <a href="<?php echo g('link') ? g('link') : '#'; ?>"
                                               class="directions-list__title">
                                                <?php e('title'); ?>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                <?php endif; ?>
                                <li class="directions-list__item directions-list__item--button">
                                    <a href="#get-forecast"
                                       class="button forecast__button directions-list__button fancybox"><?php e('button_text'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_optimal'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section get-help-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="get-help">
                            <h3 class="section__title get-help__title section__title--uppercase">
                                <?php e('title'); ?>
                            </h3>

                            <div class="get-help-container get-help-container--tabs">
                                <div class="get-help-left">

                                    <div class="text get-help__text">
                                        <?php e('text_1'); ?>
                                    </div>

                                    <?php if (have_rows('form')): ?>

                                        <?php while (have_rows('form')) : the_row(); ?>

                                            <form action="<?php echo $url_home; ?>mail.php" novalidate
                                                  class="conditions-form cost-form form get-help-form get-help-form--after">

                                                <input type="hidden" name="project_name"
                                                       value="<?php bloginfo('name'); ?>">
                                                <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                                <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">


                                                <label class="conditions-form__label">
                            <span class="conditions-form__img">
                                <img src="img/phone-img.png" alt="">
                            </span>
                                                    <input required type="tel" class="conditions-form__input"
                                                           name="Телефон" placeholder="">
                                                </label>

                                                <button class="button conditions-form__button button--gradient">
                                                    ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ
                                                </button>

                                                <label class="conditions-form__container">
                                                    <input type="checkbox" checked class="conditions-form__checkbox">
                                                    <span></span>
                                                    <?php e('consent'); ?>
                                                </label>

                                            </form>


                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                                <div class="get-help-right">
                                    <?php if (have_rows('tabs')): ?>
                                        <div class="get-help-tabs">

                                            <div class="get-help-tabs-container">
                                                <?php $i = 1;
                                                while (have_rows('tabs')) : the_row(); ?>
                                                    <a href="#" data-id="<?php echo $i; ?>"
                                                       class="get-help-tabs__item <?php if ($i == 1) echo 'active'; ?>"><?php e('title'); ?></a>
                                                    <?php $i++; endwhile; ?>
                                            </div>
                                            <?php $i = 1;
                                            while (have_rows('tabs')) : the_row(); ?>
                                                <div class="get-help-tabs__content <?php if ($i == 1) echo 'active'; ?>"
                                                     data-id="<?php echo $i; ?>">
                                                    <?php e('text'); ?>
                                                </div>
                                                <?php $i++; endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_list_result'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>


                <section class="section advantages-section" id="<?php e('screen_id'); ?>"
                         style="background-color: #fffcf6;">
                    <div class="container">
                        <div class="advantages">
                            <h3 class="section__title advantages__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>

                                <ul class="advantages-list">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="advantages-list__item">
                                            <div class="advantages-list__link">
                                        <span class="advantages-list__icon">
                                            <img src="<?php e('icon'); ?>" alt="">
                                        </span>
                                                <span class="advantages-list__text">
                                            <?php e('text'); ?>
                                        </span>
                                            </div>
                                        </li>

                                    <?php endwhile; ?>

                                </ul>

                            <?php endif; ?>

                        </div>
                    </div>
                </section>


            <?php endif; ?>
        <?php elseif (get_row_layout() == 'screen_save'): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section best-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="best">
                            <h3 class="section__title best__title">
                                <?php e('title'); ?>
                            </h3>

                            <div class="best-container">
                                <div class="best-container__text">
                                    или
                                </div>
                                <div class="best-left best-item">
                                    <div class="best-item__title">
                                        <?php e('subtitle_1'); ?>
                                    </div>
                                    <div class="best-item__text">
                                        <?php e('text_1'); ?>
                                    </div>
                                </div>
                                <div class="best-right best-item">
                                    <div class="best-item__title" style="color:#dfb568;">
                                        <?php e('subtitle_2'); ?>
                                    </div>
                                    <div class="best-item__text">
                                        <?php e('text_2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>