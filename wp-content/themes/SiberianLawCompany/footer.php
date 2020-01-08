<?php
$var = variables();
$set = $var['setting_home'];
$assets = $var['assets'];
$url = $var['url'];
$url_home = $var['url_home'];
$email = get_field('admin_email', $set);


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


</main>

<footer class="footer" id="footer" style="background-image:url(<?php the_field('footer_bg', $set); ?>);">

    <div class="container">
        <div class="footer-top">
            <div class="footer-nav">

                <?php if (have_rows('menu_columns', $set)): ?>

                    <?php while (have_rows('menu_columns', $set)) : the_row(); ?>

                        <div class="footer-list">
                            <h6>
                                <?php e('title'); ?>
                            </h6>
                            <?php if (have_rows('menu')): ?>
                                <ul>
                                    <?php while (have_rows('menu')) : the_row(); ?>
                                        <li>
                                            <a href="<?php echo g('menu_item')['url']; ?>">
                                                <?php echo g('menu_item')['title']; ?>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>
            <?php if (have_rows('social_links', $set)): ?>
                <div class="footer-socials">
                    <?php while (have_rows('social_links', $set)) : the_row(); ?>
                        <a href="<?php e('link'); ?>" class="footer-social">
                            <img src="<?php e('icon'); ?>" alt="">
                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="footer-contacts">
                <?php the_field('contacts_in_footer', $set); ?>
            </div>
        </div>
    </div>

    <div class="footer-bottom" style="background-color: #fff;">
        <div class="container">
            <div class="footer-bottom-container">
                <div class="footer-bottom-left">
                    <a href="<?php echo $link_to_home; ?>" class="footer-logo logo">
                        <img src="<?php the_field('logo_in_header', $set); ?>" alt="<?php bloginfo('name'); ?>">
                    </a>
                    <div class="footer-number">
                        <?php the_field('inn', $set); ?>
                    </div>
                </div>

                <div class="footer-bottom-text">
                    <p>
                        <?php the_field('text_in_footer', $set); ?>

                    </p>
                    <a href="https://xn--90anhz1e.xn--p1ai/politika-v-oblasti-obrabotki-i-zashhity-personalnyh-dannyh-OOO-Sib.JuK.pdf" target="_blank" class="footer-bottom__link">
                        Политика конфиденциальности
                    </a>
                </div>
            </div>

        </div>
    </div>


</footer>

<?php if (have_rows('modal_form', $set)): ?>

    <?php while (have_rows('modal_form', $set)) : the_row(); ?>

        <form novalidate
            action="<?php echo $url_home; ?>mail.php"
            class="modal form modal-get-forecast"
            style="background-image: url(<?php e('bg'); ?>)"
            id="get-forecast">
            <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
            <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
            <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">


            <h6 class="modal-get-forecast__title forecast__title">
                <?php e('title'); ?>
            </h6>

            <label class="modal-get-forecast__label">
                <input required type="text" class="modal-get-forecast__input" name="Имя" placeholder="<?php e('placeholder_1'); ?>">
            </label>
            <label class="modal-get-forecast__label">
                <input required type="text" class="modal-get-forecast__input" data-reg="^[A-z0-9._-]+@[A-z0-9.-]+\.[A-z]{2,4}$" name="Email" placeholder="<?php e('placeholder_2'); ?>">
            </label>
            <label class="modal-get-forecast__label">
                <input required type="tel" class="modal-get-forecast__input" name="Телефон" placeholder="<?php e('placeholder_3'); ?>">
            </label>
            <input type="hidden" class="text-js" name="text" value="">
            <div class="modal-get-forecast__text">
                <label class="conditions-form__container">
                    <input checked="" name="policy" type="checkbox" class="conditions-form__checkbox">
                    <span></span>
                    <?php e('text'); ?>
                </label>
<!--                <p>-->
<!--                    --><?php //e('text'); ?>
<!--                </p>-->
            </div>

            <button class="button--gradient modal-get-forecast__button">
                <?php e('button_text'); ?>
            </button>

        </form>

    <?php endwhile; ?>

<?php endif; ?>

<?php if (have_rows('modal_form_1', $set)): ?>

<?php while (have_rows('modal_form_1', $set)) : the_row(); ?>

        <form
                action="<?php echo $url_home; ?>mail.php"
                class="modal form modal-consult"
                id="modal-consult"
                style="background-color: #fff;"
                novalidate
        >

            <input type="hidden" name="project_name" value="<?php bloginfo('name'); ?>">
            <input type="hidden" name="admin_email" value="<?php echo $email; ?>">
            <input type="hidden" name="form_subject" value="<?php e('subject'); ?>">

            <h6 class="modal-consult__title">
                <?php e('title'); ?>
            </h6>

            <div class="modal-consult__text text">
                <p>
                    <?php e('description'); ?>
                </p>
            </div>

            <?php $l = g('link'); ?>

            <?php if($l): ?>

                <a href="<?php echo $l['url']; ?>" class="button button--gradient modal-consult__link"><?php echo $l['title']; ?></a>

            <?php endif; ?>



            <textarea class="modal-consult__textarea" name="Сообщение" placeholder="<?php e('placeholder_1'); ?>"></textarea>

            <label class="conditions-form__label modal-consult__label">
                <span class="conditions-form__img">
                    <img src="<?php echo $assets; ?>img/phone-img.png" alt="">
                </span>
                <input required type="tel" class="conditions-form__input modal-consult__input" name="Телефон" placeholder="<?php e('placeholder_3'); ?>">
            </label>

            <button class="button button--gradient modal-consult__button">
                <?php e('button_text'); ?>
            </button>

            <label class="conditions-form__container">
                <input type="checkbox" name="policy" checked class="conditions-form__checkbox">
                <span></span>
                <p>
                    <?php e('text'); ?>
                </p>
            </label>

        </form>

    <?php endwhile; ?>

<?php endif; ?>



<?php if (have_rows('modal_thanks', $set)): ?>

    <?php while (have_rows('modal_thanks', $set)) : the_row(); ?>
        <div
            class="modal modal-get-forecast"
            id="modal_thanks">

            <h6 class="modal-get-forecast__title forecast__title" style="color: #064e63">
                <?php e('title'); ?>
            </h6>
            <div class="modal-get-forecast__text" style="color: #064e63">
                <p>
                    <?php e('text'); ?>
                </p>
            </div>

            <?php if (have_rows('socials', $set)): ?>

                <div class="modal-socials" style="background: #c7212c">

                    <?php while (have_rows('socials', $set)) : the_row(); ?>

                        <a href="<?php e('link'); ?>" class="modal-socials__item">

                            <img src="<?php e('icon'); ?>" alt="">

                        </a>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

        </div>
    <?php endwhile; ?>

<?php endif; ?>

</body>

<?php wp_footer(); ?>

</html>