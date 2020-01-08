<?php
/* Template Name: Шаблон страницы FAQ */

get_header();

$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);
?>

<section class="section questions-section" id="questions-section">
    <div class="container">
        <div class="questions">
            <h1 class="section__title questions__title">
                <?php echo get_the_title(); ?>
            </h1>

            <div class="questions__text text">
                <?php echo the_post(); the_content(); ?>
            </div>

            <?php if (have_rows('list')): $i = 1; ?>

                <div class="questions-accordeon questions-accordeon--faq-page">

                    <?php while (have_rows('list')) : the_row(); ?>

                        <div class="questions-accordeon__item" id="question<?php echo $i; ?>">
                            <div class="questions-accordeon__title">
                                <?php e('question'); ?>
                            </div>
                            <div class="questions-accordeon__text">
                                <?php e('answer'); ?>
                            </div>
                        </div>

                    <?php $i++; endwhile; ?>

                </div>

            <?php endif; ?>

        </div>
    </div>
</section>

<?php if (have_rows('section_form')): ?>

    <?php while (have_rows('section_form')) : the_row(); ?>

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

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
