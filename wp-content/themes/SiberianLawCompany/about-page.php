<?php
/* Template Name: Шаблон страницы о нас */

get_header();

$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);
?>

<section class="section about-company-section" style="color: #ffffff; padding-bottom: 4rem" id="about-company">
    <div class="container">
        <div class="about-company">
            <h1 class="section__title about-company__title">
                <?php echo get_the_title(); ?>
            </h1>
            <div class="about-company__text text text-justify">
                <?php echo the_post();the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('screens')): ?>

    <?php while (have_rows('screens')) : the_row(); ?>

        <?php if (get_row_layout() == 'screen_1'): ?>

            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section advantages-section advantages--about-page"  id="<?php e('id'); ?>"
                         style="background-color: #faf0de; padding-top: 4rem;">
                    <div class="container">
                        <div class="advantages">
                            <h3 class="section__title advantages__title" style="margin-bottom: 2rem;">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>

                                <ul class="advantages-list">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <li class="advantages-list__item advantages-list__item--column show-text">
                                            <a href="<?php echo g('link') ? g('link') : '#'; ?>" class="advantages-list__link">
                                                <span class="advantages-list__icon">
                                                    <img src="<?php e('icon'); ?>" alt="">
                                                </span>
                                                <span class="advantages-list__text">
                                                    <strong>
                                                       <?php e('title'); ?>
                                                    </strong>
                                                    <p class="hidden-text-js">
                                                        <?php e('text'); ?>
                                                    </p>
                                                    <a href="#" class="show-text-js">Поподробнее</a>
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
        <?php elseif ( get_row_layout() == 'screen_2' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section result-section result--about-page" id="<?php e('id'); ?>" style="">
                    <div class="container">
                        <div class="result">
                            <h3 class="section__title result__section">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>
                                <div class="result-list">

                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <div class="result-list__item show-text">
                                            <div class="result-list__icon">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <div class="result-list__title">
                                                <?php e('title'); ?>
                                            </div>
                                            <div class="result-list__text hidden-text-js">

                                                <?php e('text'); ?>

                                            </div>
                                            <a href="#" class="show-text-js">Поподробнее</a>
                                        </div>

                                    <?php endwhile; ?>

                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_3' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section documents-section" id="<?php e('id'); ?>" style="background-color: #faf7f1;">
                    <div class="container">
                        <div class="documents">
                            <h3 class="section__title documents__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php $docs = g('docs');
                            if($docs):
                                ?>

                                <div class="documents-list">

                                    <?php foreach ($docs as $doc): ?>

                                        <a href="<?php echo $doc['url']; ?>" class="documents-list__item fancybox">
                                            <img src="<?php echo $doc['url']; ?>" alt="">
                                        </a>

                                    <?php endforeach; ?>

                                </div>

                            <?php endif; ?>

                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_4' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section about-form-section" id="<?php e('id'); ?>">
                    <div class="container">
                        <h3 class="section__title about-form__title">
                            <?php e('title'); ?>
                        </h3>
                    </div>
                    <div class="about-form-container" style="background-color: #f9f5f5;">
                        <div class="container">
                            <form action="<?php echo $url_home; ?>mail.php" class="about-form" novalidate>
                                <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">

                                <div class="about-form__wrapper">
                                    <label class="conditions-form__label about-form__label">
                                        <span class="conditions-form__img">
                                            <img src="<?php echo $assets; ?>img/user.png" alt="">
                                        </span>
                                        <input type="text" required class="conditions-form__input" name="Имя" placeholder="<?php e('placeholder_1'); ?>">
                                    </label>

                                    <label class="conditions-form__label about-form__label">
                                        <span class="conditions-form__img">
                                            <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                                        </span>
                                        <input type="tel" required class="conditions-form__input" name="Телефон" placeholder="<?php e('placeholder_2'); ?>">
                                    </label>
                                    <button class="button conditions-form__button about-form__button button--gradient">
                                        <?php e('button_text'); ?>
                                    </button>
                                </div>

                                <label class="conditions-form__container about-form__consent">
                                    <input name="policy" required type="checkbox" checked class="conditions-form__checkbox">
                                    <span></span>
                                    <p>
                                        <?php e('consent'); ?>
                                    </p>
                                </label>

                            </form>
                        </div>
                    </div>
                </section>

            <?php endif; ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
