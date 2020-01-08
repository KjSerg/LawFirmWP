<?php
/* Template Name: Шаблон страницы "ВОЗМЕЩЕНИЕ ВРЕДА ЗДОРОВЬЮ" */

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

                <section class="section route-section" id="<?php e('screen_id'); ?>" style="background-color: #faf0de;">
                    <div class="container">
                        <div class="route">
                            <h3 class="section__title route__title">
                                <?php e('title'); ?>
                            </h3>

                            <?php if (have_rows('list')): ?>

                                <div class="route-list">
                                    <?php while (have_rows('list')) : the_row(); ?>

                                        <div class="route-list__item">
                                            <div class="route-list__img">
                                                <img src="<?php e('icon'); ?>" alt="">
                                            </div>
                                            <a href="<?php echo g('link') ? g('link') : '#'; ?>" class="route-list__link">
                                                <?php e('text'); ?>
                                            </a>
                                        </div>

                                    <?php endwhile; ?>
                                </div>

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

                                <?php if(!g('text_1')): ?>

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

                                    <div class="consult-text consult-list text" style="text-align: right; margin-bottom: 6rem;">
                                        <?php e('text_1'); ?>
                                    </div>

                                <?php endif; ?>



                                <a href="#get-forecast" class="fancybox button--gradient consult__button">
                                    <?php e('button_text'); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php if(g('text_block_bottom')): ?>

                        <div class="consult-text-block">
                            <div class="facts-additionally" style="background-image: linear-gradient(-8deg, #dbc6a2 0%, #f9e6c2 99%, #f9e6c2 100%); background-color: #dfb568;">
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
        <?php elseif ( get_row_layout() == 'screen_7' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section algorithm-section " id="<?php e('screen_id'); ?>" style="background-color: #fffcf6;">
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
        <?php elseif ( get_row_layout() == 'screen_get_help' ): ?>
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
                                    <form action="<?php echo $url_home; ?>mail.php" novalidate class="conditions-form cost-form form get-help-form">

                                        <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
                                        <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
                                        <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">


                                        <label class="conditions-form__label">
                                            <span class="conditions-form__img">
                                                <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                                            </span>
                                            <input required type="tel" class="conditions-form__input" name="Телефон" placeholder="<?php e('placeholder'); ?>">
                                        </label>

                                        <button class="button conditions-form__button button--gradient">
                                            <?php e('button_text'); ?>
                                        </button>

                                        <label class="conditions-form__container">
                                            <input type="checkbox" name="policy" checked class="conditions-form__checkbox">
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
        <?php elseif ( get_row_layout() == 'screen_documents_list' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section result-section result--about-page" id="<?php e('screen_id'); ?>" style="background-color: #f8fcfd; padding-bottom: 0;">
                    <div class="container">
                        <div class="result">
                            <h3 class="section__title result__section">
                                <?php e('title'); ?>
                            </h3>
                            <div class="result-list" style="background-color: #f8fcfd;">

                <?php if (have_rows('list')): ?>

                    <?php while (have_rows('list')) : the_row(); ?>
                                <div class="result-list__item">
                                    <div class="result-list__icon">
                                        <img src=" <?php e('icon'); ?>" alt="">
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
                        </div>
                    </div>
                <?php if (have_rows('add')): ?>
                    <div class="advantages-additionally" style="background-color: #064e63; margin-top: 8rem;">
                        <div class="container">
                            <ul class="advantages-additionally-list">
                    <?php while (have_rows('add')) : the_row(); ?>
                                <li class="advantages-additionally-list__item">
                                    <div class="advantages-additionally-list__icon">
                                        <img src="<?php e('icon'); ?>" alt="">
                                    </div>
                                    <div class="advantages-additionally-list__text">
                                        <?php e('text'); ?>
                                    </div>
                                </li>
                    <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_9' ): ?>
            <?php if (!get_sub_field('screen_off')) : ?>

                <section class="section price-section"  id="<?php e('screen_id'); ?>">
                    <div class="container">
                        <div class="price">



                            <h4 class="price__subtitle">
                                <?php e('title'); ?>
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




                            <a href="#modal-consult" class="button--gradient price__button fancybox"><?php e('button_text'); ?></a>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        <?php elseif ( get_row_layout() == 'screen_facts' ): ?>
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
                                        <?php $i = 1; while (have_rows('list')) : the_row(); if($i<=3): ?>

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

                                        <?php $i = 1; while (have_rows('list')) : the_row(); if($i>3): ?>

                                            <li <?php if($i == 4) echo 'style="width: 100%;"'; ?>  class="facts-row__item <?php if($i == 4) echo 'long-number'; ?> ">

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

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
