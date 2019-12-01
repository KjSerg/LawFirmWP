<?php
/* Template Name: Шаблон страницы банкротства */

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

                <section class="forecast-section forecast--bankruptcy" id="<?php e('screen_id'); ?>" style="background-image:url(<?php e('screen_bg'); ?>);">
                    <div class="forecast-logo">
                        <img src="<?php e('logo'); ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="forecast" style="background-image: url(<?php e('banner_bg'); ?>);">

                            <div class="forecast-person">
                                <img src="<?php e('photo'); ?>" class="forecast-person__img" alt="">
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
                                <?php e('subtitle'); ?>
                            </h3>

                            <form  class="forecast-form">
                                <textarea name="text" placeholder="<?php e('hint'); ?>" class="forecast__textarea"></textarea>
                                <div class="form__description">
                                    <?php e('description'); ?>
                                </div>
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
                            <div class="text text--bankruptcy inform-section__text" >
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

                <section class="section clear-debts-section" id="<?php e('screen_id'); ?>" style="background-color: <?php e('screen_color'); ?>;">
                    <div class="container">
                        <div class="clear-debts">
                            <h3 class="clear-debts__title">
                                <?php e('title'); ?>
                            </h3>
                            <div class="clear-debts__decoration">
                                <img src="<?php echo $assets; ?>img/cb1.png" alt="">
                            </div>

                            <ul class="clear-debts-list">

                                <?php if (have_rows('list')): ?>

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="clear-debts-list__item">

                                            <div class="clear-debts-list__text">
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
        <?php elseif ( get_row_layout() == 'screen_4' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section conditions-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="conditions">
                            <h3 class="section__title conditions__title">
                                <?php e('title'); ?>
                            </h3>

                            <div class="conditions-container">

                                <?php if (have_rows('list')): ?>

                                    <ul class="conditions-list">

                                        <?php while (have_rows('list')) : the_row(); ?>

                                            <li class="conditions-list__item">
                                                <div class="conditions-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </div>
                                                <div class="conditions-list__text">
                                                    <?php e('text'); ?>
                                                </div>
                                            </li>

                                        <?php endwhile; ?>

                                    </ul>

                                <?php endif; ?>
                                <?php if (have_rows('form')): ?>
                                    <?php while (have_rows('form')) : the_row(); ?>
                                        <form novalidate action="<?php echo $url_home; ?>mail.php" class="conditions-form form">

                                            <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                            <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                            <input type="hidden" name="form_subject" value="<?php e('subject') ?>">

                                            <label class="conditions-form__label">
                                            <span class="conditions-form__img">
                                                <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                                            </span>
                                                <input required type="tel" class="conditions-form__input" name="Телефон" placeholder="<?php e('hint') ?>">
                                            </label>

                                            <button class="button conditions-form__button button--gradient">
                                                <?php e('button_text') ?>
                                            </button>

                                            <label class="conditions-form__container">
                                                <input checked type="checkbox" class="conditions-form__checkbox">
                                                <span></span>
                                                <?php e('consent') ?>
                                            </label>

                                        </form>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_5' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section facts-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="facts">
                            <h3 class="section__title facts__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): $counter = 0; ?>

                                <div class="facts-rows">
                                    <ul class="facts-row">
                                        <?php $i = 1; while (have_rows('list')) : the_row(); if($i<=2): ?>

                                            <li class="facts-row__item">

                                                <?php $text_1 = g('text_1'); ?>

                                                <div class="facts-row__number <?php if ($text_1) echo 'facts-row__number--subrow'; ?> ">
                                                    <?php if ($text_1): ?>
                                                        <span>
                                                            <?php e('number'); ?>
                                                        </span>
                                                        <span>
                                                            <?php echo $text_1; ?>
                                                        </span>
                                                    <?php else: ?>
                                                        <?php e('number'); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="facts-row__text">
                                                    <p>
                                                        <?php e('text'); ?>
                                                    </p>
                                                </div>
                                            </li>

                                        <?php endif; $i++; $counter = $i; endwhile; ?>
                                    </ul>
                                    <ul class="facts-row facts-row--two">

                                        <?php $i = 1; while (have_rows('list')) : the_row(); if($i>2): ?>

                                            <li class="facts-row__item <?php if($i == 4) echo 'long-number'; ?> ">

                                                <?php $text_1 = g('text_1'); ?>

                                                <div class="facts-row__number <?php if ($text_1) echo 'facts-row__number--subrow'; ?> ">
                                                    <?php if ($text_1): ?>
                                                        <span>
                                                                                    <?php e('number'); ?>
                                                                                </span>
                                                        <span>
                                                                                    <?php echo $text_1; ?>
                                                                                </span>
                                                    <?php else: ?>
                                                        <?php e('number'); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="facts-row__text">
                                                    <p>
                                                        <?php e('text'); ?>
                                                    </p>
                                                </div>
                                            </li>

                                        <?php endif; $i++; $counter = $i; endwhile; ?>
                                    </ul>
                                </div>

                            <?php endif; ?>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_6' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section advantages-section" id="<?php e('screen_id'); ?>" style="background-color: #fffcf6;">
                    <div class="container">
                        <div class="advantages">
                            <h3 class="section__title advantages__title">
                                <?php e('title'); ?>
                            </h3>

                            <ul class="advantages-list">

                                <?php if (have_rows('list')): ?>

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

                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_7' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section media-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="media">
                            <h3 class="section__title media__title">
                                <?php e('title'); ?>
                            </h3>
                            <a href="<?php e('link'); ?>" target="_blank" class="media__link">
                                <img src="<?php e('img'); ?>" alt="">
                            </a>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_8' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section cost-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="cost">
                            <h3 class="section__title cost__title">
                                <?php e('title'); ?>
                            </h3>

                            <div class="cost-container">
                                <div class="cost-left">
                                    <h4 class="cost__subtitle">
                                        <?php e('subtitle_1'); ?>
                                    </h4>
                                    <div class="cost__number">
                                        <?php e('price'); ?>
                                    </div>
                                    <div class="cost__desc">
                                        <?php e('description'); ?>
                                    </div>

                                    <?php if (have_rows('form')): ?>

                                        <?php while (have_rows('form')) : the_row(); ?>

                                            <form  action="<?php echo $url_home; ?>mail.php" novalidate class="conditions-form cost-form form">

                                                <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                                <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                                <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">

                                                <div class="cost-form__title">
                                                    <?php e('title'); ?>
                                                </div>

                                                <label class="conditions-form__label">
                                                <span class="conditions-form__img">
                                                    <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                                                </span>
                                                    <input required type="tel" class="conditions-form__input" name="Телефон" placeholder="<?php e('hint'); ?>">
                                                </label>

                                                <button class="button conditions-form__button button--gradient">
                                                    <?php e('button_text'); ?>
                                                </button>

                                                <label class="conditions-form__container">
                                                    <input checked type="checkbox" class="conditions-form__checkbox">
                                                    <span></span>
                                                    <?php e('consent'); ?>
                                                </label>

                                            </form>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                                <div class="cost-list-container">
                                    <h6 class="cost-list__title">
                                        <?php e('subtitle_2'); ?>
                                    </h6>
                                    <ul class="cost-list">
                                        <?php if (have_rows('list')): ?>

                                            <?php while (have_rows('list')) : the_row(); ?>
                                                <li class="cost-list__item">
                                                    <?php e('text'); ?>
                                                </li>
                                            <?php endwhile; ?>

                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_9' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section guarantee-section" id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="guarantee">
                            <h3 class="section__title guarantee__title">
                                <?php e('title'); ?>
                            </h3>

                            <div class="guarantee-list">

                                <?php if (have_rows('list')): ?>

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <div class="guarantee-list__item">
                                            <div class="guarantee-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <div class="guarantee-list__title">
                                                <?php e('title'); ?>
                                            </div>
                                            <div class="guarantee-list__text">
                                                <?php e('text'); ?>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                            </div>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_10' ): ?>
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
                                        <?php e('text'); ?>
                                    </div>
                                </div>
                                <div class="best-right best-item">
                                    <div class="best-item__title">
                                        <?php e('subtitle_2'); ?>
                                    </div>
                                    <div class="best-item__text">
                                        <?php e('text_2'); ?>
                                    </div>

                                    <?php if (have_rows('form')): ?>

                                        <?php while (have_rows('form')) : the_row(); ?>

                                            <form novalidate action="<?php echo $url_home; ?>mail.php"
                                                  class="conditions-form best-form form">

                                                <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                                <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                                <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">

                                                <label class="conditions-form__label">
                                                                <span class="conditions-form__img">
                                                                    <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                                                                </span>
                                                    <input required type="tel" class="conditions-form__input" name="Телефон"
                                                           placeholder="<?php e('hint'); ?>">
                                                </label>

                                                <button class="button conditions-form__button best-form__button">
                                                    <?php e('button_text'); ?>
                                                </button>

                                                <label class="conditions-form__container best-form__container">
                                                    <input checked type="checkbox" class="conditions-form__checkbox">
                                                    <span></span>
                                                    <?php e('consent'); ?>
                                                </label>

                                            </form>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_11' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section algorithm-section" id="<?php e('screen_id'); ?>">
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
                                                    <?php echo $i;  ?>
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
        <?php elseif ( get_row_layout() == 'screen_12' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section result-section" id="<?php e('screen_id'); ?>" style="background-color: #fffcf6;">
                    <div class="container">
                        <div class="result">
                            <h3 class="section__title result__section">
                                <?php e('title'); ?>
                            </h3>
                            <div class="result-list">

                                <?php if (have_rows('list')): ?>

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <div class="result-list__item">
                                            <div class="result-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <div class="result-list__title">
                                                <?php e('title'); ?>
                                            </div>
                                            <div class="result-list__text">
                                                <?php e('text'); ?>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                            </div>

                            <a href="#get-forecast" class="button fancybox button--gradient result__button">
                                <?php e('button_text'); ?>
                            </a>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_13' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section questions-section" id="<?php e('screen_id'); ?>">
                    <div class="questions-person">
                        <img src="<?php e('photo'); ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="questions">
                            <h3 class="section__title questions__title">
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
        <?php elseif ( get_row_layout() == 'screen_14' ): ?>
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

                                                <?php if(g('icon')) echo '<img src="' . g('icon') . '" alt="">'; ?>

                                                <?php e('name'); ?>
                                            </a>

                                        <?php endwhile; ?>

                                    <?php endif; ?>

                                </div>
                            </div>
                            <?php if (have_rows('form')): ?>

                                <?php while (have_rows('form')) : the_row(); ?>
                                    <form novalidate action="<?php echo $url_home; ?>mail.php" class="feedback-form form">
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
                                            <input checked type="checkbox" name="policy" class="conditions-form__checkbox">
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

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
